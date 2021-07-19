<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Teacher;
use Illuminate\Http\Request;

class GradeController extends Controller
{
   
    public function index()
    {
        $collection = Grade::get();
        $teachers=Teacher::get();
        return view('grades.index', compact('collection','teachers'));
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

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'teacher_id'=>'required',
        ]);
        $request = request()->except(['_token', '_method' ]);
        Grade::create($request);
        return redirect()->route('grade.index')->with('success','Berhasil tambah kelas');
    }

    public function show(Grade $grade)
    {
        //
    }

  
    public function edit(Grade $grade)
    {
        $teachers=Teacher::get();
        return view('grades.edit', compact('teachers','grade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // dd($request->all());
        Grade::find($id)->update([
            'teacher_id'=>$request->teacher_id,
            'name'=>$request->name
        ]);
        return redirect()->route('grade.index')->with('success','Berhasil Edit kelas');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy($grade)
    {
        Grade::find($grade)->delete();
        return redirect()->route('grade.index')
            ->with('success', 'Kelas Berhasil Dihapus');
    }

}
