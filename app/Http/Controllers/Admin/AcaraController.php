<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Models\Acara;
use Illuminate\Http\Request;
use App\Models\KategoriAcara;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Carbon\Carbon;

class AcaraController extends Controller
{
    public function index()
    {
    }
    public function history()
    {
        $history = DB::table('acara_teacher')
            ->orderByDesc('created_at')
            ->join('acara', 'acara_teacher.acara_id', '=', 'acara.id')
            ->join('teachers', 'acara_teacher.teacher_id', '=', 'teachers.id')
            ->select('nama', 'nama_acara', 'acara_teacher.created_at')
            ->paginate()
            ->through(function ($i) {
                return [
                    'nama' => $i->nama,
                    'nama_acara' => $i->nama_acara,
                    'ca' => Carbon::parse($i->created_at)->diffForHumans()
                ];
            });
        return Inertia::render('Acara/Acara/History', compact('history'));
    }
    public function acaraIndex(Request $req)
    {
        $kategori = KategoriAcara::all();
        $tahun = $req->input('tahun') ?: date('Y');
        $acara = Acara::whereYear('untuk_tanggal', $tahun)
            ->orderByDesc('untuk_tanggal')
            ->paginate()
            ->withQueryString()
            ->through(function ($i) {
                return [
                    'id' => $i->id,
                    'kategori' => $i->kategoriAcara->nama_kategori,
                    'nama' => $i->nama_acara,
                    'tanggal' => $i->untuk_tanggal,
                    'lokasi' => $i->lokasi,
                    'catatan' => $i->catatan,
                    'is_active' => $i->is_active,
                ];
            });
        return Inertia::render('Acara/Acara/Index', compact('acara', 'tahun', 'kategori'));
    }
    public function kategoriIndex()
    {
        $kategori = KategoriAcara::all();
        return Inertia::render('Acara/Kategori/Index', compact('kategori'));
    }
    public function kategoriStore(Request $req)
    {
        $k = new KategoriAcara;
        $k->nama_kategori = $req->nama;
        $k->save();
    }
    public function toggleAcara(int $id)
    {
        $a = Acara::find($id);
        $a->is_active = !$a->is_active;
        $a->save();
    }
    public function rekap()
    {
        $rekap = DB::table('acara_teacher')->get();
        return Inertia::render('Acara/Rekap/Index', compact('rekap'));
    }
    public function acaraShow($id)
    {
        $teachers = Acara::find($id)->teachers->map(function ($item) {
            $createdAt = Carbon::parse($item->pivot->created_at);
            return [
                'id' => $item->id,
                'nama' => $item->nama,
                'jam' => $createdAt->format('d M Y')
            ];
        })->toArray();
        return Inertia::render('Acara/Acara/Show', compact('teachers'));
    }
    public function acaraStore(Request $req)
    {
        Acara::create($req->all());
    }
    public function teachers(Request $req)
    {
        $bulan = $req->input('bulan') ?: date('m');
        $tahun = $req->input('tahun') ?: date('Y');
        $teachers = Teacher::all()->map(function ($i) use ($bulan, $tahun) {
            $acara = DB::table('acara_teacher')->where('teacher_id', $i->id)
                ->whereMonth('created_at', $bulan)
                ->whereYear('created_at', $tahun)
                ->count();
            return [
                'id' => $i->id,
                'nama' => $i->nama,
                'jml' => $acara
            ];
        })->toArray();
        $filters = $req->only(['bulan', 'tahun']);
        return Inertia::render('Teacher/Index', ['teachers' => $teachers, 'filters' => $filters]);
    }

    // public function teacherShow($id)
    // {
    //     $acara = DB::table('acara_teacher')
    //         ->where('teacher_id', $id)
    //         ->paginate(4)
    //         ->through(function ($item) {
    //             $ca = Carbon::parse($item->created_at);
    //             $na = Acara::where('id', $item->acara_id)->first();
    //             return [
    //                 'id' => $item->id,
    //                 'nama_acara' => $na->nama_acara,
    //                 'tanggal' => $ca->format('d M Y'),
    //                 'jam' => $ca->format('H:i:s'),
    //             ];
    //         });
    //     return Inertia::render('Teacher/Show', compact('acara'));
    // }
    public function teacherShow($id)
    {
        $acara = Teacher::find($id)->acaras->map(function ($item) {
            $ca = Carbon::parse($item->pivot->created_at);
            return [
                'id' => $item->id,
                'nama_acara' => $item->nama_acara,
                'kategori' => $item->kategoriAcara->nama_kategori,
                'tanggal' => $ca->format('d M Y'),
                'jam' => $ca->format('H:i:s'),
            ];
        });
        return Inertia::render('Teacher/Show', compact('acara'));
    }
    public function hadir()
    {
        $guru = Teacher::all();
        $acara = Acara::whereDate('untuk_tanggal', '=', Carbon::now())
            ->orWhere('is_active', true)
            ->select('id', 'nama_acara')->get();
        return Inertia::render('Acara/Acara/Hadir', compact('acara', 'guru'));
    }
    public function hadirPost(Request $req)
    {
        DB::table('acara_teacher')->insert(
            [
                'acara_id' => $req->acara,
                'teacher_id' => $req->guru,
                "created_at" =>  \Carbon\Carbon::now(),
                "updated_at" =>  \Carbon\Carbon::now(),
            ]
        );
    }
}
