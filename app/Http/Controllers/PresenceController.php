<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presence;


class PresenceController extends Controller
{
    public function index(){
    
        $collection = Presence::orderBy('id', 'DESC')->get();
        return view('presensi.presensi',compact('collection'));
    }
    // method show
    public function show($id){
        $presence = Presence::find($id);
        return view('presensi.show',compact('presence'));
    }   

   
}
