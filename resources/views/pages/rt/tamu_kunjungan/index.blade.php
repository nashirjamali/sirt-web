@extends('layouts.default')
@push('page-title')
RT - Tamu
@endpush
@push('custom-style')
<link href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/data-tables/responsive.datatables.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}">
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1>Data Tamu Kunjungan</h1>
    <br>
    <a href="/rt/tamu-kunjungan/create" target="" class="btn btn-outline-primary text-uppercase">
        <i class="fas fa-plus-circle mr-2"></i> Tambah Tamu
    </a>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card card-default" id="tamu_umum">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Tamu Kunjungan</h2>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <p class="">Data Tamu Umum</p>
                    <div>
                        <a href="/" target="" class="btn btn-outline-success btn-sm text-uppercase">
                            <i class="fas fa-file-excel"></i> Export Excel
                        </a>
                        <a href="/" target="" class="btn btn-outline-info btn-sm text-uppercase">
                            <i class="fas fa-print"></i> Print
                        </a>
                    </div>
                </div>
                <div class="responsive-data-table">
                    <table class="table dt-responsive nowrap data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Tamu</th>
                                <th>Periode</th>
                                <th>Tanggal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($tamu_kunjungan as $val)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$val->nama_lengkap}}</td>
                                <td>{{$val->jenis_tamu}}</td>
                                <td>{{$val->periode}}</td>
                                <td>{{$val->tanggal}}</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="/rt/tamu-kunjungan/{{$val->id}}">Detail</a>
                                </td>
                            </tr>
                            @php $no++; @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default" id="tamu_khusus">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Tamu Khusus</h2>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <p class="">Data Tamu Khusus</p>
                    <div>
                        <a href="/" target="" class="btn btn-outline-success btn-sm text-uppercase">
                            <i class="fas fa-file-excel"></i> Export Excel
                        </a>
                        <a href="/" target="" class="btn btn-outline-info btn-sm text-uppercase">
                            <i class="fas fa-print"></i> Print
                        </a>
                    </div>
                </div>
                <div class="responsive-data-table">
                    <table class="table dt-responsive nowrap data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Instansi</th>
                                <th>Tanggal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($tamu_khusus as $val)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$val->tamuKunjungan->nama_lengkap}}</td>
                                <td>{{$val->instansi}}</td>
                                <td>{{$val->tamuKunjungan->tanggal}}</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="/rt/tamu-kunjungan/{{$val->tamuKunjungan->id}}">Detail</a>
                                </td>
                            </tr>
                            @php $no++; @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default" id="tamu_dinas">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Tamu Dinas</h2>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <p class="">Data Tamu Dinas</p>
                    <div>
                        <a href="/" target="" class="btn btn-outline-success btn-sm text-uppercase">
                            <i class="fas fa-file-excel"></i> Export Excel
                        </a>
                        <a href="/" target="" class="btn btn-outline-info btn-sm text-uppercase">
                            <i class="fas fa-print"></i> Print
                        </a>
                    </div>
                </div>
                <div class="responsive-data-table">
                    <table class="table dt-responsive nowrap data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Lengkap</th>
                                <th>Instansi</th>
                                <th>Tanggal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($tamu_dinas as $val)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$val->tamuKunjungan->nama_lengkap}}</td>
                                <td>{{$val->instansi}}</td>
                                <td>{{$val->tamuKunjungan->tanggal}}</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="/rt/tamu-kunjungan/{{$val->tamuKunjungan->id}}">Detail</a>
                                </td>
                            </tr>
                            @php $no++; @endphp
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