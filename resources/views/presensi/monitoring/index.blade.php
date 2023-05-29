@extends('layouts.app')
@section('icon')
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school" width="24" height="24"
        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
        <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
    </svg>
@endsection
@section('title', 'Monitoring Kehadiran GTK')
@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card my-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-1">
                                    <select name="tanggal" id="tanggal" class="form-select">
                                        <option disabled>Tanggal</option>
                                        @for ($tanggal = 1; $tanggal <= 31; $tanggal++)
                                            <option {{ date('d') == $tanggal ? 'selected' : '' }}
                                                value="{{ $tanggal }}">
                                                {{ $tanggal }}</option>
                                        @endfor
                                    </select>
                                </div>
                                <div class="col-3">
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
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                            <tr>
                                <th class="w-1">No. </th>
                                <th>Nama GTK</th>
                                <th>NUPTK</th>
                                <th>Jabatan</th>
                                <th>Jam Masuk</th>
                                <th>Foto Masuk</th>
                                <th>Jam Pulang</th>
                                <th>Foto Pulang</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody id="loadmonitoring"></tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
@push('myscript')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(function() {
            $("#getData").click(function(e) {
                var tanggal = $("#tanggal").val();
                var bulan = $("#bulan").val();
                var tahun = $("#tahun").val();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('monitoring.show') }}',
                    data: {
                        _token: "{{ csrf_token() }}",
                        tanggal: tanggal,
                        bulan: bulan,
                        tahun: tahun
                    },
                    cache: false,
                    success: function(response) {
                        $("#loadmonitoring").html(response)
                    }
                });
            });
        });
    </script>
@endpush
