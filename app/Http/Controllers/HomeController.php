<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index()
    { 
        $user = Auth::user();
        $sekolah = School::first();
        $jml_guru = Teacher::get()->count();
        $jml_siswa = Student::get()->count();

        return view('admin.home',compact('jml_guru','jml_siswa', 'sekolah'));
    }
   
    
}