<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Exports\StudentExport;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }


    public function destroy(Student $student)
    {
        //
    }

    public function export()
    {
        return Excel::download(new StudentExport(), 'siswa.xlsx');
    }

     public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);


        // CARA 1
        // ----------------------------------------------
        // $file = $request->file('file');
        
        // // membuat nama file unik
        // $nama_file = $file->hashName();

        // //temporary file
        // $path = $file->storeAs('public/excel/',$nama_file);

        // import data
        // $import = Excel::import(new StudentImport(), storage_path('app/public/excel/'.$nama_file));

        //remove from server
        // Storage::delete($path);

        // if($import) {
        //     //redirect
        //     dd("berhasil");
        // } else {
        //     //redirect
        //     dd("berhasil");
        // }

        // -----------------------------------------------


        // CARA 2
        $file = $request->file('file')->store('import');
        $import = new StudentImport;
        $import->import($file);

        if($import->failures()->isNotEmpty()){
            return back()->withFailures($import->failures());
        }
        return back()->with('success','Excel telah sukses di import');
    }
}
