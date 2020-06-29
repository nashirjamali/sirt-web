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
<!-- <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}"> -->
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1>Data Penduduk</h1>
</div>

<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Filter</h2>
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                    <label>Pilih RT</label>
                    <select class="js-example-basic-multiple form-control" name="rts[]" multiple="multiple">
                        @for($i = 0; $i < 8; $i++) <option value="{{$i}}">RT 00{{$i+1}}</option>
                            @endfor
                    </select>
                </div>
                <div class="w-100"></div>
                <div class="form-row col-lg-4 col-md-6 col-sm-12">
                    <button class="btn btn-primary">Cari</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-body">
                <ul class="nav nav-tabs nav-style-border pl-0 justify-content-between justify-content-xl-start bg-white" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="warga-tab" data-toggle="tab" href="#warga" role="tab" aria-controls="warga" aria-selected="true">Warga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="mutasi-tab" data-toggle="tab" href="#mutasi" role="tab" aria-controls="mutasi" aria-selected="false">Mutasi Warga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="sementara-tab" data-toggle="tab" href="#sementara" role="tab" aria-controls="sementara" aria-selected="false">Penduduk Sementara</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!--begin::Warga Tab-->
                    <div class="tab-pane pt-3 fade show active" id="warga" role="tabpanel" aria-labelledby="warga-tab">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="">Data Warga</p>
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
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Wilayah RT</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>14567899876544512</td>
                                        <td>Nashir Jamali</td>
                                        <td>Laki-Laki</td>
                                        <td>Jalan Surabaya</td>
                                        <td>RT 002</td>
                                        <td>Penduduk Sementara</td>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary" href="/rw/penduduk/detail">Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Warga Tab-->

                    <!--begin::Mutasi Tab-->
                    <div class="tab-pane pt-3 fade" id="mutasi" role="tabpanel" aria-labelledby="mutasi-tab">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="">Data Mutasi Warga</p>
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
                                        <th>Tanggal Mutasi</th>
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Wilayah RT</th>
                                        <th>Status Mutasi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>2020-06-27</td>
                                        <td>14567899876544512</td>
                                        <td>Nashir Jamali</td>
                                        <td>Laki-Laki</td>
                                        <td>Jalan Surabaya</td>
                                        <td>RT 002</td>
                                        <td>Pindah</td>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary" href="/rw/penduduk/detail">Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Mutasi Tab-->
                    <!--begin::Sementara Tab-->
                    <div class="tab-pane pt-3 fade" id="sementara" role="tabpanel" aria-labelledby="sementara-tab">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="">Data Penduduk Sementara</p>
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
                                        <th>NIK</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Wilayah RT</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>14567899876544512</td>
                                        <td>Nashir Jamali</td>
                                        <td>Laki-Laki</td>
                                        <td>Jalan Surabaya</td>
                                        <td>RT 002</td>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary" href="/rw/penduduk/detail">Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--end::Warga Tab-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom-script')
<!-- <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script> -->
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