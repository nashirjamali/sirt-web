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

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default ">
            <div class="card-header card-header-border-bottom">
                <h2>Filter RT</h2>
            </div>
            <div class="card-body">
                <form method="get" action="{{route('rw.penduduk.index')}}">
                    <div class="form-row mb-4">
                        <label>Pilih RT</label>
                        <select class="js-example-basic-multiple form-control" id="rt-multiple" name="rts[]" multiple="multiple">
                            @foreach($bagian as $val)
                            <option value="{{$val->id}}" <?php echo $id_bagian && in_array($val->id, $id_bagian) ? "selected" : "" ?>>{{$val->nama_bagian}}</option>
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
            <div class="card-header card-header-border-bottom">
                <h2>Summary</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Jumlah Warga</label>
                        <div class="w-100"></div>
                        <h3 class="text-dark">{{$jmlh_warga}} Orang</h3>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Jumlah Keluarga</label>
                        <div class="w-100"></div>
                        <h3 class="text-dark">{{$jmlh_kk}} Keluarga</h3>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Jumlah Penduduk Sementara</label>
                        <div class="w-100"></div>
                        <h3 class="text-dark">{{$jmlh_sementara}} Orang</h3>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4 text-center">
                        <label for="">Persebaran Penduduk</label>
                        <div style="height: 300px">
                            <canvas id="persebaran-chart"></canvas>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4 text-center">
                        <label for="">Jenis Kelamin</label>
                        <canvas id="jkel-chart"></canvas>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4 text-center">
                        <label for="">Pekerjaan</label>
                        <canvas id="pekerjaan-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between mb-4">
                <h2>Data Warga</h2>
            </div>
            <div class="card-body">
                <div class="mb-2">
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
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($list_warga as $val)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$val['nik']}}</td>
                                <td>{{$val['nama']}}</td>
                                <td>{{$val['jkel']}}</td>
                                <td>{{$val['alamat']}}</td>
                                <td>{{$val['status']}}</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="/rw/penduduk/{{$val['id']}}">Detail</a>
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
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Mutasi Warga</h2>
            </div>
            <div class="card-body">
                <p class="mb-4">Pengelolaan untuk warga datang / pindah / meninggal</p>
                <a href="/rw/mutasi" class="btn btn-primary mb-4">
                    Lihat Data
                </a>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Penduduk Sementara</h2>
            </div>
            <div class="card-body">
                <p class="mb-4">Pengelolaan data penduduk pendatang, bertujuan untuk tinggal sementara tidak menetap</p>
                <a href="/rw/penduduk-sementara" class="btn btn-primary mb-4">
                    Lihat Data
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
@push('custom-script')
<script src="{{asset('assets/plugins/charts/Chart.min.js')}}"></script>
<script src="{{asset('assets/plugins/charts/chartjs-plugin-colorschemes.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.data-table').DataTable();

        let pekerjaan = <?= json_encode($pekerjaan); ?>;
        let nama_pekerjaan = [];
        let jmlh_pekerjaan = [];
        pekerjaan.forEach(el => {
            nama_pekerjaan.push(el.pekerjaan);
            jmlh_pekerjaan.push(el.total);
        });

        new Chart(document.getElementById("pekerjaan-chart"), {
            type: 'pie',
            data: {
                labels: nama_pekerjaan,
                datasets: [{
                    label: "Orang",
                    data: jmlh_pekerjaan
                }]
            },
            options: {
                legend: {
                    position: 'bottom'
                },
                plugins: {
                    colorschemes: {
                        scheme: 'brewer.Paired12'
                    }
                }
            }
        });


        let jkel = <?= json_encode($jkel); ?>;
        let nama_jkel = [];
        let jmlh_jkel = [];
        jkel.forEach(el => {
            nama_jkel.push(el.jkel == "L" ? "Laki-Laki" : "Perempuan");
            jmlh_jkel.push(el.total);
        });
        new Chart(document.getElementById("jkel-chart"), {
            type: 'pie',
            data: {
                labels: nama_jkel,
                datasets: [{
                    label: "Jenis Kelamin (orang)",
                    data: jmlh_jkel
                }]
            },
            options: {
                legend: {
                    position: 'bottom'
                },
                plugins: {
                    colorschemes: {
                        scheme: 'brewer.Paired12'
                    }
                }
            }
        });

        let persebaran = <?= json_encode($persebaran); ?>;
        let nama_bagian = [];
        let jmlh_warga = [];
        persebaran.forEach(el => {
            nama_bagian.push(el.nama_bagian);
            jmlh_warga.push(el.jmlh_warga);
        });
        new Chart(document.getElementById("persebaran-chart"), {
            type: 'pie',
            data: {
                labels: nama_bagian,
                datasets: [{
                    label: "Orang",
                    data: jmlh_warga
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom'
                },
                plugins: {
                    colorschemes: {
                        scheme: 'brewer.Paired12'
                    }
                }
            }
        });
    });
</script>
@endpush