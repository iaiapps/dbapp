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
        // return Inertia::render('Acara/Index');
    }
    public function acaraIndex()
    {
        $acara = Acara::query()
            ->with('kategoriAcara')->get();
        return Inertia::render('Acara/Acara/Index', compact('acara'));
    }
    public function kategoriIndex()
    {
        $kategori = KategoriAcara::all();
        return Inertia::render('Acara/Kategori/Index', compact('kategori'));
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
        return Inertia::render('Teacher/Index', ['teachers' => $teachers]);
    }

    public function teacherShow($id)
    {
        $acara = Teacher::find($id)->acaras->map(function ($item) {
            $ca = Carbon::parse($item->pivot->created_at);
            // dd($item->kategoriAcara);
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
}
