<?php

namespace App\Http\Controllers;

use App\Models\ExtracurricularCategory;
use App\Models\ExtracurricularData;
use App\Models\TempClass;
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
        // dd($request->all());
        $request->validate([
            'class_id' => 'required',
            'student_id' => 'required',
            'extra_id' => 'required',
        ]);
    
        ExtracurricularData::create($request->all());
        return 'success';
        // return redirect()->with('success','Ekskul created successfully.');
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
