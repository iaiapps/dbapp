<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presence;


class PresenceController extends Controller
{
    function getPresences(){
    
        $collection = Presence::orderBy('id', 'DESC')->get();
        return view('presensi.presensi',compact('collection'));
    }

    
}
