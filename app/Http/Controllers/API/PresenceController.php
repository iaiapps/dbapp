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
    // INI NORMAL
    public function index()
    {
        $data = Presence::get();
        return response()->json([
            'pesan' => 'success',
            'data' => $data
        ], 200);
    }
    public function show($id)
    {
        $presence = Presence::where('teacher_id',$id)->get();
        if (is_null($presence)) {
            return response()->json(['pesan'=>'Data tidak ditemukan'], 404); 
        }
        return response()->json(['pesan'=>'Data ditemukan','data'=> new PresenceResource($presence)], 200);
    }
    public function destroy(Presence $presence)
    {
        $presence->delete();
        return response()->json(['pesan'=>'Data berhasil dihapus'], 200);
    }
    
    // INI BUTUH MIKIR DAN KERJA EXTRA wkwkw
    // step cek :
    // 1. note
    // 2. timeline
    // 3. scannable
    // 4. is_late
    // 5. default leave
    
    public function store(Request $request)
    {
        $now = Carbon::now()->isoformat('H:m:s');
        if($request->has('note')){
            return $this->_note($request->teacher_id, $request->note);
        }else{
            if ($this->_timeline()==true) {
                if($this->_scannable()==true){
                    if($this->validateAndCheck($request)==true){
                        $now = Carbon::now();
                        $early_time_leave = Carbon::createFromTimeString($this->_settingValue('early_time_leave'));
                        $end_time_leave = Carbon::createFromTimeString($this->_settingValue('end_time_leave'));
                        if($now->between($early_time_leave, $end_time_leave)){
                            return $this->scanLeaveOnly($request);
                        }else{
                            return $this->saveData($request, $this->_isLate());
                        }
                    }else{
                        return $this->absenPulang($request);
                    }
                }else{
                    return response()->json(['pesan'=>'waktu scan tidak valid'], 404);
                }
            }else{
                if($this->validateAndCheck($request)==true){
                    return $this->saveData($request, $this->_isLate());
                }else{
                    Presence::where('teacher_id', $request->teacher_id)
                    ->whereDate('created_at', '=', Carbon::today()
                    ->toDateString())
                    ->update(['time_out'=>$now]);
                    return response()->json(['pesan'=>'Berhasil absen pulang','data'=>$now],200);
                }
            }
        }
    }
    private function _scannable()
    {
        $now = Carbon::now();
        $early_time_come = Carbon::createFromTimeString($this->_settingValue('early_time_come'));
        $end_time_come = Carbon::createFromTimeString($this->_settingValue('end_time_come'));
        $early_time_leave = Carbon::createFromTimeString($this->_settingValue('early_time_leave'));
        $end_time_leave = Carbon::createFromTimeString($this->_settingValue('end_time_leave'));
        if($now->between($early_time_come, $end_time_come)){
            return true;
        }elseif($now->between($early_time_leave, $end_time_leave)){
            return true;
        }else{
            return false;
        }
    }
    private function _note($teacher_id, $note)
    {
        $presence = Presence::where('teacher_id',$teacher_id)->whereDate('created_at', '=', Carbon::today())->first();
        if ($presence==null) {
            $presence = Presence::create([
                'teacher_id'=>$teacher_id,
                'date'=>date("d/m/y"),
                'time_in'=> '-',
                'time_out'=> '-',
                'is_late'=>false,
                'note'=>$note
            ]);
            return response()->json(['pesan'=>'Berhasil menambahkan catatan izin/sakit','data'=>$presence], 200);
        }else{
            return response()->json([
                'pesan'=>'Data sudah ada',
                'data'=>$presence
            ], 200);
        }
    }
    private function _timeline()
    {
        if($this->_settingValue('timeline')=='1'){
            return true;
        }else{
            return false;
        }
    }
    private function _settingValue($for)
    {
        return DB::table('presence_setting')->where('name',$for)->first()->value;
    }
    private function _isLate()
    {
        $now = Carbon::now();
        $ontime = Carbon::createFromTimeString($this->_settingValue('ontime_until'));
        $early_time_come = Carbon::createFromTimeString($this->_settingValue('early_time_come'));
        if ($now->between($early_time_come, $ontime)) {
            return false;
        }else{
            return true;
        }
    }
    public function validateAndCheck($request)
    {
        $validator = Validator::make($request->all(), [
            'teacher_id'=>'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'pesan'=>'Data tidak valid',
                'errors'=>$validator->errors()
            ], 404);
        }
        $presence = Presence::where('teacher_id', $request->teacher_id)
        ->whereDate('created_at', '=', Carbon::today()
        ->toDateString())
        ->first();
        
        if($presence==null){
            return true;
        }else{
            return false;
        }
    }
    public function saveData($request,$is_late)
    {
        if ($is_late==false) {
            $note = 'Tepat waktu';
        }else{
            $note = 'Telat';
        }
        $jamNow = date('H:i:s');
        $presence = Presence::create([
            'teacher_id'=>$request->teacher_id,
            'date'=>date("d/m/y"),
            'time_in'=> $jamNow,
            'time_out'=> '',
            'is_late'=>$is_late,
            'note'=>$note
        ]);
        return response()->json([
            'pesan'=>'Berhasil absen masuk',
            'data'=>$presence
        ], 200);
    }
    public function absenPulang($request)
    {
        // cek dulu takut ada note nya
        $presence = Presence::where('teacher_id', $request->teacher_id)->orderBy('id','desc')->first();
        if($presence->time_in=='-'){
            $presence->time_out = '-';
            $presence->save();
            return response()->json([
                'pesan'=>'Berhasil absen pulang',
                'data'=>$presence
            ], 200);
        }else{
            //cek dulu, jika sdh ada, jangan absen lagi. nunggu waktu
            $now = Carbon::now();
            $early_time_leave = Carbon::createFromTimeString($this->_settingValue('early_time_leave'));
            $end_time_leave = Carbon::createFromTimeString($this->_settingValue('end_time_leave'));
            if ($now->between($early_time_leave, $end_time_leave)) {
                Presence::where('teacher_id', $request->teacher_id)
                ->whereDate('created_at', '=', Carbon::today()
                ->toDateString())
                ->update(['time_out'=>Carbon::now()->isoformat('H:m:s')]);
                return response()->json(['pesan'=>'Berhasil absen pulang','data'=>Carbon::now()->format('H:m:s')], 200);
            }else{
                return response()->json(['pesan'=>'Belum saatnya pulang'], 200);
            }
        }
    }   
    public function scanLeaveOnly($request)
    {
        $jamNow = Carbon::now()->isoformat('H:m:s');
        $presence = Presence::create([
            'teacher_id'=>$request->teacher_id,
            'date'=>date("d/m/y"),
            'time_in'=> '09:00:00',
            'time_out'=> $jamNow,
            'is_late'=>true,
            'note'=>'Telat'
        ]);
        return response()->json([
            'pesan'=>'Berhasil absen masuk',
            'data'=>$presence
        ], 200);
    }

    public function getQrCodes()
    {
        $qr = DB::table('presence_setting')->where('name','qrcode')->get();
        return response()->json([
            'pesan'=>'Berhasil mendapatkan kode qr-code',
            'data'=>$qr
        ], 200);
    }
    public function getQrCode()
    {
        $qr = DB::table('presence_setting')->where('desc','gedung1')->first();
        return $qr;
    }
    public function getTimeSettings()
    {
        $qr = DB::table('presence_setting')->where('name','!=','qrcode')->get();
        return response()->json([
            'pesan'=>'Berhasil mendapatkan Settings',
            'data'=>$qr
        ], 200);
    }
}
