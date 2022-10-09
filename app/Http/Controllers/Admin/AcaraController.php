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
    public function teachers()
    {
        return Inertia::render('Teacher/Index', ['teachers' => Teacher::all()]);
    }
}
