<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\Siswa\DashboardController;
use App\Http\Controllers\Admin\DashboardController as dashboardAdmin;
use App\Http\Controllers\Siswa\DashboardController as dashboardSiswa;

Route::get('/', function () {
   // cek apakh dia login apa tidak
   if(Auth::check()){
    if(Auth::user()->role == 'admin'){
        return redirect()->route('admin.dashboard');
    } else{
        return redirect()->route('siswa.dashboard');
    }
   }
   // kalau tidak login
   return redirect('/login');
});

// // proses untuk proses login
Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->middleware('guest')->name('login.process');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// //routing untuk admin
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', [DashboardAdmin::class, 'index'])->name('dashboard');
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
});
//routing untuk siswa
Route::middleware(['auth', 'role:siswa'])->prefix('siswa')->name('siswa.')->group(function(){
    Route::get('/dashboard', [DashboardSiswa::class, 'index'])->name('dashboard');
    Route::get('/aspirasi', [DashboardSiswa::class, 'tambahAspirasi'])->name('tambah-aspirasi');
    Route::post('/aspirasi', [DashboardSiswa::class, 'simpanAspirasi'])->name('proses-tambah');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
