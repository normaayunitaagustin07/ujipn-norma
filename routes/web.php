<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\SiswaController;
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
    Route::get('/form-siswa', [SiswaController::class, 'create'])->name('form-siswa');
    Route::post('/siswa', [SiswaController::class, 'store'])->name('tambah-siswa');
    Route::get('/siswa/delete/{siswa}', [SiswaController::class, 'delete'])->name('hapus-siswa'); // route model binding
    Route::get('/siswa/edit/{siswa}', [SiswaController::class, 'edit'])->name('form-edit-siswa'); // route model binding
    Route::put('/siswa', [SiswaController::class, 'update'])->name('edit-siswa'); // route model binding
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
