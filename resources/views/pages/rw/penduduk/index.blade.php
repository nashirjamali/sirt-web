@extends('layouts.default')
@push('page-title')
    RW - Data Penduduk
@endpush
@push('custom-style')
    <link href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/data-tables/responsive.datatables.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}">
    <!-- <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}"> -->
@endpush
@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Data Penduduk</h1>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-default ">
                <div class="card-header card-header-border-bottom">
                    <h2>Filter RT</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row mb-4">
                            <label>Pilih RT</label>
                            <select class="js-example-basic-multiple form-control" id="rt-multiple" name="rts[]"
                                    multiple="multiple">
                                @foreach($rt as $val)
                                    <option value="{{$val->id}}">{{$val->nama_bagian}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="w-100"></div>
                        <button id="cari-penduduk" type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card card-default">
                <div class="card-header">
                    <ul class="nav nav-tabs nav-style-border pl-0 justify-content-between justify-content-xl-start bg-white nav-justified w-100"
                        role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="warga-tab" data-toggle="tab" href="#warga" role="tab"
                               aria-controls="warga" aria-selected="true">Warga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="mutasi-tab" data-toggle="tab" href="#mutasi" role="tab"
                               aria-controls="mutasi" aria-selected="false">Mutasi Warga</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="sementara-tab" data-toggle="tab" href="#sementara" role="tab"
                               aria-controls="sementara" aria-selected="false">Penduduk Sementara</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <!--begin::Warga Tab-->
                        <div class="tab-pane fade show active" id="warga" role="tabpanel"
                             aria-labelledby="warga-tab">

                            <div class="border-bottom mb-5 pb-5">
                                <h4>Summary</h4>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                                        <p class="text-center mb-2">Jenis Kelamin</p>
                                        <div>
                                            <canvas id="jkel-chart"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 py-4">
                                        <p class="text-center mb-2">Agama</p>
                                        <div>
                                            <canvas id="agama-chart"></canvas>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 py-4">
                                        <p class="text-center mb-2">Rentang Usia</p>
                                        <div>
                                            <canvas id="usia-chart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between mb-4">
                                <h4>Data Warga</h4>
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
                                <table class="table dt-responsive nowrap data-table" id="warga-dt" style="width:100%">
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
    <script src="{{asset('assets/plugins/charts/Chart.min.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
    <script>
        let rt = '';
        $(document).ready(function () {
            chartJkel();
            chartAgama();
            chartUsia();
            $('#warga-dt').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('rw.penduduk.data.warga') }}",
                    type: "GET",
                    data: {
                        rt: rt
                    },
                },
                columns: [{
                    data: 'no',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                    {
                        data: 'nik',
                        name: 'nik',
                        orderable: false,
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        orderable: false,
                    },
                    {
                        data: 'jkel',
                        name: 'jkel',
                        orderable: false,
                    },
                    {
                        data: 'alamat',
                        name: 'alamat',
                        orderable: false,
                    },
                    {
                        data: 'wilayah',
                        name: 'wilayah'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: null,
                        render: function (data, type, full) {
                            return '<a class="btn btn-sm text-white btn-primary" href="/rw/penduduk/detail/' + full[0] + '">Detail</a>'
                        }
                    },
                ]
            });

            $('#cari-penduduk').click(function (e) {
                e.preventDefault();
                rt = $('#rt-multiple').val();
                $('#warga-dt').DataTable().ajax.reload();
            });


            /*
            Chart JS Section
             */
            function chartJkel() {
                let ctx = $('#jkel-chart').get(0).getContext('2d');
                return chart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: [
                                10,
                                12
                            ],
                            backgroundColor: [
                                "#FDCB1E",
                                "#5D8BE8",
                            ],
                            label: 'Jenis Kelamin'
                        }],
                        labels: [
                            'Perempuan',
                            'Laki-laki',
                        ]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            position: 'bottom',
                        }
                    }
                })
            }

            function chartAgama() {
                let ctx = $('#agama-chart').get(0).getContext('2d');
                return chart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        datasets: [{
                            data: [
                                20,
                                10,
                                5,
                                3,
                                1
                            ],
                            backgroundColor: [
                                "#FDCB1E",
                                "#5D8BE8",
                                "#29CC97",
                                "#BFB0F7",
                                "#FF99A1",
                            ],
                            label: 'Agama'
                        }],
                        labels: [
                            'Islam',
                            'Kristen',
                            'Katolik',
                            'Hindu',
                            'Buddha',
                        ]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            position: 'bottom',
                        }
                    }
                })
            }

            function chartUsia() {
                let ctx = $('#usia-chart').get(0).getContext('2d');
                ctx.height = 300;
                return chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        datasets: [{
                            data: [
                                20,
                                10,
                                5,
                                3,
                                1
                            ],
                            backgroundColor: [
                                "#FDCB1E",
                                "#5D8BE8",
                                "#29CC97",
                                "#BFB0F7",
                                "#FF99A1",
                            ],
                            labels: [
                                '0-10',
                                '10-18',
                                '18-30',
                                '40-60',
                                '60 <',
                            ]
                        }],
                        labels: [
                            '0-10',
                            '10-18',
                            '18-30',
                            '40-60',
                            '60 <',
                        ]
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            position: 'bottom',
                        }
                    }
                })
            }
        });
    </script>
@endpush
