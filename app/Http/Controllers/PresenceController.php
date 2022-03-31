<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Presence;
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
        // kalo kamu pake select * kamu harus pake select kolom yang akan di groupby
        // select count(*) 
        // select count(*) as jumlah 
        
        // bisa kaya gini :
        // dd(Presence::select('teacher_id')->groupBy('teacher_id')->with([
            // 'teacher'  => function ($query) {
                //     $query->select('id', 'nama');
                // }])->get());
                
            $presences = Presence::select('teacher_id')->groupBy('teacher_id')->with([
            'teacher'  => function ($q) {
                $q->select('id', 'nama');
            }])->get();

            return view('presences.index', compact('presences'));
        }
                    // method show
                    public function show($id){
                        $presence = Presence::find($id);
                        return view('presensi.show',compact('presence'));
                    }   
                    
                    
                }
                