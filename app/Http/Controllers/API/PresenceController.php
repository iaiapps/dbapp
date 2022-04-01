<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;
use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Resources\PresenceResource;
use Illuminate\Support\Facades\Validator;

class PresenceController extends Controller
{
    public function index()
    {
        $data = Presence::get();
        return response()->json($data);
    }
    
    public function store(Request $request)
    {
        //cek apakah ada note request('izin atau sakit') 
        if ($request->has('note')) {
            $this->thereIsANote($request->teacher_id, $request->note);
        } else {
            //  cek apakah kita memakai batas waktu
            if ($this->_isDeadline()==false) {
                $deadline = true;
            }else{
                $deadline = false;
            }
            if ($deadline==true) {
                $validator = Validator::make($request->all(), [
                    'teacher_id'=>'required',
                ]);
                
                if ($validator->fails()) {
                    return response()->json($validator->errors());
                }
                
                // cek ada gak gurunya
                $guru = Presence::where('teacher_id', $request->teacher_id)
                ->whereDate('created_at', '=', Carbon::today()
                ->toDateString())
                ->first();
                
                // jika tidak ada data absen hari ini
                if ($guru==null) {
                    // INI ISI PULANG AJA (DIA GA NGISI DATANG)
                    // DATANG GA ABSEN
                    $jamNow = Carbon::now()->isoformat('H:m:s');
                    if ($jamNow > $this->_timeScan('early_time_leave')) {
                        // maka dia langsung isi datang dan pulang
                        Presence::create([
                            'teacher_id'=>$request->teacher_id,
                            'date'=>date("d/m/y"),
                            'time_in'=> $this->_timeScan('end_time_come'),
                            'time_out'=> $jamNow,
                            'is_late'=>true,
                            'note'=>'Telat'
                        ]);
                        $is_late = true;
                    } else {
                        // DATANG ABSEN
                        $jamNow = Carbon::now()->isoformat('H:m:s');
                        $waktu_normal = $this->_timeScan('ontime_until');
                        // logika terlambat
                        if ($jamNow > $waktu_normal) {
                            $is_late = true;
                            $note = 'Telat';
                        } else {
                            $is_late = false;
                            $note = 'Tepat waktu';
                        }
                        Presence::create([
                            'teacher_id'=>$request->teacher_id,
                            'date'=>date("d/m/y"),
                            'time_in'=> $jamNow,
                            'is_late'=>$is_late,
                            'note'=>$note
                        ]);
                    }
                    return response()->json(['time_in'=>$jamNow,'note'=>$note]);
                } else {
                    $guru->update([
                        'time_out'=>Carbon::now()->isoformat('H:m:s'),
                    ]);
                    return response()->json(['Berhasil Absen Pulang']);
                }
            } else {
                return response()->json(['error'=>'Waktu Absen Tidak Valid']);
            }
        }
    }
    
    public function show($id)
    {
        $presence = Presence::where('teacher_id',$id)->get();
        if (is_null($presence)) {
            return response()->json('Data not found', 404); 
        }
        return response()->json([new PresenceResource($presence)]);
    }
    
    public function destroy(Presence $presence)
    {
        $presence->delete();
        return response()->json('Presence deleted successfully');
    }
    
    private function _isDeadline()
    {
        $setting = DB::table('presence_setting')->where('name', 'dateline')->first();
        if($setting->value==1){
            $setting = true;
        }else{
            $setting = false;
        }
        return $setting;
    }
    
    private function _timeScan($for)
    {
        $setting = DB::table('presence_setting')->where('name', $for)->first();
        return $setting->value;
    }
    
    private function _scannable()
    {
        $now = Carbon::now();
        if ($now >= Carbon::parse($this->_timeScan('early_time_come')) && $now <= Carbon::parse($this->_timeScan('end_time_come'))) {
            $scannable = true;
        } elseif ($now >= Carbon::parse($this->_timeScan('early_time_leave')) && $now <= Carbon::parse($this->_timeScan('end_time_leave'))) {
            $scannable = true;
        } else {
            $scannable = false;
        }
        return $scannable;
    }
    
    public function thereIsANote($teacher_id,$note)
    {
        $presence = Presence::create([
            'teacher_id'=>$teacher_id,
            'date'=>date("d/m/y"),
            'time_in'=> '-',
            'time_out'=> '-',
            'is_late'=>false,
            'note'=>$note
        ]);
    }
}

// coba mainkan lagi logikanya, takut salah

// kondisi 1 : dateline(batas waktu)
    // jika true
        // maka $scannable = true (hanya bisa scan di jam yang di tentukan)
    // jika false
        // maka $scannable = false (bisa scan kapanpun)

// kondisi 2 : scannable (waktu scan)
    // jika waktu scan > erly_time_come & waktu scan < end_time_come
        // maka bernilai true
    // jika waktu scan > early_time_leave & waktu scan < end_time_leave
        // maka bernilai true
    // jika tidak keduanya
        // maka false

// kondisi 3 : is_late (telat apa tidak)
    // jika jam_datang diantara ontime_until dan early_time_leave (7.30-14)
        // maka is_late = true

// kondisi 4 : default leave at 14.30
    // jika jam_pulang last_day is null,
        //maka isikan ke 14.30
        


