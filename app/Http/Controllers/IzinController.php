<?php

namespace App\Http\Controllers;

use App\Models\Izin;
use Illuminate\Http\Request;

class IzinController extends Controller
{
    public function index()
    {
        $izin = Izin::where('nuptk', auth()->user()->nuptk)->orderBy('tanggal_izin')->paginate();
        $month = ["", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        return view('presensi.izin.index', compact('month', 'izin'));
    }

    public function create()
    {
        return view('presensi.izin.create');
    }

    public function store(Request $request)
    {
        $izin = Izin::where('nuptk', auth()->user()->nuptk)->where('tanggal_izin', $request->tanggal_izin)->count();

        $request->validate([
            'tanggal_izin' => ['required'],
            'status' => ['required'],
            'alasan' => ['required']
        ]);

        if ($izin == 1) {
            session()->flash('error', 'Anda Sudah Melakukan izin/sakit pada tanggal ini');
            return redirect()->to('/presensi/izin/create');
        } else {
            Izin::create([
                'user_id' => auth()->user()->id,
                'nuptk' => auth()->user()->nuptk,
                'tanggal_izin' => $request->tanggal_izin,
                'status' => $request->status,
                'alasan' => $request->alasan,
                'upproved' => 0,
            ]);
            session()->flash('success', 'Input data Izin/Sakit Berhasil');
            return redirect()->to('/presensi/izin');
        }
    }
}
