<div>
    <div class="col-12">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Invoices</h3>
        </div>
        <div class="card-body border-bottom py-3">
        <div class="d-flex">
            <div class="text-muted">
            Show
            <div class="mx-2 d-inline-block">
                <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
            </div>
            entries
            </div>
            <div class="ms-auto text-muted">
            Search:
            <div class="ms-2 d-inline-block">
                <input type="text" wire:model="search" class="form-control form-control-sm" aria-label="Search invoice">
            </div>
            </div>
        </div>
        </div>
        <div class="table-responsive">
        <table class="table card-table table-vcenter text-nowrap datatable">
            <thead>
            <tr>
                <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                <th class="w-1">No.
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 15l6 -6l6 6"></path></svg>
                </th>
                <th>Name</th>
                <th>L/P</th>
                <th>NIK</th>
                <th>NISN</th>
                <th>TTL</th>
                <th>Ibu Kandung</th>
                <th>Created</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($students as $key => $student)
            <tr>
                <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                <td><span class="text-muted">{{$students->firstItem() + $key}}</span></td>
                <td><a href="#" class="text-reset" tabindex="-1">{{strtoupper($student->nama)}}</a></td>
                <td>{{$student->jenis_kelamin}}</td>
                <td>{{$student->nik}}</td>
                <td>{{$student->nisn}}</td>
                <td>{{ucwords(strtolower($student->tempat_lahir))}}, {{date('d-m-Y', strtotime($student->tanggal_lahir))}}</td>
                <td><span class="text-muted">{{ucwords(strtolower($student->nama_ibu_kandung))}}</span></td>
                <td><span class="text-muted">{{$student->created_at->format('d-m-Y')}}</span></td>
                <td><span class="badge bg-success me-1"></span>Active</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm" tabindex="-1">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm" tabindex="-1">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
        <div class="card-footer d-flex align-items-center">
        <p class="m-0 text-muted">Showing <span>{{$students->firstItem()}}</span> to <span>{{$students->lastItem()}}</span> of <span>{{$students->total()}}</span> entries</p>
        <ul class="pagination m-0 ms-auto">
            <li class="page-item">
            </li>
                {{$students->links()}}
            </li>
        </ul>
        </div>
    </div>
    </div>
</div>
