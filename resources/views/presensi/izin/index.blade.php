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
@section('title', 'Izin/Sakit')
@section('header')
    <div class="page-header d-print-none text-white">
        <div class="container-xl">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                        </svg> Ketidakhadiran (Sakit/Izin)
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('master')

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('izin.create') }}" class="btn btn-danger my-2"><svg xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-circle-plus" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                    <path d="M9 12l6 0"></path>
                    <path d="M12 9l0 6"></path>
                </svg> Create</a>
            <div class="card" style="height: 20rem">
                <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                    <div class="divide-y">
                        <div class="card-table table-responsive">
                            <table class="table card-table table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Tanggal</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Alasan</th>
                                        <th class="text-center">Ket</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($izin as $item)
                                        <tr>
                                            <td><small>{{ $loop->iteration }}.</small></td>
                                            <td><small>{{ date('d-m-Y', strtotime($item->tanggal_izin)) }}</small></td>
                                            <td><small>{{ $item->status == 'I' ? 'Izin' : 'Sakit' }}</small></td>
                                            <td><small>{{ $item->alasan }}</small></td>
                                            <td class="text-center"><small>
                                                    @if ($item->upproved == 0)
                                                        <div class="spinner-border spinner-border-sm"></div>
                                                    @elseif($item->upproved == 1)
                                                        <div class="badge bg-green">Disetujui</div>
                                                    @elseif($item->upproved == 2)
                                                        <div class="badge bg-danger">Ditolak</div>
                                                    @endif

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

    @include('layouts.components.bottommenu')

@endsection
