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
@section('title', 'History')

@section('header')
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-check"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3.5 5.5l1.5 1.5l2.5 -2.5"></path>
                            <path d="M3.5 11.5l1.5 1.5l2.5 -2.5"></path>
                            <path d="M3.5 17.5l1.5 1.5l2.5 -2.5"></path>
                            <path d="M11 6l9 0"></path>
                            <path d="M11 12l9 0"></path>
                            <path d="M11 18l9 0"></path>
                        </svg> History Presensi
                    </h2>
                </div>
                <!-- Page title actions -->
            </div>
        </div>
    </div>
@endsection

@section('master')
    <div class="row">
        <div class="col-12">
            <div class="card my-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-4">
                                    <select name="bulan" id="bulan" class="form-select">
                                        <option disabled>Bulan</option>
                                        @for ($bulan = 1; $bulan <= 12; $bulan++)
                                            <option {{ date('m') == $bulan ? 'selected' : '' }} value="{{ $bulan }}">
                                                {{ $month[$bulan] }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select name="tahun" id="tahun" class="form-select">
                                        <option disabled>Tahun</option>
                                        <?php $now = date('Y'); ?>
                                        @for ($tahun = 2021; $tahun <= $now; $tahun++)
                                            <option {{ date('Y') == $tahun ? 'selected' : '' }} value="{{ $tahun }}">
                                                {{ $tahun }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-4">
                                    <button class="btn btn-primary align-items-center justify-content-center"
                                        id="getData"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-search" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                            <path d="M21 21l-6 -6"></path>
                                        </svg>Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6" id="showHistory"></div>
    </div>

    @include('layouts.components.bottommenu')

@endsection

@push('myscript')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(function() {
            $("#getData").click(function(e) {
                var bulan = $("#bulan").val();
                var tahun = $("#tahun").val();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('history.store') }}',
                    data: {
                        _token: "{{ csrf_token() }}",
                        bulan: bulan,
                        tahun: tahun
                    },
                    cache: false,
                    success: function(response) {
                        $("#showHistory").html(response)
                    }
                });
            });
        });
    </script>
@endpush
