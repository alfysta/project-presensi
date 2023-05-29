<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laporan Kehadiran GTK {{ $gtk->name }} {{ $month[$bulan] . ' ' . $tahun }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <style>
        body {
            margin: 0
        }

        .sheet {
            margin: 0;
            overflow: hidden;
            position: relative;
            box-sizing: border-box;
            page-break-after: always;
        }

        /** Paper sizes **/
        body.A4 .sheet {
            width: 210mm;
            height: 600mm
        }

        /** Padding area **/
        .sheet.padding-10mm {
            padding: 10mm
        }

        .sheet.padding-15mm {
            padding: 15mm
        }

        .sheet.padding-20mm {
            padding: 20mm
        }

        .sheet.padding-25mm {
            padding: 25mm
        }

        /** For screen preview **/
        @media screen {
            body {
                background: #e0e0e0
            }

            .sheet {
                background: white;
                box-shadow: 0 .5mm 2mm rgba(0, 0, 0, .3);
                margin: 5mm auto;
            }
        }

        table.blueTable {
            border: 1px solid #000000;
            width: 100%;
            height: 100px;
            text-align: center;
            border-collapse: collapse;
        }

        table.blueTable th {
            border: 1px solid #000000;
            padding: 10px 2px;
        }

        table.blueTable td {
            border: 1px solid #000000;
            padding: 2px 2px;
        }


        table.blueTable tbody td {
            font-size: 14px;
            color: #000000;
        }


        table.blueTable thead {
            border-bottom: 1px solid #000000;
        }

        table.blueTable thead th {
            font-size: 14px;
            font-weight: bold;
            color: #000000;
            border-left: 1px solid #000000;
        }

        table.blueTable thead th:first-child {
            border-left: none;
        }

        table.blueTable tfoot td {
            font-size: 14px;
        }

        table.blueTable tfoot .links {
            text-align: right;
        }

        table.blueTable tfoot .links a {
            display: inline-block;
            color: #000000;
            padding: 2px 5px;
            border-radius: 5px;
        }
    </style>
</head>


<body class="A4">
    <section class="sheet padding-10mm">

        <article><strong>
                <table>
                    <thead>
                        <tr style="text-align: center">
                            <td style="width:100px">
                                <center><img src="{{ asset('vendor/assets/images/SULTENG.png') }}" style="width: 65px"
                                        alt="Logo Provinsi">
                                </center>
                            </td>
                            <td style="width:600px">
                                <center>PEMERINTAH PROVINSI SULAWESI TENGAH</center>
                                <center style="font-size: 20px">DINAS PENDIDIKAN</center>
                                <center>CABANG DINAS PENDIDIKAN MENENGAH WILAYAH V</center>
                                <center style="font-size: 22px">SMK NEGERI 1 MOILONG</center>
                                <center style="font-size: 10px">Jl. Siswa No 01 Mulyoharjo Kec. Moilong Kab. Banggai
                                    Email:
                                    smknegerimoilong@gmail.com</center>
                            </td>
                            <td style="width:100px">
                                <center><img src="{{ asset('vendor/assets/images/photo/smkn1moilong.png') }}"
                                        style="width: 75px" alt="Logo Provinsi">
                                </center>
                            </td>
                        </tr>
                    </thead>

                </table>
            </strong></article>
        <hr style="border:2px solid">
        <article style="margin-top:15px; margin-bottom:15px">
            <center><strong>LAPORAN KEHADIRAN</strong></center>
            <center><strong>GURU DAN TENAGA KEPENDIDIKAN</strong></center>
            <center><strong>BULAN {{ strtoupper($month[$bulan] . ' ' . $tahun) }}</strong></center>
        </article>

        <article>
            <table style="margin-top:15px">
                <tr>
                    <td rowspan="9" style="width:100px">
                        <center>
                            @if (empty($gtk->profile_photo_path))
                                <img src="{{ asset('vendor/assets/images/camera.png') }}"
                                    style="width: 115px;margin-right:10px" alt="Nama GTK">
                            @else
                                <img src="{{ asset('vendor/assets/images/photo/' . $gtk->profile_photo_path) }}"
                                    style="width: 115px;margin-right:10px" alt="Nama GTK">
                            @endif
                        </center>
                    <td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><strong>{{ strtoupper($gtk->name) }}</strong></td>
                </tr>
                <tr>
                    <td>NUPTK</td>
                    <td>:</td>
                    <td>{{ $gtk->nuptk }}</td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td>{{ $gtk->nip ? $gtk->nip : '-' }}</td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{ ucwords(strtolower($gtk->tempat_lahir)) . ', ' . date('d-m-Y', strtotime($gtk->tanggal_lahir)) }}
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>{{ $gtk->jenis_kelamin == 'P' ? 'Perempuan' : 'Laki-Laki' }}</td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>{{ $gtk->jabatan }}</td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td>:</td>
                    <td>{{ $gtk->no_hp }}</td>
                </tr>
            </table>
        </article>
        <table class="blueTable" style="margin-top:20px">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>Jam Masuk</th>
                    <th>Foto Masuk</th>
                    <th>Jam Pulang</th>
                    <th>Foto Pulang</th>
                    <th>Jumlah Jam Kerja</th>
                    <th>Ket</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($presensi as $item)
                    <tr>
                        <td>
                            {{ $loop->iteration }}.
                        </td>
                        <td>
                            {{ date('d-m-Y', strtotime($item->tanggal_presensi)) }}
                        </td>
                        <td>
                            {{ date('H:i:s', strtotime($item->time_in)) }}
                        </td>
                        <td>
                            <img src="{{ Storage::url('uploads/absensi/' . $item->photo_in) }}" style="width:24px">
                        </td>
                        <td>
                            {{ date('H:i:s', strtotime($item->time_out)) }}
                        </td>
                        <td>
                            <img src="{{ Storage::url('uploads/absensi/' . $item->photo_out) }}" style="width:24px">
                        </td>

                        <td>
                            @if ($item->time_out == '')
                                Belum Absen
                            @else
                                {{ $item->terlambat($item->time_in, $item->time_out) }}
                            @endif
                        </td>
                        <td>
                            {{ $item->time_in > '07:00:00' ? 'Terlambat ' . $item->terlambat('07:00:00', $item->time_in) : 'Tepat Waktu' }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </tr>
        </table>

        <table style="margin-top:50px">
            <thead>
                <tr>
                    <td style="width:600px">
                        Mengetahui,<br />
                        KEPALA SEKOLAH<br />
                        <br /><br /><br />
                        <strong>SAFIUDDIN, S.Pd., M.A.P.</strong><br />
                        NIP : 198787883 0298789 1 001<br />

                    </td>
                    <td style="width:400px">
                        Moilong, {{ date('d F Y') }}<br />
                        KEPALA ADMINISTRASI SEKOLAH<br />
                        <br /><br /><br />
                        <strong>SYAIFUL MEONTI, S.Kom</strong><br />
                        NIP : 19780807 201411 1 002<br />
                    </td>
                </tr>
            </thead>
        </table>
    </section>
</body>

</html>
