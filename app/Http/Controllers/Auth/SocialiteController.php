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
                        'role_id'=>3
                    ]);
                    $newuser->assignRole('guru');
                    Auth::login($newuser);
                    return redirect()->intended('home');
                    // return redirect()->route('');
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
                    //cek dulu di students apakah ada nis nya atau tidak
                    $student = Student::where('nisn',$finduser->nisn)->first();
                    // jika tidak ada, lempar ke klaim nis
                    if($student==null){
                        Auth::login($finduser);
                        return redirect()->route('klaim_nis');
                    // jika ada maka lanjutkan ke home
                    }else{
                        Auth::login($finduser);
                        return redirect()->intended('home');
                    }
                // jika user tidak ditemukan
                }else{
                    // buatkan user baru menggunakan google
                    $newuser= User::create([
                        'name'=>$user->getName(),
                        'username'=>$user->getEmail(),
                        'email'=>$user->getEmail(),
                        'google_id'=>$user->getId(),
                        'password'=>bcrypt('password'),
                        'role_id'=>4
                    ]);
                    // daftarkan sebagai siswa
                    $newuser->assignRole('siswa');
                    // login menggunaakan user baru 
                    Auth::login($newuser);
                    // lempar ke klaim nis
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
        // jika tidak ditemukan nisn tsb di Students
        if($id==null){
            // maka keluar dan lempar ke login
            auth::logout();
            // Session()->flush();
            return redirect()->route('login')->with('error','NISN Tidak ditemukan');
        }else{
            $gid = Auth::user()->google_id;
            User::where('google_id',$gid)->update(['nisn'=>$request->nisn]);
            return redirect()->intended('home');
        }
    }
}
