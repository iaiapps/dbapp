<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Submission;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    function data()
    {
        $item = Student::where('nisn',Auth::user()->nisn)->first();
        if(!isset($item)){
            return redirect()->intended('home');
        }else{
            return view('siswa.student_detail', compact('item'));
        }
    }
    function editStudent()
    {
        $item = Student::where('nisn',Auth::user()->nisn)->first();
        return view('siswa.student_edit',compact('item'));
    }
    public function ajukanUpdate(Request $request)
    {
        Submission::create($request->all());
        Student::where('nisn',Auth::user()->nisn)->update(['status_verifikasi'=>3]);
        return redirect()->route('siswa.data');
    }
    function achievement()
    {
        return view('siswa.student_prestasi');
    }
    function inputAchievement(Request $request)
    {
        $id = Student::where('nisn', Auth::user()->nisn)->first()->id;
        $data = $request->all();
        $data['student_id'] = $id;
        Achievement::create($data);
        return redirect()->route('siswa.data')->with('success','Prestasi berhasil ditambah');
    }
    public function deleteAchievement($id)
    {
        //fungsi eloquent untuk menghapus data
        Achievement::find($id)->delete();
        return redirect()->route('siswa.data')->with('success', 'Prestasi di hapus');
    }
    public function pengajuanRevisi()
    {
        $nisn = Auth::user()->nisn;
        // $a = DB::table('students AS t1')
        // ->select('t1.nisn')
        // ->leftJoin('submissions AS t2','t2.nisn','=','t1.nisn')
        // ->whereNull('t2.jk')->get();
        
        // dd($a);
        // $jml_klm = Student::where('nisn',$nisn)->first();
        // dd($jml_klm);

        $dataOld = Student::where('nisn',$nisn)->first();
        $dataNew = Submission::where('nisn',$nisn)->latest()->first();

        return view('siswa.pengajuan_revisi',compact('dataOld','dataNew'));


    }
}
