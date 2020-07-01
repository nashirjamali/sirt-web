@extends('layouts.default')
@push('page-title')
RT - Data Penduduk
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
    <h1>Data Penduduk</h1>
</div>
<!-- <div class="">
    <a href="/rt/penduduk/create"
        target="" class="btn btn-outline-primary text-uppercase">
        <i class="fas fa-plus-circle mr-2"></i> Tambah Data Penduduk
    </a>
</div> -->

<div class="row">
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card bg-primary card-default">
            <div class="card-body text-white">
                <span class="h2">40</span>
                <h5 class="card-title mt-2">Jumlah Penduduk</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12">
        <div class="card bg-success card-default">
            <div class="card-body text-white">
                <span class="h2">40</span>
                <h5 class="card-title mt-2">Jumlah Keluarga</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Summary</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4 text-center">
                        <h5 class="mt-2 mb-4">Jenis Kelamin</h5>
                        <canvas id="jkel-chart"></canvas>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4 text-center">
                        <h5 class="mt-2 mb-4">Pekerjaan</h5>
                        <canvas id="pekerjaan-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between mb-4">
                <h2>Data Warga</h2>
                <div>
                    <a href="/" target="" class="btn btn-outline-success btn-sm text-uppercase">
                        <i class="fas fa-file-excel"></i> Export Excel
                    </a>
                    <a href="/" target="" class="btn btn-outline-info btn-sm text-uppercase">
                        <i class="fas fa-print"></i> Print
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="responsive-data-table">
                    <table class="table dt-responsive nowrap data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama Lengkap</th>
                                <th>Jenis Kelamin</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($warga as $val)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$val['nik']}}</td>
                                <td>{{$val['nama']}}</td>
                                <td>{{$val['jkel']}}</td>
                                <td>{{$val['alamat']}}</td>
                                <td>{{$val['status']}}</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="/rw/penduduk/detail">Detail</a>
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
    <div class="col-lg-4 col-md-8 col-sm-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Mutasi Warga</h2>
            </div>
        </div>
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Penduduk Sementara</h2>
            </div>
        </div>
    </div>
</div>



@endsection
@push('custom-script')
<script src="{{asset('assets/plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.data-table').DataTable();

        new Chart(document.getElementById("jkel-chart"), {
            type: 'pie',
            data: {
                labels: ["Laki-Laki", "Perempuan"],
                datasets: [{
                    label: "Orang",
                    backgroundColor: ["#3e95cd", "#8e5ea2"],
                    data: [2478, 5267]
                }]
            },
            options: {
                legend: {
                    position: 'bottom'
                }
            }
        });

        new Chart(document.getElementById("pekerjaan-chart"), {
            type: 'pie',
            data: {
                labels: ["PNS", "Karyawan Swasta", "Wirausaha", "Pelajar", "Tidak Bekerja"],
                datasets: [{
                    label: "Orang",
                    backgroundColor: ["#3e95cd", "#8e5ea2", "#3cba9f", "#e8c3b9", "#c45850"],
                    data: [2478, 5267, 734, 784, 433]
                }]
            },
            options: {
                legend: {
                    position: 'bottom'
                }
            }
        });

        new Chart(document.getElementById("jkel-chart"), {
            type: 'pie',
            data: {
                labels: ["Laki-Laki", "Perempuan"],
                datasets: [{
                    label: "Jenis Kelamin (orang)",
                    backgroundColor: ["#3e95cd", "#8e5ea2"],
                    data: [2478, 5267]
                }]
            },
            options: {
                legend: {
                    position: 'bottom'
                }
            }
        });
    });
</script>
@endpush