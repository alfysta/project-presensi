<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\User;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name')->get();
        $month = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        return view('report.index', compact('month', 'users'));
    }
    public function show(Request $request)
    {
        $request->validate([
            'bulan' => ['required'],
            'tahun' => ['required'],
            'name' => ['required'],
        ]);

        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $name = $request->name;


        $gtk = Absen::where('presensi.nuptk', $name)->join('users', 'users.nuptk', '=', 'presensi.nuptk')->join('ptk', 'ptk.nuptk', '=', 'presensi.nuptk')->first();

        $presensi = Absen::where('nuptk', $name)->whereRaw('MONTH(tanggal_presensi)="' . date("m") . '"')->whereRaw('YEAR(tanggal_presensi)="' . date("Y") . '"')->orderBy('tanggal_presensi')->get();

        $month = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

        return view('report.show', compact('month', 'bulan', 'tahun', 'gtk', 'presensi'));
    }

    public function report()
    {
        $month = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        return view('report.report', compact('month'));
    }
    public function print(Request $request)
    {
        $request->validate([
            'bulan' => ['required'],
            'tahun' => ['required'],
        ]);
        $bulan = $request->bulan;
        $tahun = $request->tahun;

        $rekap = Absen::selectRaw('presensi.nuptk, users.name,users.jabatan,ptk.nip,ptk.status_data,
                MAX(IF(DAY(tanggal_presensi)=1,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_1,
                MAX(IF(DAY(tanggal_presensi)=2,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_2,
                MAX(IF(DAY(tanggal_presensi)=3,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_3,
                MAX(IF(DAY(tanggal_presensi)=4,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_4,
                MAX(IF(DAY(tanggal_presensi)=5,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_5,
                MAX(IF(DAY(tanggal_presensi)=6,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_6,
                MAX(IF(DAY(tanggal_presensi)=7,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_7,
                MAX(IF(DAY(tanggal_presensi)=8,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_8,
                MAX(IF(DAY(tanggal_presensi)=9,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_9,
                MAX(IF(DAY(tanggal_presensi)=10,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_10,
                MAX(IF(DAY(tanggal_presensi)=11,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_11,
                MAX(IF(DAY(tanggal_presensi)=12,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_12,
                MAX(IF(DAY(tanggal_presensi)=13,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_13,
                MAX(IF(DAY(tanggal_presensi)=14,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_14,
                MAX(IF(DAY(tanggal_presensi)=15,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_15,
                MAX(IF(DAY(tanggal_presensi)=16,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_16,
                MAX(IF(DAY(tanggal_presensi)=17,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_17,
                MAX(IF(DAY(tanggal_presensi)=18,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_18,
                MAX(IF(DAY(tanggal_presensi)=19,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_19,
                MAX(IF(DAY(tanggal_presensi)=20,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_20,
                MAX(IF(DAY(tanggal_presensi)=21,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_21,
                MAX(IF(DAY(tanggal_presensi)=22,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_22,
                MAX(IF(DAY(tanggal_presensi)=23,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_23,
                MAX(IF(DAY(tanggal_presensi)=24,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_24,
                MAX(IF(DAY(tanggal_presensi)=25,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_25,
                MAX(IF(DAY(tanggal_presensi)=26,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_26,
                MAX(IF(DAY(tanggal_presensi)=27,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_27,
                MAX(IF(DAY(tanggal_presensi)=28,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_28,
                MAX(IF(DAY(tanggal_presensi)=29,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_29,
                MAX(IF(DAY(tanggal_presensi)=30,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_30,
                MAX(IF(DAY(tanggal_presensi)=31,CONCAT(time_in, "-",IFNULL(time_out,"00:00:00")),"")) as tgl_31')
            ->join('users', 'users.nuptk', "=", 'presensi.nuptk')
            ->join('ptk', 'ptk.nuptk', "=", 'presensi.nuptk')
            ->whereRaw('MONTH(tanggal_presensi) ="' . $bulan . '"')
            ->whereRaw('YEAR(tanggal_presensi) ="' . $tahun . '"')
            ->groupByRaw('presensi.nuptk, users.name,ptk.nip,users.jabatan,ptk.status_data')
            ->orderBy('ptk.status_data', "ASC")
            ->orderBy('users.name', "ASC")
            ->get();

        $month = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        return view('report.print', compact('month', 'bulan', 'tahun', 'rekap'));
    }
}
