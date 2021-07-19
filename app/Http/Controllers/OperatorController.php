<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Submission;
use Illuminate\Http\Request;

class OperatorController extends Controller
{

    function getStudents()
    {
        $collection = Student::get();
       
        return view('operator.students',compact('collection'));
    }
    function getStudent($id)
    {
        $item = Student::find($id);
        return view('operator.student_detail',compact('item'));
    }
    function editStudent($id)
    {
        $item = Student::find($id);
        return view('operator.student_edit',compact('item'));
    }
     public function updateStudent(Request $request, $id)
    { 
        Student::find($id)->update($request->all());
        return redirect()->route('students');
    }
    public function destroy($id)
    {
        Student::where('id',$id)->delete();
        return redirect()->route('students')->with('success','Berhasil dihapus');
    }

    // DATA_GURU

    function getteachers()
    {
        $collection = Teacher::get();
        return view('operator.teachers',compact('collection'));
    }
    function getteacher($id)
    {
        $item = Teacher::find($id);
        return view('operator.teacher_detail',compact('item'));
    }
    function editteacher($id)
    {
        $item = Teacher::find($id);
        return view('operator.teacher_edit',compact('item'));
    }
     public function updateteacher(Request $request, $id)
    { 
        Teacher::find($id)->update($request->all());
        return redirect()->route('teachers');
    }
    public function destroyTeacher($id)
    {
        Teacher::where('id',$id)->delete();
        return redirect()->route('teachers')->with('success','Berhasil dihapus');
    }

    public function import()
    {
        return view('operator.import');
    }

    public function revisiData()
    {
        $collection = Submission::all();
        return view('operator.list_revisi',compact('collection'));
    }
    public function compareRevisi($id)
    {
        $dataNew = Submission::find($id);
        $dataOld = Student::where('nisn',$dataNew->nisn)->first();
        return view('operator.compare_revisi',compact('dataNew','dataOld'));
    }
    public function schoolId()
    {
        $item = School::get()->first();
        return view('operator.school.detail',compact('item'));
    }
    public function editSchool($id)
    {
        $item = School::find($id)->first();
        return view('operator.school.edit',compact('item'));
    }
    public function updateSchool(Request $request, $id)
    {
        School::find($id)->update($request->all());
        return redirect()->route('operator.school_id')->with('success','Berhasil update data');
    }
    public function siswaKelas($id)
    {
        dd($id);
    }
}
