<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PresenceController extends Controller
{
    public function index(){
    
        // presence group by and pluck
        $presences = Presence::
        groupBy('teacher_id')
        ->pluck('teacher_id');
        dd($presences);


    }
    // method show
    public function show($id){
        $presence = Presence::find($id);
        return view('presensi.show',compact('presence'));
    }   

   
}
