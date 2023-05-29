<?php

use App\Http\Controllers\{DashboardController, HistoryController, UserController, HomeController, IzinController, MonitoringController, PresensiController, ReportController, SettingController, StudentController, TeacherController};
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
    Route::get('/presensi/history', [HistoryController::class, 'index'])->name('history.index');
    Route::post('/presensi/history', [HistoryController::class, 'store'])->name('history.store');
    Route::get('/presensi/izin', [IzinController::class, 'index'])->name('izin.index');
    Route::get('/presensi/izin/create', [IzinController::class, 'create'])->name('izin.create');
    Route::post('/presensi/izin/create', [IzinController::class, 'store'])->name('izin.store');
});

Route::middleware(['auth', 'userAkses:1'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/home/teachers', [TeacherController::class, 'index'])->name('teachers');
    Route::get('/home/students', [StudentController::class, 'index'])->name('students');
    Route::get('/home/setting', [SettingController::class, 'index'])->name('setting');
    Route::get('/home/report', [ReportController::class, 'index'])->name('report');
    Route::post('/home/report/show', [ReportController::class, 'show'])->name('report.show');
    Route::get('/home/report/all', [ReportController::class, 'report'])->name('report.all');
    Route::post('/home/report/print', [ReportController::class, 'print'])->name('report.print');
    Route::get('/home/monitoring', [MonitoringController::class, 'index'])->name('monitoring');
    Route::post('/home/monitoring/show', [MonitoringController::class, 'show'])->name('monitoring.show');
});
