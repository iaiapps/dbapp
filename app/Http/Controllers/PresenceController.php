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
        // di index kita akan menampilkan data bulan ini
        $start_date = new Carbon('last day of last month');
        $end_date = Carbon::now()->addDay();
        // $bulan_yang_ditampilkan = Carbon::now()->isoFormat('MMMM').' '.$start_date->year;

        $presences = Presence::
        select('teacher_id', DB::raw('SUM(is_late) as total_telat'), DB::raw('count(*) as total_kehadiran'))
        ->whereBetween('created_at', [$start_date, $end_date]) 
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
            $start_date = new Carbon('last day of last month');
            $end_date = Carbon::now()->addDay();
            $presences = Presence::where('teacher_id',$id)->whereBetween('created_at',[$start_date,$end_date])->get();
            return view('presences.show',compact('presences','id'));
        }       
        
        public function betweenDate(Request $request)
        {
            $id = $request->teacher_id;
            if ($request->start_date || $request->end_date) {
                $start_date = Carbon::parse($request->start_date)->toDateTimeString();
                $end_date = Carbon::parse($request->end_date)->addDay()->toDateTimeString();
                $presences = Presence::where('teacher_id',$id)->whereBetween('created_at',[$start_date,$end_date])->get();
                return view('presences.show', compact('presences','id'));
            } else {
                $this->show($id);
            }
        }
        
    }
    