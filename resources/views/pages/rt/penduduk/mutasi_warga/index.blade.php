@extends('layouts.default')
@push('page-title')
RT - Mutasi Warga
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
    <h1 class="mb-2">Data Mutasi Warga</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/penduduk">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="/rt/penduduk">
                    Data Penduduk
                </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Data Mutasi Warga</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Summary</h2>
            </div>
            <div class="card-body">
                <p class="text-center mb-2">Statistik Mutasi Mutasi</p>
                <div>
                    <canvas id="mutasi-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between mb-4">
                <h2>Data Mutasi</h2>
                <div>
                    <a href="/rt/mutasi/create" target="" class="btn btn-outline-primary text-uppercase">
                        <i class="fas fa-plus-circle mr-2"></i> Tambah Data Mutasi
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-2 d-flex justify-content-end">
                    <a href="/" target="" class="btn btn-outline-success btn-sm text-uppercase">
                        <i class="fas fa-file-excel"></i> Export Excel
                    </a>
                    <a href="/" target="" class="btn btn-outline-info btn-sm text-uppercase">
                        <i class="fas fa-print"></i> Print
                    </a>
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
                                <th>Status Mutasi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($mutasi as $val)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$val->warga->nik}}</td>
                                <td>{{$val->warga->nama}}</td>
                                <td>{{$val->warga->jkel}}</td>
                                <td>{{$val->warga->alamat}}</td>
                                <td>{{$val->status}}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary">
                                        Detail
                                    </a>
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
<script src="{{asset('assets/plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.data-table').DataTable();

        let ctx = $('#mutasi-chart').get(0).getContext('2d');
        ctx.height = 600;
        return chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Agu", "Sep", "Okt", "Nov", "Des"],
                datasets: [{
                    data: [4, 5, 6, 7, 8, 1, 2, 4, 5, 10, 5, 2],
                    label: "Meninggal",
                    borderColor: "#3e95cd",
                    fill: false
                }, {
                    data: [10, 4, 3, 2, 1, 5, 1, 4, 5, 10, 22],
                    label: "Pindah",
                    borderColor: "#8e5ea2",
                    fill: false
                }, {
                    data: [8, 17, 8, 10, 23, 6, 8, 7, 6, 4],
                    label: "Datang",
                    borderColor: "#3cba9f",
                    fill: false
                }]
            },
            options: {
                responsive: true,
                title: {
                    display: true,
                    text: 'Perkembangan mutasi tiap bulan, tahun 2020'
                }
            }
        })
    });
</script>
@endpush