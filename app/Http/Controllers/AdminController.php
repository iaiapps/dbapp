<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $role_id = Auth::user()->roles->first()->id;
        $menus= DB::table('menus')->where('role_id',$role_id)->get();
        return view('admin.home',compact('menus'));
    }
}
