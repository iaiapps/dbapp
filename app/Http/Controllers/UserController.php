<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
   
    public function index()
    {
        $collection = User::where('id','!=',1)->get();
        return view('admin.users',compact('collection'));
    }

   
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $item = User::find($id);
        $role_id = DB::table('model_has_roles')->where('model_id',$item->id)->first()->role_id;
        $item['role'] = DB::table('roles')->where('id',$role_id)->first()->name;
        return view('user.edit',compact('item'));
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.users')->with('success','Berhasil dihapus');
    }
    
    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = $file->hashName();

        //temporary file
        $path = $file->storeAs('public/excel/',$nama_file);

        // import data
        $import = Excel::import(new UsersImport(), storage_path('app/public/excel/'.$nama_file));

        //remove from server
        Storage::delete($path);

        if($import) {
            //redirect
            dd("berhasil");
        } else {
            //redirect
            dd("berhasil");
        }
    }
}
