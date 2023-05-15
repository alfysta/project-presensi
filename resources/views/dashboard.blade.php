@extends('layouts.frontend')
@section('icon')
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-backpack" width="24" height="24"
        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M5 18v-6a6 6 0 0 1 6 -6h2a6 6 0 0 1 6 6v6a3 3 0 0 1 -3 3h-8a3 3 0 0 1 -3 -3z"></path>
        <path d="M10 6v-1a2 2 0 1 1 4 0v1"></path>
        <path d="M9 21v-4a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v4"></path>
        <path d="M11 10h2"></path>
    </svg>
@endsection
@section('title', 'Dashboard')
@section('master')

    <div class="row row-deck row-cards">
        <div class="col-12">
            <div class="row row-cards">
                <div class="col-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-facebook text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-user-edit" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5"></path>
                                            <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Profile
                                    </div>
                                    <div class="text-muted">
                                        12 waiting
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-green text-white avatar">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-calendar-check" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M11.5 21h-5.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v6">
                                            </path>
                                            <path d="M16 3v4"></path>
                                            <path d="M8 3v4"></path>
                                            <path d="M4 11h16"></path>
                                            <path d="M15 19l2 2l4 -4"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Cuti
                                    </div>
                                    <div class="text-muted">
                                        32 shipped
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-danger text-white avatar">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11">
                                            </path>
                                            <path d="M8 8l4 0"></path>
                                            <path d="M8 12l4 0"></path>
                                            <path d="M8 16l4 0"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        History
                                    </div>
                                    <div class="text-muted">
                                        16 today
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-warning text-white avatar">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-map-pin" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                            <path
                                                d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        Lokasi
                                    </div>
                                    <div class="text-muted">
                                        21 today
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hr-text">Kehadiran</div>
        <div class="col-12">
            <div class="row align-items-center row-cards">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body mt-3 text-center">
                            @if ($dashboard != null)
                                <span class="avatar avatar-xl mb-3 rounded"
                                    style="background-image: url({{ Storage::url('uploads/absensi/' . $dashboard->photo_in) }})"></span>
                            @else
                                <span class="avatar avatar-xl mb-3 rounded"
                                    style="background-image: url({{ asset('vendor/assets/images/camera.png') }})"></span>
                            @endif
                            <h3 class="m-0 mb-1">MASUK</h3>
                            <div class="mt-2">
                                <span
                                    class="py-2 badge {{ $dashboard != null && $dashboard->time_in > '07:00' ? 'bg-red' : 'bg-green' }}">{{ $dashboard != null ? date('H:i:s', strtotime($dashboard->time_in)) : 'BELUM ABSEN' }}</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body mt-3 text-center">
                            @if ($dashboard != null && $dashboard->time_out != null)
                                <span class="avatar avatar-xl mb-3 rounded"
                                    style="background-image: url({{ Storage::url('uploads/absensi/' . $dashboard->photo_out) }})"></span>
                            @else
                                <span class="avatar avatar-xl mb-3 rounded"
                                    style="background-image: url({{ asset('vendor/assets/images/camera.png') }})"></span>
                            @endif
                            <h3 class="m-0 mb-1">PULANG</h3>
                            <div class="mt-2">
                                <span
                                    class="py-2 badge {{ $dashboard != null && $dashboard->time_out < '14:00' ? 'bg-red' : 'bg-green' }}">{{ $dashboard != null && $dashboard->time_out != null ? date('H:i:s', strtotime($dashboard->time_out)) : 'BELUM ABSEN' }}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="hr-text">Rekapitulasi Kehadiran</div>
        <div class="col-12">
            <div class="row row-cards">
                <div class="col-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-facebook text-white avatar">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-user-edit fill-current" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                            <path d="M6 21v-2a4 4 0 0 1 4 -4h3.5"></path>
                                            <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        <strong>Hadir</strong>
                                    </div>
                                    <div class="text-muted">
                                        <span class="badge bg-green">{{ $rekappresensi->jmlhadir }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-green text-white avatar">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-calendar-check" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M11.5 21h-5.5a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v6">
                                            </path>
                                            <path d="M16 3v4"></path>
                                            <path d="M8 3v4"></path>
                                            <path d="M4 11h16"></path>
                                            <path d="M15 19l2 2l4 -4"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        <strong>Izin</strong>
                                    </div>
                                    <div class="text-muted">
                                        32
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-danger text-white avatar">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-news"
                                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                            stroke="currentColor" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M16 6h3a1 1 0 0 1 1 1v11a2 2 0 0 1 -4 0v-13a1 1 0 0 0 -1 -1h-10a1 1 0 0 0 -1 1v12a3 3 0 0 0 3 3h11">
                                            </path>
                                            <path d="M8 8l4 0"></path>
                                            <path d="M8 12l4 0"></path>
                                            <path d="M8 16l4 0"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        <strong>Sakit</strong>
                                    </div>
                                    <div class="text-muted">
                                        16
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card card-sm">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-warning text-white avatar">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-facebook -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-map-pin" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                            <path
                                                d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                            </path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="font-weight-medium">
                                        <strong>Terlambat</strong>
                                    </div>
                                    <div class="text-muted">
                                        <span
                                            class="badge bg-red">{{ $rekappresensi->jmlterlambat != '' ? $rekappresensi->jmlterlambat : 0 }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hr-text">History</div>
        <div class="col-12">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#tabs-home-13" class="nav-link active" data-bs-toggle="tab"
                                        aria-selected="true" role="tab">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M3 3v18h18"></path>
                                            <path d="M20 18v3"></path>
                                            <path d="M16 16v5"></path>
                                            <path d="M12 13v8"></path>
                                            <path d="M8 16v5"></path>
                                            <path d="M3 11c6 0 5 -5 9 -5s3 5 9 5"></path>
                                        </svg>
                                        History
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#tabs-profile-13" class="nav-link" data-bs-toggle="tab"
                                        aria-selected="false" role="tab" tabindex="-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon me-2" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M13 5h8"></path>
                                            <path d="M13 9h5"></path>
                                            <path d="M13 15h8"></path>
                                            <path d="M13 19h5"></path>
                                            <path
                                                d="M3 4m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                            </path>
                                            <path
                                                d="M3 14m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z">
                                            </path>
                                        </svg>
                                        Leaderboard
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="tabs-home-13" role="tabpanel">
                                    <div class="col-auto">
                                        <div class="card" style="height: 20rem">
                                            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                                                <div class="divide-y">
                                                    <div class="card-table table-responsive">
                                                        <table class="table card-table table-vcenter">
                                                            <thead>
                                                                <tr>
                                                                    <th class="text-center">#</th>
                                                                    <th class="text-center">Tanggal</th>
                                                                    <th class="text-center">Masuk</th>
                                                                    <th class="text-center">Pulang</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach ($historybulanini as $item)
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <small>{{ $loop->iteration }}.</small>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <small>{{ date('d-m-Y', strtotime($item->tanggal_presensi)) }}</small>
                                                                        </td>
                                                                        <td class="text-center">
                                                                            <small>
                                                                                <div
                                                                                    class="badge{{ $item->time_in > '07:00:00' ? ' bg-danger' : ' bg-green' }}">
                                                                                    {{ $item != null ? date('H:i', strtotime($item->time_in)) : 'Blm Absen' }}
                                                                                </div>
                                                                            </small>
                                                                        </td>

                                                                        <td class="text-center">
                                                                            <small>
                                                                                <div
                                                                                    class="badge{{ $item != null && $item->time_out < '14:00:00' ? ' bg-danger' : ' bg-green' }}">
                                                                                    {!! $item != null && $item->time_out != null
                                                                                        ? date('H:i', strtotime($item->time_out))
                                                                                        : '<div class="spinner-border spinner-border-sm" role="status"></div>' !!}
                                                                                </div>
                                                                            </small>
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
                                <div class="tab-pane" id="tabs-profile-13" role="tabpanel">
                                    <div class="col-auto">
                                        <div class="card" style="height: 20rem">
                                            <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                                                <div class="divide-y">
                                                    @foreach ($leaderboard as $item)
                                                        <div>
                                                            <div class="row">
                                                                <div class="col-auto">
                                                                    <span class="avatar avatar-sm"
                                                                        style="background-image: url({{ $item->profile_photo_path == null ? $item->leaderboard() : asset('vendor/assets/images/photo/' . $item->profile_photo_path) }})"></span>
                                                                </div>
                                                                <div class="col align-self-center">
                                                                    <div class="text-truncate">
                                                                        <strong>{{ ucwords(strtolower($item->name)) }}</strong>
                                                                    </div>
                                                                    <div class="text-muted">
                                                                        <small>{{ $item->jabatan }}</small>
                                                                    </div>
                                                                </div>
                                                                <div class="d-flex col-auto align-self-center">
                                                                    <div
                                                                        class="text-white badge {{ $item->time_in > '07:00' ? 'bg-red' : 'bg-green' }}">
                                                                        {{ $item != null ? date('H:i', strtotime($item->time_in)) : 'Blm Absen' }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('layouts.components.bottommenu')

@endsection
