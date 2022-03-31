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
        //  cek apakah kita memakai batas waktu
        if ($this->_isDeadline()==true) {
            // cek dulu waktu presensi benar atau tidak
            $scannable = $this->_scannable();
        }
        
        if ($scannable==true) {
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
                // inisialisasi tepat waktu
                $waktu_hadir = Carbon::now()->format('H:i');
                $waktu_normal = date("07:30");
                // logika terlambat
                if ($waktu_hadir > $waktu_normal) {
                    $is_late = 'yes';
                } else {
                    $is_late = 'no';
                }
                Presence::create([
                    'teacher_id'=>$request->teacher_id,
                    'date'=>date("d/m/y"),
                    'time_in'=>date("h:i:s"),
                    'is_late'=>$is_late
                ]);
                return response()->json(['time_in'=>$waktu_hadir,'is_late'=>$is_late]);
            } else {
                $guru->update([
                    'time_out'=>date("h:i:s"),
                ]);
                return response()->json(['Berhasil Absen Pulang']);
            }
        }else{
            return response()->json(['error'=>'Waktu Absen Tidak Valid']);
        }
    }
    
    public function show($id)
    {
        $presence = Presence::find($id);
        if (is_null($presence)) {
            return response()->json('Data not found', 404); 
        }
        return response()->json([new PresenceResource($presence)]);
    }
    
    
    public function update(Request $request,$id)
    {
        $presence=Presence::find($id);
        $presence->update($request->all());
        return $presence;
        
        return response()->json(['updated successfully.', new PresenceResource($presence)]);
    }
    
    public function destroy(Presence $presence)
    {
        $presence->delete();
        
        return response()->json('Presence deleted successfully');
    }
    
    // check deadline is setting_presence
    private function _isDeadline()
    {
        $setting = DB::table('presence_setting')->where('name', 'dateline')->first();
        return $setting->value;
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
    
    
}
