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
@section('title', 'Create Izin/Sakit')

@section('header')
    <div class="page-header d-print-none text-white">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h3 class="page-title">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="4" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"></path>
                            <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855"></path>
                        </svg> Create Izin/Sakit
                    </h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('master')

    <div>
        <form action="{{ route('izin.store') }}" method="POST" autocomplete="off" required>
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                            <div class="mb-3">
                                <div class="form-label">Tanggal</div>
                                <div class="input-icon">
                                    <span class="input-icon-addon">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path
                                                d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                            </path>
                                            <path d="M16 3v4"></path>
                                            <path d="M8 3v4"></path>
                                            <path d="M4 11h16"></path>
                                            <path d="M11 15h1"></path>
                                            <path d="M12 15v3"></path>
                                        </svg>
                                    </span>
                                    <input class="form-control @error('tanggal_izin')is-invalid @enderror"
                                        name="tanggal_izin" id="tanggal_izin"
                                        value="{{ old('tanggal_izin') ?? date('Y-m-d') }}" autocomplete="off">
                                </div>
                                @if (session()->has('error'))
                                    <small class="form-check-description text-danger">
                                        {{ session()->get('error') }}
                                    </small>
                                @endif
                                @error('tanggal_izin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <div class="form-label">Sakit/Izin</div>
                                <select class="form-select @error('status')is-invalid @enderror" name="status">
                                    <option disabled selected>Sakit/Izin</option>
                                    <option value="S">Sakit</option>
                                    <option value="I">Izin</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alasan</label>
                                <textarea class="form-control @error('alasan')is-invalid @enderror" name="alasan" data-bs-toggle="autosize"
                                    placeholder="Alasan Ketidakhadiran"
                                    style="overflow: hidden; overflow-wrap: break-word; resize: none; text-align: start; height: 64px;"></textarea>
                                @error('alasan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-1">
                                <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-send" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 14l11 -11"></path>
                                        <path
                                            d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5">
                                        </path>
                                    </svg> Create</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    @include('layouts.components.bottommenu')

@endsection

@push('myscript')
    <script src="{{ asset('vendor/assets/dist/libs/litepicker/dist/litepicker.js?1674944402') }}" defer></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            window.Litepicker && (new Litepicker({
                element: document.getElementById('tanggal_izin'),
                buttonText: {
                    previousMonth: `
                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 6l-6 6l6 6" />
                        </svg>`,
                    nextMonth: `
                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9 6l6 6l-6 6" />
                        </svg>`,
                },
            }));
        });
    </script>
@endpush
