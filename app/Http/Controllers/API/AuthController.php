<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = FacadesValidator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());       
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $user->assignRole('admin');
        $token = $user->createToken('auth_token')->plainTextToken;
        
        $teacher = Teacher::create([
            'teacher_id' => $user->id,
            'nik' => rand(0,99999),
            'nama' => $request->name,
            'email' => $request->email,
         ]);

        return response()
            ->json(['teacher_id' => $teacher->id,'name' => $teacher->nama,'email' => $teacher->email,'access_token' => $token, 'token_type' => 'Bearer' ]);
    }

    public function login(Request $request)
    {
        if (!FacadesAuth::attempt($request->only('email', 'password')))
        {
            return response()
                ->json(['message' => 'Unauthorized'], 401);
        }

        $user = User::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;
        $teacher_id = Teacher::where('email',$user->email)->first()->id;

        return response()
            ->json(['access_token' => $token, 'token_type' => 'Bearer', 'teacher_id' => $teacher_id]);
    }

    // method for user logout and delete token
    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}