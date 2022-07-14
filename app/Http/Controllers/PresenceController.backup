<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Teacher;
use App\Models\Presence;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\Preset;
use App\Exports\PresencesExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
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
        public function getSetting()
        {
            return DB::table('presence_setting')->where('name','!=','qrcode')->get();
        }
        public function qrCode()
        {
            return DB::table('presence_setting')->where('name','qrcode')->get();
        }
        public function updateQrCode(Request $request)
        {
            DB::table('presence_setting')->where('desc','gedung1')->update(['value'=>$request->qrcode]);
            // buatkan juga qrnya
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> bf11d4af1ed0dcfc658b165efd7f2b2aafbb63f6
            // $image = QrCode::format('png')
            //      ->merge('http://s.sim.siap-online.com//upload/sekolah/20554128.150326103424.png', 0.1, true)
            //      ->size(200)->errorCorrection('H')
            //      ->generate($request->qrcode);
            // $output_file = '/qrcode/img-' . $request->qrcode . '.png';
            // Storage::disk('local')->put($output_file, $image); //storage/app/public/img/qr-code/img-1557309130.png
<<<<<<< HEAD
=======
            $image = QrCode::format('png')
            ->merge('http://s.sim.siap-online.com//upload/sekolah/20554128.150326103424.png', 0.1, true)
            ->size(200)->errorCorrection('H')
            ->generate($request->qrcode);
            $output_file = '/qrcode/img-' . $request->qrcode . '.png';
            Storage::disk('local')->put($output_file, $image); //storage/app/public/img/qr-code/img-1557309130.png
>>>>>>> 2d5ea2926fe326683a5956b9c4cfb329aa8b482c
=======
>>>>>>> bf11d4af1ed0dcfc658b165efd7f2b2aafbb63f6
            return back()->with('success','QR Code berhasil di update');
        }
        public function edit(Request $request, $id)
        {
            $presence = Presence::find($id);
            
            return response()->json([
                'data' => $presence
            ]);
        }
        public function editJam(Request $request)
        {
            if($request->ajax()){
                $editModeData = Presence::Find($request->id);
                $editModeData->jam_masuk = $request->jam_masuk;
                return Response($editModeData);
            }
        }
        public function updateJam(Request $request)
        {
            $time_in = Carbon::parse($request->time_in)->format('H:i:s');
            $time_out = Carbon::parse($request->time_out)->format('H:i:s');
            $created_at = Carbon::parse($request->time_in)->toDateTimeString();
            $updated_at = Carbon::parse($request->time_out)->toDateTimeString();
            $date= Carbon::parse($request->time_in)->format('d/m/Y');
            $is_late = $request->is_late;
            if($is_late == 1){
                $note ='telat';
            }else{
                $note ='tepat Waktu';
            }

            $presence = Presence::where('id',$request->id);

            $presence->update([
                'time_in' => $time_in,
                'time_out' => $time_out,
                'created_at' => $created_at,
                'updated_at' => $updated_at,
                'is_late' => $is_late,
                'note' => $note,
                'date'=>$date
            ]);
            return redirect()->back()->with('success','Jam masuk berhasil di update');
        }
    }
    