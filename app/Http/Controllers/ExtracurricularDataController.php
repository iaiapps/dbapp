<?php

namespace App\Http\Controllers;

use App\Models\ExtracurricularCategory;
use App\Models\ExtracurricularData;
use Illuminate\Http\Request;

class ExtracurricularDataController extends Controller
{
   
    public function index()
    {
        $data = ExtracurricularData::get();
        return Response()->json($data);
        // return view('ekskul.index');
    }

    
    public function create()
    {
        return view('ekskul.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'choice' => 'required',
        ]);
    
        ExtracurricularData::create($request->all());
     
        return redirect()->with('success','Ekskul created successfully.');
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
