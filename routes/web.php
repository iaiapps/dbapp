<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;


Route::get('/cc', function () {
    Artisan::call('cache:clear');
    echo '<script>alert("cache clear Success")</script>';
});
Route::get('/ccc', function () {
    Artisan::call('config:cache');
    echo '<script>alert("config cache Success")</script>';
});
Route::get('/vc', function () {
    Artisan::call('view:clear');
    echo '<script>alert("view clear Success")</script>';
});
Route::get('/cr', function () {
    Artisan::call('route:cache');
    echo '<script>alert("route clear Success")</script>';
});
Route::get('/coc', function () {
    Artisan::call('config:clear');
    echo '<script>alert("config clear Success")</script>';
});
Route::get('/storage123', function () {
    Artisan::call('storage:link');
    echo '<script>alert("linked")</script>';
});


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');

// ROUTE::ADMIN
Route::middleware('role:admin')->group(function () {
    Route::prefix('/admin', function () {
    });
});

// ROUTE::OPERATOR
Route::middleware('role:operator')->group(function () {
    Route::prefix('operator', function () {
    });
});

// ROUTE::GURU
Route::middleware('role:guru')->group(function () {
    Route::prefix('guru', function(){
    });
});

// ROUTE::SISWA
Route::middleware('role:siswa')->group(function () {
    Route::prefix('siswa', function(){
    });
});




route::get('keluar',[LoginController::class,'keluar'])->name('keluar');


