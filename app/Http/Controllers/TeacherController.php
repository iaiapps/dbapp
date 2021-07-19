<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Child;
use App\Models\Teacher;
use App\Models\Training;
use App\Models\Education;
use Illuminate\Http\Request;
use App\Exports\TeacherExport;
use App\Imports\TeacherImport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

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
        //cek apakah nik sdh ada
        $cek_data = Teacher::where('nik',$request->nik)->first();
        // jika belum ada boleh mengisi data
        if ($cek_data==null) {
            Teacher::create($request->all());
            return redirect()->route('guru.biodata')->with('success','Selanjutnya, Lengkapi biodata anda!');
        //Jika sudah ada, maka keluarkan dan suruh login dengan email yang telah ada
        }else{
            $request->session()->invalidate();
            return redirect()->route('login')->with('success','Prestasi berhasil ditambah');
            // dd('data sdh ada');
        }
        // redirect()->route('guru.biodata');
    }
    function biodata()
    {
        $item = Teacher::where('email',Auth::user()->email)->first();
        // $cek_data_guru = 
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
        return redirect()->route('guru.biodata')->with('success','Berhasil Update');
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
    function hapusPendidikan($id)
    {
        Education::where('id',$id)->delete();
        return redirect()->route('guru.biodata')->with('success','Berhasil dihapus');
    }
    function hapusDiklat($id)
    {
        Training::where('id',$id)->delete();
        return redirect()->route('guru.biodata')->with('success','Berhasil dihapus');
    }
    function hapusAnak($id)
    {
        Child::where('id',$id)->delete();
        return redirect()->route('guru.biodata')->with('success','Berhasil dihapus');
    }

    public function export()
    {
        return Excel::download(new TeacherExport(), 'guru.xlsx');
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // CARA 2
        $file = $request->file('file')->store('import');
        $import = new TeacherImport;
        $import->import($file);

        if($import->failures()->isNotEmpty()){
            return back()->withFailures($import->failures())->with('success','Berhasil dg pengecualian');
        }
        return back()->with('success','Excel telah sukses di import');

    }
}

