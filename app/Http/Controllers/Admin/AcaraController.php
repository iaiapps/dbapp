<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Acara;
use App\Models\Teacher;
use App\Models\TempClass;
use Illuminate\Http\Request;
use App\Models\KategoriAcara;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\TempStudent;

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
        $acara = Acara::with('teachers')->whereYear('untuk_tanggal', $tahun)
            ->orderByDesc('untuk_tanggal')
            ->paginate()
            ->withQueryString()
            ->through(function ($i) {
                $jml_hadir = DB::table('acara_teacher')->where('acara_id', $i->id)->count();
                return [
                    'id' => $i->id,
                    'kategori' => $i->kategoriAcara->nama_kategori,
                    'nama' => $i->nama_acara,
                    'tanggal' => $i->untuk_tanggal,
                    'lokasi' => $i->lokasi,
                    'catatan' => $i->catatan,
                    'jml_hadir' => $jml_hadir,
                    'for' => $i->for,
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
    public function kategoriDestroy($id)
    {
        KategoriAcara::find($id)->delete();
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
    public function acaraDestroy($id)
    {
        // $managementUnit = ManagementUnit::find(1);
        // $managementUnit->councils()->where('id', 1)->wherePivot('year', 2011)->detach(1);
        $acara = Acara::find($id);
        $acara->delete();
    }
    public function acaraStore(Request $req)
    {
        Acara::create([
            'nama_acara' => $req->nama_acara,
            'kategori_acara_id' => $req->kategori_acara_id,
            'untuk_tanggal' => $req->untuk_tanggal,
            'tempat' => $req->tempat,
            'catatan' => $req->catatan,
            'is_active' => $req->is_active,
            'for' => $req->for[0],
        ]);
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
    public function hadir(Request $req)
    {
        if ($for = (int)$req->input('for')) {
            $filters = $req->only(['for']);
            // dd($req->all());
            $acara = Acara::whereDate('untuk_tanggal', '=', Carbon::now())
                ->orWhere('is_active', true)
                ->where('for', [3, $for])
                ->select('id', 'nama_acara')->get();
            $yang_dicari = $req->input('name');
            if ($for == 1) {
                $data = Teacher::where('nama', 'LIKE', "%{$yang_dicari}%")->skip(0)->take(5)->get()->map(function ($i) {
                    return [
                        'id' => $i->id,
                        'nama' => $i->nama,
                    ];
                });
            } else {
                $data = TempStudent::where('temp_students.name', 'LIKE', "%{$yang_dicari}%")
                    ->skip(0)->take(5)->get()->map(function ($i) {
                        return [
                            'id' => $i->id,
                            'nama' => $i->name,
                            'kelas' => $i->temp_class->name,
                            'kelas_id' => $i->temp_class->id,
                        ];
                    });
            }
            return Inertia::render('Acara/Acara/Hadir', compact('acara', 'filters', 'data'));
        }
        return Inertia::render('Acara/Acara/Hadir');
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
    public function tahsin(Request $req)
    {
        $kelas = TempClass::all();
        $siswa = TempStudent::all();
        if ($s = $req->input('siswaTerpilih')) {
            $kelas = TempStudent::where('temp_students.name', $s)
                ->join('temp_classes', 'temp_students.class_id', '=', 'temp_classes.id')
                ->first()->name;
            return Inertia::render('GForm/Tahsin', compact('siswa', 'kelas'));
        }
        return Inertia::render('GForm/Tahsin', compact('siswa'));
    }
}
