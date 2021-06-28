<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\Education;
use App\Models\User;
use App\Models\Teacher;
use App\Models\Training;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    function input()
    {
        $id = Auth::user()->id;
        User::where('id',$id)->update(['role_id'=>3]);
        DB::table('model_has_roles')->where('model_id',$id)->update(['role_id'=>3]);
        return view('guru.input_identitas');
    }

    function inputData(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ibu' => 'required',
            'no_hp' => 'required',
            'email' => 'required',
        ]);
        Teacher::create($request->all());
        return redirect()->route('guru.biodata');
    }
    function biodata()
    {
        $item = Teacher::where('email',Auth::user()->email)->first();
        if(!isset($item)){
            return redirect()->route('klaim_nis');
        }else{
            return view('guru.biodata', compact('item'));
        }
    }
     function editTeacher()
    {
        $item = Teacher::where('email',Auth::user()->email)->first();
        return view('guru.edit',compact('item'));
    }
    public function updateTeacher(Request $request)
    {
        $data = request()->except(['_token', '_method' ]);
        Teacher::where('email',Auth::user()->email)->update($data);
        return redirect()->route('guru.biodata');
    }
    
    function inputPendidikan(request $request)
    {
        $teacher_id = Teacher::where('email',Auth::user()->email)->first()->id;
        $data=request()->except(['_to
        ken', '_method' ]);
        $data['teacher_id']=$teacher_id;
        Education::Create($data);
        return redirect()->route('guru.biodata');
    }
    function inputAnak(request $request)
    {
        $teacher_id = Teacher::where('email',Auth::user()->email)->first()->id;
        $data=request()->except(['_token', '_method' ]);
        $data['teacher_id']=$teacher_id;
        Child::Create($data);
        return redirect()->route('guru.biodata');
    }
    function inputDiklat(request $request)
    {
        $teacher_id = Teacher::where('email',Auth::user()->email)->first()->id;
        $data=request()->except(['_token', '_method' ]);
        $data['teacher_id']=$teacher_id;
        Training::Create($data);
        return redirect()->route('guru.biodata');
    }


}

