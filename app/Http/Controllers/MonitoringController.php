<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{
    public function index()
    {
        $month = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        return view('presensi.monitoring.index', compact('month'));
    }

    public function show(Request $request)
    {
        $tanggal = $request->tanggal;
        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $monitoring = Absen::whereRaw('DAY(tanggal_presensi)="' . $tanggal . '"')
            ->whereRaw('MONTH(tanggal_presensi)="' . $bulan . '"')
            ->whereRaw('YEAR(tanggal_presensi)="' . $tahun . '"')
            ->join('users', 'presensi.nuptk', '=', 'users.nuptk')
            ->join('ptk', 'ptk.nuptk', '=', 'users.nuptk')
            ->orderBy('time_in')
            ->get();

        return view('presensi.monitoring.show', compact('monitoring'));
    }
}
