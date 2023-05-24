@extends('layouts.app')
@section('icon')
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-school" width="24" height="24"
        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
        <path d="M22 9l-10 -4l-10 4l10 4l10 -4v6"></path>
        <path d="M6 10.6v5.4a6 3 0 0 0 12 0v-5.4"></path>
    </svg>
@endsection
@section('title', 'Report Presensi')
@section('content')

    <form action="{{ route('report.show') }}" target="_blank" method="POST">
        @csrf
        <div class="col-md-4">
            <div class="card bg-facebook">
                <div class="card-body">
                    <div class="col-auto my-3">
                        <div class="form-group">
                            <select name="bulan" id="bulan" class="form-select @error('bulan')is-invalid @enderror">
                                <option selected disabled>Bulan</option>
                                @for ($bulan = 1; $bulan <= 12; $bulan++)
                                    <option value="{{ $bulan }}">{{ $month[$bulan] }}</option>
                                @endfor
                                @error('bulan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </select>
                        </div>
                    </div>
                    <div class="col-auto my-3">
                        <div class="form-group">
                            <select name="tahun" id="tahun" class="form-select @error('tahun')is-invalid @enderror">
                                <option selected disabled>Tahun</option>
                                @for ($tahun = 2020; $tahun <= date('Y'); $tahun++)
                                    <option value="{{ $tahun }}">{{ $tahun }}</option>
                                @endfor
                                @error('tahun')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </select>
                        </div>
                    </div>
                    <div class="col-auto my-3">
                        <div class="form-group">
                            <select name="name" id="name" class="form-select @error('name')is-invalid @enderror">
                                <option selected disabled>Nama Karyawan</option>
                                @foreach ($users as $user)
                                    <option value="{{ $user->nuptk }}">{{ $user->name }}</option>
                                @endforeach
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </select>
                        </div>
                    </div>
                    <div class="col-auto mt-3">
                        <div class="form-group">
                            <button class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-printer" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path
                                        d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2">
                                    </path>
                                    <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4"></path>
                                    <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z">
                                    </path>
                                </svg> Cetak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
