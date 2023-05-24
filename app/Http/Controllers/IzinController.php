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
        $request->validate([
            'tanggal_izin' => ['required'],
            'status' => ['required'],
            'alasan' => ['required']
        ]);

        Izin::create([
            'user_id' => auth()->user()->id,
            'nuptk' => auth()->user()->nuptk,
            'tanggal_izin' => $request->tanggal_izin,
            'status' => $request->status,
            'alasan' => $request->alasan,
            'upproved' => 0,
        ]);

        return redirect()->to('/presensi/izin');
    }
}
