<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laporan Kehadiran Guru dan Tenaga Kependidikan {{ $month[$bulan] . ' ' . $tahun }}</title>
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
            width: 390mm;
            height: 265mm
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
            border-collapse: collapse;
        }

        table.blueTable th {
            border: 1px solid #000000;
            padding: 5px 2px;
            text-align: center;
        }

        table.blueTable td {
            border: 1px solid #000000;
            padding: 3px 2px;
            text-align: left;
        }

        table.blueTable tbody td {
            font-size: 10px;
            color: #000000;
        }


        table.blueTable thead {
            border-bottom: 1px solid #000000;
        }

        table.blueTable thead th {
            font-size: 12px;
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

        .rotated-text {
            /* -webkit-transform: rotate(-90deg);
            -ms-transform: rotate(-90deg);
            transform: rotate(-90deg); */
            width: 10px;
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
                            <td style="width:100000px">
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
        <article style="margin-top:20px; margin-bottom:20px">
            <center><strong>LAPORAN KEHADIRAN</strong></center>
            <center><strong>GURU DAN TENAGA KEPENDIDIKAN ASN</strong></center>
            <center><strong>BULAN {{ strtoupper($month[$bulan] . ' ' . $tahun) }}</strong></center>
        </article>

        <table class="blueTable" style="margin-top:20px">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Nama GTK/NIP</th>
                    <th rowspan="2">Jabatan</th>
                    <th colspan="31">Tanggal </th>
                    <th colspan="4">Absen </th>
                    <th rowspan="2" class="rotated-text">Jumlah <br />Hadir</th>
                    <th rowspan="2" class="rotated-text">TT</th>
                    <th rowspan="2">Ket</th>
                </tr>
                <tr>
                    @for ($i = 1; $i <= 31; $i++)
                        <th>{{ $i }}
                        </th>
                    @endfor
                    <th>S</th>
                    <th>I</th>
                    <th>TH</th>
                    <th>DL</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($rekap as $item)
                    @if ($item->nip != null)
                        <tr>
                            <td style="text-align: center">
                                <small>{{ $no++ }}</small>
                            </td>
                            <td>
                                <small>{{ strtoupper($item->name) }} <br />NIP.
                                    {{ $item->nip ? $item->nip : '-' }}</small>
                            </td>
                            <td style="text-align: center">
                                <small>{{ $item->jabatan }}</small>
                            </td>
                            <?php $totalhadir = 0; ?>
                            <?php $totalterlambat = 0; ?>
                            @for ($i = 1; $i <= 31; $i++)
                                <?php
                                $tgl = 'tgl_' . $i;
                                if (empty($item->$tgl)) {
                                    $hadir = ['', ''];
                                    $totalhadir += 0;
                                } else {
                                    $hadir = explode('-', $item->$tgl);
                                    $totalhadir += 1;
                                    if ($hadir[0] >= '07:00:00') {
                                        $totalterlambat += 1;
                                    }
                                }
                                ?>

                                <td style="text-align: center">
                                    <small><span
                                            style="color:{{ $hadir[0] >= '07:00:00' ? 'red' : 'black' }}">{{ $hadir[0] }}
                                        </span><br />
                                        <span
                                            style="color:{{ $hadir[0] <= '14:00:00' ? 'red' : 'black' }}">{{ $hadir[1] }}</span>
                                    </small>
                                </td>
                            @endfor
                            <td style="text-align: center"></td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center">{{ $totalhadir }}</td>
                            <td style="text-align: center">{{ $totalterlambat }}</td>
                            <td style="text-align: center"></td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

        <table style="margin-top:50px">
            <thead>
                <tr>
                    <td style="width:1000px">
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
                            <td style="width:100000px">
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
        <article style="margin-top:10px; margin-bottom:10px">
            <center><strong>LAPORAN KEHADIRAN</strong></center>
            <center><strong>GURU DAN TENAGA KEPENDIDIKAN NON ASN</strong></center>
            <center><strong>BULAN {{ strtoupper($month[$bulan] . ' ' . $tahun) }}</strong></center>
        </article>

        <table class="blueTable" style="margin-top:10px">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Nama GTK/NUPTK</th>
                    <th rowspan="2">Jabatan</th>
                    <th colspan="31">Tanggal </th>
                    <th colspan="4">Absen </th>
                    <th rowspan="2" class="rotated-text">Jumlah <br />Hadir</th>
                    <th rowspan="2">TT</th>
                    <th rowspan="2">Ket</th>
                </tr>
                <tr>
                    @for ($i = 1; $i <= 31; $i++)
                        <th>{{ $i }}
                        </th>
                    @endfor
                    <th>S</th>
                    <th>I</th>
                    <th>TH</th>
                    <th>DL</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($rekap as $item)
                    @if ($item->nip == null)
                        <tr>
                            <td style="text-align: center">
                                <small>{{ $no++ }}</small>
                            </td>
                            <td>
                                <small>{{ strtoupper($item->name) }} <br />NUPTK.
                                    {{ $item->nuptk ? $item->nuptk : '-' }}</small>
                            </td>
                            <td style="text-align: center">
                                <small>{{ $item->jabatan }}</small>
                            </td>
                            <?php $totalhadir = 0; ?>
                            <?php $totalterlambat = 0; ?>
                            @for ($i = 1; $i <= 31; $i++)
                                <?php
                                $tgl = 'tgl_' . $i;
                                if (empty($item->$tgl)) {
                                    $hadir = ['', ''];
                                    $totalhadir += 0;
                                } else {
                                    $hadir = explode('-', $item->$tgl);
                                    $totalhadir += 1;
                                    if ($hadir[0] >= '07:00:00') {
                                        $totalterlambat += 1;
                                    }
                                }
                                ?>

                                <td style="text-align: center">
                                    <small><span
                                            style="color:{{ $hadir[0] >= '07:00:00' ? 'red' : 'black' }}">{{ $hadir[0] }}
                                        </span><br />
                                        <span
                                            style="color:{{ $hadir[0] <= '14:00:00' ? 'red' : 'black' }}">{{ $hadir[1] }}</span>
                                    </small>
                                </td>
                            @endfor
                            <td style="text-align: center"></td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center"></td>
                            <td style="text-align: center">{{ $totalhadir }}</td>
                            <td style="text-align: center">{{ $totalterlambat }}</td>
                            <td style="text-align: center"></td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

        <table style="margin-top:30px">
            <thead>
                <tr>
                    <td style="width:1000px">
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
