<?php

namespace App\Http\Controllers\Auth;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    
    public function redirectToGoogle()
    {
       return Socialite::driver('google')
            ->stateless()
            ->redirect();
    }
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $gid = $user->getId();
            $finduser = User::where('google_id',$gid)->first();
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
                return redirect()->route('klaim_nis');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    function inputKlaimNis(Request $request)
    {
        $gid = Auth::user()->google_id;
        User::where('google_id',$gid)->update(['nisn'=>$request->nisn]);
        return redirect()->intended('home');
    }
}
