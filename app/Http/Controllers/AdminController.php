<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $role_id = Auth::user()->roles->first()->id;
        $menus= DB::table('menus')->where('role_id',$role_id)->get();
        return view('admin.home',compact('menus'));
    }
    public function dbSettings()
    {
        $collection = DB::table('database_settings')->get();
        $presence = new PresenceController();
        $presence = $presence->getSetting();
        return view('admin.db_settings', compact('collection','presence'));
    }
    public function editPresenceSetting($id)
    {
        $item = DB::table('presence_setting')->where('id',$id)->first();
        return view('admin.edit_presence_set',compact('item'));
    }
    public function updateSettingPresence(Request $request)
    {
        DB::table('presence_setting')->where('id',$request->id)->update([
            'value' => $request->value
        ]);
        return redirect()->route('admin.DBset');
    }
    public function editDbset($id)
    {
        $item = DB::table('database_settings')->where('id',$id)->first();
        return view('admin.edit_db_set',compact('item'));
    }
    public function hapusDBset($id)
    {
        // Inventory::where('id', $id)->delete();
        DB::table('database_settings')->where('id',$id)->delete();
        return route('admin.DBset');
    }
    public function createUser(Request $request)
    {
         $newuser= User::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=>bcrypt($request->password),
                    // 'role_id'=>$request->role_id,
                ]);
        $newuser->assignRole($request->role_id);
        return redirect()->route('admin.users')->with('success','Akun berhasil dibuat');
    }
}
