<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;

class SocialiteController extends Controller
{
    
    public function guru_redirectToGoogle()
    {
        session(['siapa' => 'guru']);   
        return Socialite::driver('google')
        ->stateless()
        ->redirect();
    }
    public function siswa_redirectToGoogle()
    {
        session(['siapa' => 'siswa']);   
        return Socialite::driver('google')
            ->stateless()
            ->redirect();
    }
    

    public function handleGoogleCallback()
    {
        $siapa = session('siapa');

        if($siapa=='guru'){
            try{
                $user = Socialite::driver('google')->stateless()->user();
                $gid = $user->getId();
                // mencari google_id di users_table
                $finduser = User::where('google_id',$gid)->first();
                //jika user ditemukan 
                if($finduser){
                    Auth::login($finduser);
                    return redirect()->intended('home');
                }else{
                    $newuser= User::create([
                        'name'=>$user->getName(),
                        'username'=>$user->getEmail(),
                        'email'=>$user->getEmail(),
                        'google_id'=>$user->getId(),
                        'password'=>bcrypt('password'),
                        'role_id'=>4
                    ]);
                    $newuser->assignRole('siswa');
                    Auth::login($newuser);
                    return redirect()->route('');
                }
            }catch(\Throwable $th) {
                //throw $th;
            }
        }else{
            try{
                $user = Socialite::driver('google')->stateless()->user();
                $gid = $user->getId();
                // mencari google_id di users_table
                $finduser = User::where('google_id',$gid)->first();
                //jika user ditemukan 
                if($finduser){
                    Auth::login($finduser);
                    return redirect()->intended('home');
                }else{
                    // $newuser= User::create([
                    //     'name'=>$user->getName(),
                    //     'username'=>$user->getEmail(),
                    //     'email'=>$user->getEmail(),
                    //     'google_id'=>$user->getId(),
                    //     'password'=>bcrypt('password'),
                    //     'role_id'=>4
                    // ]);
                    // $newuser->assignRole('siswa');
                    // Auth::login($newuser);
                    return redirect()->route('klaim_nis');
                }
            }catch(\Throwable $th) {
                //throw $th;
            }
        }
       
    }
    function inputKlaimNis(Request $request)
    {
        //cek nisn yang di input
        $id = Student::where('nisn',$request->nisn)->first();
        if($id==null){
            return redirect()->route('login');
        }else{
            $user = Socialite::driver('google')->stateless()->user();
            $newuser= User::create([
                        'name'=>$user->getName(),
                        'username'=>$user->getEmail(),
                        'email'=>$user->getEmail(),
                        'google_id'=>$user->getId(),
                        'password'=>bcrypt('password'),
                        'role_id'=>4,
                        'nisn'=>$request->nisn
                    ]);
                    $newuser->assignRole('siswa');
                    Auth::login($newuser);
                    return redirect()->intended('home');

        }
        //ambil google_id dr sesion
        // $gid = Auth::user()->google_id;
        // // update data nisn di table users
        // User::where('google_id',$gid)->update(['nisn'=>$request->nisn]);
        // //cek apakah data sudah ada di db
        // return redirect()->intended('home');
    }
}
