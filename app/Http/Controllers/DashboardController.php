<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Izin;

class DashboardController extends Controller
{
    public function index()
    {
        $dashboard = Absen::where(['tanggal_presensi' => date('Y-m-d'), 'nuptk' => auth()->user()->nuptk])->first();

        $historybulanini = Absen::where('nuptk', auth()->user()->nuptk)->whereRaw('MONTH(tanggal_presensi)="' . date('m') . '"')->whereRaw('YEAR(tanggal_presensi)="' . date('Y') . '"')->orderBy('tanggal_presensi')->get();

        $rekappresensi = Absen::where('nuptk', auth()->user()->nuptk)->selectRaw('COUNT(nuptk) as jmlhadir, SUM(IF(time_in > "07:00",1,0)) as jmlterlambat')->whereRaw('MONTH(tanggal_presensi)="' . date("m") . '"')->whereRaw('YEAR(tanggal_presensi)="' . date("Y") . '"')->first();

        $rekapizin = Izin::where('nuptk', auth()->user()->nuptk)
            ->selectRaw('SUM(IF(status="I",1,0)) as jmlizin, SUM(IF(status="S",1,0)) as jmlsakit')
            ->whereRaw('MONTH(tanggal_izin)="' . date("m") . '"')->whereRaw('YEAR(tanggal_izin)="' . date("Y") . '"')
            ->where('upproved', 1)
            ->first();

        $leaderboard = Absen::join('users', 'presensi.nuptk', '=', 'users.nuptk')->where('tanggal_presensi', date('Y-m-d'))->orderBy('time_in')->get();


        return view('dashboard', compact('dashboard', 'historybulanini', 'rekappresensi', 'leaderboard', 'rekapizin'));
    }
}
