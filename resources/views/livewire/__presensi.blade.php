<div>
    <form wire:submit.prevent="StoreIzin" autocomplete="off" required>
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                        <div class="mb-3">
                            <div class="form-label">Tanggal</div>
                            <div class="input-icon">
                                <input class="form-control @error('tanggal_izin') is-invalid @enderror"
                                    wire:model="tanggal_izin" id="datepicker" value="{{ date('Y-m-d') }}"
                                    autocomplete="off">
                                @error('tanggal_izin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-label">Sakit/Izin</div>
                            <select class="form-select @error('status')is-invalid @enderror" wire:model="status">
                                <option>Sakit/Izin</option>
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
                            <textarea class="form-control @error('alasan')is-invalid @enderror" wire:model="alasan" data-bs-toggle="autosize"
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
