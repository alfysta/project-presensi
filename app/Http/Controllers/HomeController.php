<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Izin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $month = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        $rekappresensi = Absen::selectRaw('COUNT(nuptk) as jmlhadir, SUM(IF(time_in > "07:00",1,0)) as jmlterlambat')
            ->where('tanggal_presensi', date('Y-m-d'))
            ->first();

        $rekapizin = Izin::selectRaw('SUM(IF(status="I",1,0)) as jmlizin, SUM(IF(status="S",1,0)) as jmlsakit')
            ->where('tanggal_izin', date('Y-m-d'))
            ->where('upproved', 1)
            ->first();

        $leaderboard = Absen::join('users', 'presensi.nuptk', '=', 'users.nuptk')->join('ptk', 'ptk.nuptk', '=', 'users.nuptk')
            ->where('tanggal_presensi', date('Y-m-d'))->orderBy('time_in')->get();

        return view('home', compact('rekappresensi', 'month', 'rekapizin', 'leaderboard'));
    }
}
