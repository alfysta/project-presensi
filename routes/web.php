<?php

use App\Http\Controllers\{DashboardController, UserController, HomeController, PresensiController, SettingController, StudentController, TeacherController};
use App\Http\Livewire\Auth\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes(['login' => false, 'register' => false]);


Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
});

Route::middleware(['auth', 'userAkses:2'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi.index');
    Route::post('/presensi', [PresensiController::class, 'store']);
});

Route::middleware(['auth', 'userAkses:1'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/home/teachers', [TeacherController::class, 'index'])->name('teachers');
    Route::get('/home/students', [StudentController::class, 'index'])->name('students');
    Route::get('/home/setting', [SettingController::class, 'index'])->name('setting');
});
