@extends('layouts.default')
@push('page-title')
RW - Data Penduduk
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
</div>

<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-body">
                <ul class="nav nav-tabs nav-style-border pl-0 justify-content-between justify-content-xl-start bg-white" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tamu_umum-tab" data-toggle="tab" href="#tamu_umum" role="tab" aria-controls="tamu_umum" aria-selected="true">Tamu Umum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tamu_khusus-tab" data-toggle="tab" href="#tamu_khusus" role="tab" aria-controls="tamu_khusus" aria-selected="false">Tamu Khusus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tamu_dinas-tab" data-toggle="tab" href="#tamu_dinas" role="tab" aria-controls="tamu_khusus" aria-selected="false">Tamu Dinas</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!--begin::Tamu Umum Tab-->
                    <div class="tab-pane pt-3 fade show active" id="tamu_umum" role="tabpanel" aria-labelledby="tamu_umum-tab">
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
                                    <th>nama bagian rw</th>
                                    <th>nama_lengkap</th>
                                    <th>jenis_tamu</th>
                                    <th>periode</th>
                                    <th>tujuan</th>
                                    <th>tanggal</th>
                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>RW 1</td>
                                    <td>Nashir Jamali</td>
                                    <td>Umum</td>
                                    <td>2020</td>
                                    <td>Inspeksi</td>
                                    <td>03/03/2020</td>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary" href="/rw/tamu_kunjungan/detail">Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Tamu Umum Tab-->

                    <!--begin::Tamu Khusus Tab-->
                    <div class="tab-pane pt-3 fade show fade" id="tamu_khusus" role="tabpanel" aria-labelledby="tamu_khusus-tab">
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
                            <table class="table dt-responsive wrap data-table" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>nama bagian rw</th>
                                    <th>nama_lengkap</th>
                                    <th>jenis_tamu</th>
                                    <th>periode</th>
                                    <th>tujuan</th>
                                    <th>tanggal</th>
                                    <th>jabatan</th>
                                    <th>instansi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>RW 1</td>
                                    <td>Nashir Jamali</td>
                                    <td>Umum</td>
                                    <td>2020</td>
                                    <td>Inspeksi</td>
                                    <td>03/03/2020</td>
                                    <td>Mahasiswa</td>
                                    <td>Undika</td>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary" href="/rw/tamu_kunjungan/detail">Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Tamu Khusus Tab-->

                    <!--begin::Tamu Dinas Tab-->
                    <div class="tab-pane pt-3 fade show fade" id="tamu_dinas" role="tabpanel" aria-labelledby="tamu_dinas-tab">
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
                            <table class="table dt-responsive wrap data-table" style="width:100%">
                                <thead>
                                    <tr>
                                    <th>Nama Bagian Rw</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Tamu</th>
                                    <th>Periode</th>
                                    <th>Tujuan</th>
                                    <th>Tanggal</th>
                                    <th>Jabatan</th>
                                    <th>Instansi</th>
                                    <th>Nip</th>
                                    <th>No Surat Tugas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <td>RW 1</td>
                                    <td>Nashir Jamali</td>
                                    <td>Umum</td>
                                    <td>2020</td>
                                    <td>Inspeksi</td>
                                    <td>03/03/2020</td>
                                    <td>Mahasiswa</td>
                                    <td>Undika</td>
                                    <th>1234567890123456</th>
                                    <th>1111111111111111</th>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary" href="/rw/tamu_kunjungan/detail">Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Tamu Dinas Tab-->

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
        $('.data-table').DataTable();
    });
</script>
@endpush