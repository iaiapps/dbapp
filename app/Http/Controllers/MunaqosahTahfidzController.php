<?php

namespace App\Http\Controllers;

use App\Models\MunaqosahTahfidz;
use App\Models\TempStudent;
use Illuminate\Http\Request;

class MunaqosahTahfidzController extends Controller
{
   
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('munaqosah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'recommended_by'=>'required',
            'juz'=>'required',
            'exam_status'=>'required',
            'class_id'=>'required',
            'name'=>'required',
        ]);
        MunaqosahTahfidz::create($request->all());
        return back()->with('success','Pendaftaranmu Berhasil');
    }

  
    public function show()
    {
        $students = MunaqosahTahfidz::whereNull('grade')->get();
        return view('munaqosah.penguji',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MunaqosahTahfidz  $munaqosahTahfidz
     * @return \Illuminate\Http\Response
     */
   
    public function update(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'exam_date'=>'required',
            'kelancaran'=>'required',
            'fasohah_makhroj'=>'required',
            'tajwid'=>'required',
            'examiner'=>'required',
        ]);
        if($request->kelancaran>69){
            $result = 'LULUS';
        }else{
            $result = 'REMIDI';
        }
        if($request->kelancaran>89){
            $grade = 'A+';
        }elseif($request->kelancaran<=89 && $request->kelancaran>=84 ){
            $grade = 'A';
        }elseif($request->kelancaran<84 && $request->kelancaran>=79 ){
            $grade = 'B+';
        }elseif($request->kelancaran<79 && $request->kelancaran>=74 ){
            $grade = 'B';
        }elseif($request->kelancaran<74 && $request->kelancaran>69 ){
            $grade = 'C+';
        }else{
            $grade = 'C';
        }
        $data = [
            'exam_date'=>$request->exam_date,
            'kelancaran'=>$request->kelancaran,
            'fasohah_makhroj'=>$request->fasohah_makhroj,
            'tajwid'=>$request->tajwid,
            'examiner'=>$request->examiner,
            'grade'=>$grade,
            'results'=>$result,
        ];
        MunaqosahTahfidz::where('id',$request->id)->update($data);
        return back()->with('success_uji','Berhasil');
    }

   public function hasilMunaqosah()
   {
       $munaqosah = MunaqosahTahfidz::get();
       return view('munaqosah.index',compact('munaqosah'));
   }
}
