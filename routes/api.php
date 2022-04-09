<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PresenceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//API route for register new user
Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
//API route for login user
Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

//Protecting Routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    // API route for logout user
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/settings', [PresenceController::class, 'getTimeSettings']);
    Route::resource('presences', PresenceController::class);
});
    Route::get('/qrcodes', [PresenceController::class, 'getQrCode']);

