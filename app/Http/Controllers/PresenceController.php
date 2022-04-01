<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Presence;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\Preset;

class PresenceController extends Controller
{
    public function index(){            
    // NOTED:MALIK
    // ini penting banget untuk di catat, jarang aku pake ini soalnya. 
    // akhirnya query panjang nya bs jadi pendek gini
    // perhatikan bahwa sebelum di groupby kamu harus select dulu kolom yang akan di groupby                
    $presences = Presence::
    select('teacher_id', DB::raw('SUM(is_late) as total_telat'), DB::raw('count(*) as total_kehadiran'))
    ->groupBy('teacher_id')
    ->with([
        'teacher'  => function ($q) {
            $q->select('id', 'nama');
        }])
        ->get();
        
        return view('presences.index', compact('presences'));
    }
    
    public function show($id){
        $id = (int)$id;
        $presences = Presence::where('teacher_id', $id)->get();
        return view('presences.show',compact('presences','id'));
    }       
    
    public function rangePresence(Request $request){
        $start = $request->start_date;
        $end = $request->end_date;
        // 2022-04-01 to timestamp laravel
        $start = Carbon::createFromFormat('Y-m-d', $start);
        $end = Carbon::createFromFormat('Y-m-d', $end);
        $presences = Presence::whereBetween('created_at', [$start, $end])
        ->where('teacher_id', $request->id)
        ->get();

        $id = $request->id;
        return view('presences.show', compact('presences','id'));
    }

}
    