 <div class="card" style="height: 25rem">
     <div class="card-body card-body-scrollable card-body-scrollable-shadow">
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
                     @foreach ($history as $item)
                         <tr>
                             <td class="text-center">
                                 <small>{{ $loop->iteration }}</small>
                             </td>
                             <td class="text-center">
                                 <small>{{ date('d-m-Y', strtotime($item->tanggal_presensi)) }}</small>
                             </td>
                             <td class="text-center">
                                 <small>
                                     <div class="badge{{ $item->time_in > '07:00:00' ? ' bg-danger' : ' bg-green' }}">
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
