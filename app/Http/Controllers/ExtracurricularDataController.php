<?php

namespace App\Http\Controllers;

use App\Models\ExtracurricularCategory;
use App\Models\ExtracurricularData;
use App\Models\TempClass;
use App\Models\TempStudent;
use Illuminate\Http\Request;

class ExtracurricularDataController extends Controller
{
   
    public function index()
    {
        $data = ExtracurricularData::get();
        return view('ekskul.index');
    }

    
    public function create()
    {
        $ekskuls = ExtracurricularCategory::get();
        return view('ekskul.create',compact('ekskuls'));
    }

   
    public function store(Request $request)
    {
        dd($request->student_id);
        $request->validate([
            'class_id' => 'required',
            'student_id' => 'required',
            'extra_id' => 'required',
        ]);

        $request['name'] = TempStudent::where('id',$request->student_id);
    
        ExtracurricularData::create($request->all());
        return redirect('/data_ekskul')->with('success','Ekstrakurikulermu telah dikirim');
    }
   
    // public function update(Request $request, ExtracurricularData $extracurricularData)
    // {
    //     //
    // }

    // public function destroy(ExtracurricularData $extracurricularData)
    // {
    //     //
    // }
}
