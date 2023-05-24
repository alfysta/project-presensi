<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Report Presensi Per GTK</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <style>
        @page {
            size: A4
        }

        table.blueTable {
            border: 1px solid #000000;
            width: 100%;
            height: 100px;
            text-align: left;
            border-collapse: collapse;
        }

        table.blueTable td,
        table.blueTable th {
            border: 1px solid #000000;
            padding: 3px 2px;
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
        <hr>
        <article>
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
        <table class="blueTable">
            <thead>
                <tr>
                    <th>
                        <center>No</center>
                    </th>
                    <th>
                        <center>Tanggal</center>
                    </th>
                    <th>
                        <center>Jam Masuk</center>
                    </th>
                    <th>
                        <center>Foto Masuk</center>
                    </th>
                    <th>
                        <center>Jam Pulang</center>
                    </th>
                    <th>
                        <center>Foto Pulang</center>
                    </th>
                    <th>
                        <center>Ket</center>
                    </th>
                    <th>
                        <center>Jumlah Jam Kerja</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($presensi as $item)
                    <tr>
                        <td>
                            <center>{{ $loop->iteration }}.</center>
                        </td>
                        <td>
                            <center>{{ date('d-m-Y', strtotime($item->tanggal_presensi)) }}</center>
                        </td>
                        <td>
                            <center>{{ date('H:i', strtotime($item->time_in)) }}</center>
                        </td>
                        <td>
                            <center><img src="{{ Storage::url('uploads/absensi/' . $item->photo_in) }}"
                                    style="width:24px"></center>
                        </td>
                        <td>
                            <center>{{ date('H:i', strtotime($item->time_out)) }}</center>
                        </td>
                        <td>
                            <center><img src="{{ Storage::url('uploads/absensi/' . $item->photo_out) }}"
                                    style="width:24px"></center>
                        </td>
                        <td>
                            <center>{{ $item->time_in > '07:00:00' ? 'Terlambat' : 'Tepat Waktu' }}</center>
                        </td>
                        <td>
                            <center>{{ $item->time_in > '07:00:00' ? 'Terlambat' : 'Tepat Waktu' }}</center>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </tr>
        </table>

        <article>
            <td>
                <center style="margin-top:50px">Moilong, {{ date('d F Y') }}
                </center>
            </td>
            <td style="width:600px">
                <center>KEPALA SEKOLAH</center>
                <center style="margin-top: 50px"><strong>SAFIUDDIN, S.Pd., M.A.P.</strong></center>
                <center>NIP : 198787883 0298789 1 001</center>
            </td>
        </article>
    </section>



</body>

</html>
