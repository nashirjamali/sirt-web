@extends('layouts.default')
@push('page-title')
RW - Detail Pemilu
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Detail Pemilu</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/pemilu">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Pemilu
            </li>
            <li class="breadcrumb-item" aria-current="page">Detail Pemilu</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-vote font-size-20"></i>
                </div>
                <h2>Informasi Pemilu {{Auth::user()->bagian->nama_bagian}}</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Periode</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$pemilu->periode}}</h5>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Tanggal Pelaksanaan</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$pemilu->tgl_pemilu}}</h5>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Tempat Pelaksanaam</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$pemilu->tempat_pemilu}}</h5>
                    </div>
                </div>
                <a href="/rw/pemilu/{{$pemilu->id}}/edit" class="mr-2 btn btn-warning btn-pill text-white">
                    <i class="mdi mdi-circle-edit-outline"></i>
                    Edit
                </a>
                @if($undangan)
                <a href="/rw/undangan-pemilu/{{$undangan->id}}/edit" class="mr-2 btn btn-primary btn-pill text-white">
                    <i class="mdi mdi-circle-edit-outline"></i>
                    Edit Undangan
                </a>
                @else
                <a href="/rw/undangan-pemilu/create" class="mr-2 btn btn-primary btn-pill text-white">
                    <i class="mdi mdi-circle-edit-outline"></i>
                    Sebar Undangan
                </a>
                @endif
            </div>
        </div>
    </div>
    
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                    <i class="mdi mdi-account-group font-size-20"></i>
                </div>
                <h2>Usulan Calon Ketua RW</h2>
            </div>
            <div class="card-body">
                <div class="responsive-data-table">
                    <table class="table dt-responsive nowrap data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($calonRW as $val)
                            <tr>
                                <td>{{$val->warga->nama}}</td>
                                <td>{{$val->warga->jkel}}</td>
                                <td>{{$val->total}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('custom-script')
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.data-table').DataTable({
            "responsive": true,
            "aLengthMenu": [
                [20, 30, 50, 75, -1],
                [20, 30, 50, 75, "All"]
            ],
            "pageLength": 20,
            "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }]
        });
    });
</script>
@endpush