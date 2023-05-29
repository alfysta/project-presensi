@foreach ($monitoring as $item)
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
            <div class="text-white badge {{ $item->time_in > '07:00:00' ? 'bg-red' : 'bg-green' }}">
                {{ $item->time_in != null ? date('H:i', strtotime($item->time_in)) : 'Belum Absen' }}
            </div>
        </td>
        <td>
            <div class="d-flex py-1 align-items-center">
                <span class="avatar me-2"
                    style="background-image: url({{ $item->photo_in == null ? $item->leaderboard() : Storage::url('uploads/absensi/' . $item->photo_in) }})"></span>
            </div>
        </td>
        <td>
            <div class="text-white badge {{ $item->time_out < '14:00:00' ? 'bg-red' : 'bg-green' }}">
                {!! $item->time_out != ''
                    ? date('H:i', strtotime($item->time_out))
                    : '<div class="spinner-border spinner-border-sm" role="status"></div>' !!}
            </div>
        </td>
        <td>
            <div class="d-flex py-1 align-items-center">
                <span class="avatar me-2"
                    style="background-image: url({{ $item->photo_out == null ? $item->leaderboard() : Storage::url('uploads/absensi/' . $item->photo_out) }})"></span>
            </div>
        </td>
        <td>
            <div class="text-white badge {{ $item->time_in > '07:00' ? 'bg-red' : 'bg-green' }}">
                {{ $item->time_in > '07:00' ? 'Terlambat ' . $item->terlambat('07:00:00', $item->time_in) : 'Tepat Waktu' }}
            </div>
        </td>
    </tr>
@endforeach
