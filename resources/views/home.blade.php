@extends('layouts.app')
@section('icon')
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-signal" width="24" height="24"
        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M15 22v-2"></path>
        <path d="M18 22v-4"></path>
        <path d="M21 22v-6"></path>
        <path d="M19 12.494v-.494h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h4"></path>
        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v.5"></path>
    </svg>
@endsection
@section('title', 'Dashboard')
@section('content')

    <div class="col-12 my-2">
        <h3 class="card-title">Data Kehadiran GTK Tanggal
            {{ date('d') . ' ' . $month[date('m') * 1] . ' ' . date('Y') }}</h3>
        <div class="row row-cards">
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-primary text-white avatar">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users-group"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 13a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                        <path d="M8 21v-1a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v1"></path>
                                        <path d="M15 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                        <path d="M17 10h2a2 2 0 0 1 2 2v1"></path>
                                        <path d="M5 5a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                        <path d="M3 13v-1a2 2 0 0 1 2 -2h2"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium h4 mb-0 me-2">
                                    GTK Hadir
                                </div>
                                <div class="text-muted">
                                    {{ $rekappresensi->jmlhadir }} Orang
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-green text-white avatar">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                        <path d="M17 17h-11v-14h-2"></path>
                                        <path d="M6 5l14 1l-1 7h-13"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium h4 mb-0 me-2">
                                    GTK Izin
                                </div>
                                <div class="text-muted">
                                    {{ $rekapizin->jmlizin ? $rekapizin->jmlizin : 0 }} Orang
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-twitter text-white avatar">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-report-medical" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2">
                                        </path>
                                        <path
                                            d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z">
                                        </path>
                                        <path d="M10 14l4 0"></path>
                                        <path d="M12 12l0 4"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium h4 mb-0 me-2">
                                    GTK Sakit
                                </div>
                                <div class="text-muted">
                                    {{ $rekapizin->jmlsakit ? $rekapizin->jmlsakit : 0 }} Orang
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-red text-white avatar">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-clock-pin"
                                        width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                        stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M20.971 11.278a9 9 0 1 0 -8.313 9.698"></path>
                                        <path d="M12 7v5l1.5 1.5"></path>
                                        <path
                                            d="M21.121 20.121a3 3 0 1 0 -4.242 0c.418 .419 1.125 1.045 2.121 1.879c1.051 -.89 1.759 -1.516 2.121 -1.879z">
                                        </path>
                                        <path d="M19 18v.01"></path>
                                    </svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium h4 mb-0 me-2">
                                    GTK Terlambat
                                </div>
                                <div class="text-muted">
                                    {{ $rekappresensi->jmlterlambat }} Orang
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 my-4">
            <div class="row row-cards">
                <div class="col-12">
                    <h3 class="card-title">
                        Monitoring Absensi GTK Tanggal {{ date('d') . ' ' . $month[date('m') * 1] . ' ' . date('Y') }}
                    </h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table
                                    class="table card-table table-vcenter text-nowrap datatable table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th class="w-1">No. </th>
                                            <th>Nama GTK</th>
                                            <th>NUPTK</th>
                                            <th>Jabatan</th>
                                            <th>Jam Masuk</th>
                                            <th>Jam Pulang</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($leaderboard as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}.</td>
                                                <td>
                                                    <div class="d-flex py-1 align-items-center">
                                                        <span class="avatar me-2"
                                                            style="background-image: url({{ $item->profile_photo_path == null ? $item->leaderboard() : asset('vendor/assets/images/photo/' . $item->profile_photo_path) }})"></span>
                                                        <div class="flex-fill">
                                                            <div class="font-weight-medium">
                                                                <strong>{{ strtoupper($item->name) }}</strong>
                                                            </div>
                                                            <div class="text-muted">NIP
                                                                {{ $item->nip == '' ? '-' : $item->nip }}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $item->nuptk }}
                                                </td>
                                                <td>
                                                    {{ $item->jabatan }}
                                                </td>
                                                <td>
                                                    <div
                                                        class="text-white badge {{ $item->time_in > '07:00:00' ? 'bg-red' : 'bg-green' }}">
                                                        {{ $item->time_in != null ? date('H:i', strtotime($item->time_in)) : 'Belum Absen' }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="text-white badge {{ $item->time_out < '14:00:00' ? 'bg-red' : 'bg-green' }}">
                                                        {!! $item->time_out != ''
                                                            ? date('H:i', strtotime($item->time_out))
                                                            : '<div class="spinner-border spinner-border-sm" role="status"></div>' !!}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div
                                                        class="text-white badge {{ $item->time_in > '07:00' ? 'bg-red' : 'bg-green' }}">
                                                        {{ $item->time_in > '07:00' ? 'Terlambat ' . $item->terlambat('07:00:00', $item->time_in) : 'Tepat Waktu' }}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
