<?php

namespace App\Http\Controllers;

use App\Exports\PresencesExport;
use Carbon\Carbon;
use App\Models\Teacher;
use App\Models\Presence;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\Preset;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx\Rels;

class PresenceController extends Controller
{
    public function index(){            
        $month = Carbon::now()->month;
        $year = Carbon::now()->year;
        $presences = $this->getPresencesWhereMonth(Carbon::now());
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
        public function getPresencesWhereMonth($date)
        {
            // NOTED:MALIK
            // ini penting banget untuk di catat, jarang aku pake ini soalnya. 
            // akhirnya query panjang nya bs jadi pendek gini
            // perhatikan bahwa sebelum di groupby kamu harus select dulu kolom yang akan di groupby     
            // di index kita akan menampilkan data bulan ini

            // $arr = ['sakit','izin'];
            // $arr = join(",",$arr);

            $month = Carbon::parse($date)->month;
            $year = Carbon::parse($date)->year;
            $presences = Presence::
            whereYear('created_at', $year)
            ->whereMonth('created_at', $month)
            ->select('teacher_id', DB::raw('SUM(is_late) as total_telat'), DB::raw('count(*) as total_kehadiran'))
            ->groupBy('teacher_id')
            ->with([
            'teacher'  => function ($q) {
                $q->select('id', 'nama');
            }])
            ->get(); 
            return $presences;
        }
        public function monthlyPresence(Request $request)
        {
            $month = Carbon::parse($request->date)->month;
            $year = Carbon::parse($request->date)->year;
            $presences = $this->getPresencesWhereMonth($request->date);
            return view('presences.index', compact('presences','month','year'));
        }
        function exportExcel(Request $request)
        {
            $date = Carbon::parse($request->date);
            $month = $date->month()->isoFormat('MMMM');
            $year= $date->month()->isoFormat('Y');
            $name = $month.' '.$year;
            // return Excel::download(new PresencesExport($date->month,$date->year), 'PresensiGuru-'. $name .'.xlsx');
            return Excel::download(new PresencesExport(), 'PresensiGuru-'. $name .'.xlsx');
        }
        
}
        