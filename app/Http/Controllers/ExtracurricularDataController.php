<?php

namespace App\Http\Controllers;

use App\Exports\ExtracurricularExport;
use App\Models\TempClass;
use App\Models\TempStudent;
use Illuminate\Http\Request;
use App\Models\ExtracurricularData;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\ExtracurricularCategory;

class ExtracurricularDataController extends Controller
{
   
    public function index()
    {
        $data = ExtracurricularData::get();
        return view('ekskul.index');
    }

    
    public function create()
    {
        return view('ekskul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'student_id' => 'required|unique:extracurricular_data,student_id',
            'extra_id' => 'required',
        ],
        [ 'student_id.unique' => 'Maaf, Data siswa telah ada !']
    );

        $data = $request->all();
        $data['name'] = TempStudent::where('id',$request->student_id)->first()->name;
        ExtracurricularData::create($data);
        return redirect('/data_ekskul')->with('success','Ekstrakurikulermu telah dikirim');
    }
   public function export()
   {
    return Excel::download(new ExtracurricularExport(), 'ekskul.xlsx');
   }
}
