<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Sekolah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PresensiController extends Controller
{
    public function index()
    {
        $tanggal_presensi = date("Y-m-d");
        $nuptk = Auth::user()->nuptk;
        $presensi = Absen::where(['tanggal_presensi' => $tanggal_presensi, 'nuptk' => $nuptk])->latest()->first();
        $absen = Absen::where(['tanggal_presensi' => $tanggal_presensi, 'nuptk' => $nuptk])->count();
        $lokasi_kantor = Sekolah::first();
        return view('presensi.index', compact('presensi', 'absen', 'lokasi_kantor'));
    }

    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $nuptk = Auth::user()->nuptk;
        $tanggal_presensi = date("Y-m-d");
        $time_in = date("H:i:s");

        $sekolah = Sekolah::first();
        $lokasi_kantor = explode(",", $sekolah->lokasi_kantor);

        $latitudeKantor = $lokasi_kantor[0];
        $longitudeKantor = $lokasi_kantor[1];

        $lokasi = $request->lokasi;
        $lokasiUser = explode(",", $lokasi);
        $latitudeUser = $lokasiUser[0];
        $longitudeUser = $lokasiUser[1];

        $jarak = $this->distance($latitudeKantor, $longitudeKantor, $latitudeUser, $longitudeUser);
        $radius = round($jarak["meters"]);

        $check = Absen::where(['tanggal_presensi' => $tanggal_presensi, 'nuptk' => $nuptk])->count();
        if ($check > 0) {
            $ket = "out";
        } else {
            $ket = 'in';
        }

        $image = $request->image;
        $folderPath = "public/uploads/absensi/";
        $formatName = $nuptk . "-" . $tanggal_presensi . "-" . $ket;
        $image_parts = explode(";base64", $image);
        $image_base64 = base64_decode($image_parts[1]);
        $fileName = $formatName . ".png";
        $file = $folderPath . $fileName;
        $absens = Absen::where(['tanggal_presensi' => $tanggal_presensi, 'nuptk' => $nuptk])->count();

        if ($radius > $sekolah->radius) {
            echo "error|Maaf Anda Berada di luar Radius, Jarak Anda " . $radius . " meter dari Kantor|radius";
        } else {
            if ($absens > 0) {
                $data_pulang = [
                    'time_out' => $time_in,
                    'photo_out' => $fileName,
                    'location_out' => $lokasi
                ];
                $update = Absen::where(['tanggal_presensi' => $tanggal_presensi, 'nuptk' => $nuptk])->update($data_pulang);
                if ($update) {
                    echo "success|Terima Kasih, Hati-Hati di jalan|out";
                    Storage::put($file, $image_base64);
                } else {
                    echo "error|Maaf Anda gagal Absen. Hubungi Admin|out";
                }
            } else {
                $data_masuk = [
                    'user_id' => $user_id,
                    'nuptk' => $nuptk,
                    'tanggal_presensi' => $tanggal_presensi,
                    'time_in' => $time_in,
                    'photo_in' => $fileName,
                    'location_in' => $lokasi
                ];
                $save = Absen::create($data_masuk);
                if ($save) {
                    echo "success|Terima Kasih, Selamat Bekerja|in";
                    Storage::put($file, $image_base64);
                } else {
                    echo "error|Maaf Anda gagal Absen. Hubungi Admin|in";
                }
            }
        }
    }

    function distance($lat1, $lon1, $lat2, $lon2)
    {
        $theta = $lon1 - $lon2;
        $miles = (sin(deg2rad($lat1)) * sin(deg2rad($lat2))) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
        $miles = acos($miles);
        $miles = rad2deg($miles);
        $miles = $miles * 60 * 1.1515;
        $feet = $miles * 5280;
        $yards = $feet / 3;
        $kilometers = $miles * 1.609344;
        $meters = $kilometers * 1000;
        return compact('meters');
    }
}
