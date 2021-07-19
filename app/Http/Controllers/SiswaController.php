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

        $dataOld = Student::where('nisn',$nisn)->first();
        $dataNew = Submission::where('nisn',$nisn)->latest()->first();

        if ($dataNew==null) {
            echo 'Tidak ada pengajuan revisi data, Silahkan kembali !';
        }else{
            return view('siswa.pengajuan_revisi', compact('dataOld', 'dataNew'));
        }
    }
    public function contactCenter()
    {
        $humas = DB::table('database_settings')->where('name','cc_humas')->first();
        $keuangan = DB::table('database_settings')->where('name','cc_keuangan')->first();
        $admin = DB::table('database_settings')->where('name','cc_admin')->first();

        return view('siswa.contact_center',compact('humas','admin','keuangan'));
    }
    public function uploadDokumen()
    {
        return view('siswa.upload');
    }
}
