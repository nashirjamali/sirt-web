@extends('layouts.default')
@push('page-title')
RW - Inventaris
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
    <h1>Data Inventaris RW</h1>
    <br>
    <a href="/rw/inventaris/create" target="" class="btn btn-outline-primary text-uppercase">
    <i class="fas fa-plus-circle mr-2"></i> Tambah Inventaris
</a>
</div>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default" id="inventaris_barang">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Inventaris Barang</h2>

            </div>
            <div>

            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <p class="">Data Inventaris Barang</p>
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
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Tanggal Perolehan</th>
                                <th class="no-sort">Kelengkapan Dokumen</th>
                                <th>Kuantitas</th>
                                <!-- <th class="no-sort">Satuan</th>
                                <th class="no-sort">Asal</th> -->
                                <th class="no-sort">Kondisi</th>
                                <th class="no-sort">Harga</th>
                                <!-- <th class="no-sort">Keterangan</th> -->
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($barang as $val)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$val->kode_barang}}</td>
                                <td>{{$val->nama_barang}}</td>
                                <td>{{$val->tgl_perolehan}}</td>
                                <td>{{$val->kelengkapan_dokumen}}</td>
                                <td>{{$val->kuantitas}}</td>
                                <!-- <td>{{$val->satuan}}</td>
                                <td>{{$val->asal}}</td> -->
                                <td>{{$val->kondisi}}</td>
                                <td>Rp {{ number_format($val->harga,2,',','.') }}</td>
                                <!-- <td>{{$val->keterangan}}</td> -->
                                <td>
                                    <a class="btn btn-sm text-white btn-primary">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default" id="inventaris_perpustakaan">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Inventaris Perpustakaan</h2>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <p class="">Data Inventaris Perpustakaan</p>
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
                                <th class="no-sort">Kode Buku</th>
                                <th class="no-sort">Judul</th>
                                <th class="no-sort">Pengarang</th>
                                <th class="no-sort">Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Tanggal Dimiliki</th>
                                <!-- <th class="no-sort">Kepemilikan Dokumen</th>
                                <th class="no-sort">Asal</th> -->
                                <th>Jumlah Buku</th>
                                <th class="no-sort">Kondisi Buku</th>
                                <th class="no-sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($perpustakaan as $val)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$val->kode_buku}}</td>
                                <td>{{$val->judul}}</td>
                                <td>{{$val->pengarang}}</td>
                                <td>{{$val->penerbit}}</td>
                                <td>{{$val->tahun_terbit}}</td>
                                <td>{{$val->tgl_dimiliki}}</td>
                                <!-- <td>{{$val->kepemilikan_dokumen}}</td>
                                <td>{{$val->asal}}</td> -->
                                <td>{{$val->jumlah_buku}}</td>
                                <td>{{$val->kondisi_buku}}</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary">Detail</a>
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
        <div class="card card-default" id="inventaris_tanah_bangunan">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Inventaris Tanah Bangunan</h2>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <p class="">Data Inventaris Tanah Bangunan</p>
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
                                <th>Kode Tanah</th>
                                <th>Tanggal Dimiliki</th>
                                <th>Asal</th>
                                <!-- <th>Kelengkapan Dokumen</th> -->
                                <th>Alamat</th>
                                <th>Luas</th>
                                <!-- <th>Keterangan</th> -->
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>0313</td>
                                <td>03/03/2020</td>
                                <td>Hibah</td>
                                <!-- <td>Tidak</td> -->
                                <td>Jl. Jalan</td>
                                <td>3000 m2</td>
                                <!-- <td>Tanah Sengketa</td> -->
                                <td>
                                    <a class="btn btn-sm text-white btn-primary">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default" id="inventaris_atk">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Inventaris ATK</h2>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <p class="">Data Inventaris ATK</p>
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
                                <th>Kode Atk</th>
                                <th>Nama Atk</th>
                                <th>Tanggal Dimiliki</th>
                                <!-- <th>Kelengkapan Dokumen</th>
                                <th>Asal</th> -->
                                <th>Jumlah</th>
                                <!-- <th>Keterangan</th> -->
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>03250</td>
                                <td>Pulpen</td>
                                <td>03/03/2020</td>
                                <!-- <td>Lengkap</td>
                                <td>Beli</td> -->
                                <td>3</td>
                                <!-- <td>-</td> -->
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="/rw/inventaris/detail">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header border-bottom-0 d-flex justify-content-between">
                <div>
                    <a href="/rw/inventaris/create" target="" class="btn btn-outline-primary text-uppercase">
                        <i class="fas fa-plus-circle mr-2"></i> Tambah Inventaris
                    </a>
                </div>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs nav-style-border px-0 justify-content-between justify-content-xl-start bg-white nav-justified w-100" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="inventaris_barang-tab" data-toggle="tab" href="#inventaris_barang" role="tab" aria-controls="inventaris_barang" aria-selected="true">Inventaris Barang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="inventaris_perpustakaan-tab" data-toggle="tab" href="#inventaris_perpustakaan" role="tab" aria-controls="inventaris_perpustakaan" aria-selected="false">Inventaris Perpustakaan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="inventaris_tanah_bangunan-tab" data-toggle="tab" href="#inventaris_tanah_bangunan" role="tab" aria-controls="inventaris_tanah_bangunan" aria-selected="false">Inventaris Tanah Bangunan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="inventaris_atk-tab" data-toggle="tab" href="#inventaris_atk" role="tab" aria-controls="inventaris_atk" aria-selected="false">Inventaris ATK</a>
                    </li>
                </ul>
                <div class="tab-content"> -->
<!--begin::Inventaris Barang Tab-->
<!-- <div class="tab-pane pt-3 fade show active" id="inventaris_barang" role="tabpanel" aria-labelledby="inventaris_barang-tab">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="">Data Inventaris Barang</p>
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
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Tanggal Perolehan</th>
                                        <th class="no-sort">Kelengkapan Dokumen</th>
                                        <th>Kuantitas</th>
                                        <th class="no-sort">Satuan</th>
                                        <th class="no-sort">Asal</th>
                                        <th class="no-sort">Kondisi</th>
                                        <th class="no-sort">Harga</th>
                                        <th class="no-sort">Keterangan</th>
                                        <th class="no-sort"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($barang as $val)
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$val->kode_barang}}</td>
                                        <td>{{$val->nama_barang}}</td>
                                        <td>{{$val->tgl_perolehan}}</td>
                                        <td>{{$val->kelengkapan_dokumen}}</td>
                                        <td>{{$val->kuantitas}}</td>
                                        <td>{{$val->satuan}}</td>
                                        <td>{{$val->asal}}</td>
                                        <td>{{$val->kondisi}}</td>
                                        <td>Rp {{ number_format($val->harga,2,',','.') }}</td>
                                        <td>{{$val->keterangan}}</td>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> -->
<!--end::Inventaris Barang Tab-->

<!--begin::Inventaris Perpustakaan Tab-->
<!-- <div class="tab-pane pt-3 fade show fade" id="inventaris_perpustakaan" role="tabpanel" aria-labelledby="inventaris_perpustakaan-tab">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="">Data Inventaris Perpustakaan</p>
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
                                        <th class="no-sort">Kode Buku</th>
                                        <th class="no-sort">Judul</th>
                                        <th class="no-sort">Pengarang</th>
                                        <th class="no-sort">Penerbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>Tanggal Dimiliki</th>
                                        <th class="no-sort">Kepemilikan Dokumen</th>
                                        <th class="no-sort">Asal</th>
                                        <th>Jumlah Buku</th>
                                        <th class="no-sort">Kondisi Buku</th>
                                        <th class="no-sort"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach($perpustakaan as $val)
                                    <tr>
                                        <td>{{$no}}</td>
                                        <td>{{$val->kode_buku}}</td>
                                        <td>{{$val->judul}}</td>
                                        <td>{{$val->pengarang}}</td>
                                        <td>{{$val->penerbit}}</td>
                                        <td>{{$val->tahun_terbit}}</td>
                                        <td>{{$val->tgl_dimiliki}}</td>
                                        <td>{{$val->kepemilikan_dokumen}}</td>
                                        <td>{{$val->asal}}</td>
                                        <td>{{$val->jumlah_buku}}</td>
                                        <td>{{$val->kondisi_buku}}</td>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                    @php $no++; @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div> -->
<!--end::Inventaris Perpustakaan Tab-->

<!--begin::Inventaris Tanah Bangunan Tab-->
<!-- <div class="tab-pane pt-3 fade show fade" id="inventaris_tanah_bangunan" role="tabpanel" aria-labelledby="inventaris_tanah_bangunan-tab">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="">Data Inventaris Tanah Bangunan</p>
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

                                        <th>Kode Tanah</th>
                                        <th>Tanggal Dimiliki</th>
                                        <th>Asal</th>
                                        <th>Kelengkapan Dokumen</th>
                                        <th>Alamat</th>
                                        <th>Luas</th>
                                        <th>Keterangan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>0313</td>
                                        <td>03/03/2020</td>
                                        <td>Hibah</td>
                                        <td>Ada</td>
                                        <td>Jl. Jalan</td>
                                        <td>3000 m2</td>
                                        <td>Tanah Sengketa</td>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary">Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
<!--end::Inventaris Tanah Bangunan Tab-->

<!--begin::Inventaris ATK Tab-->
<!-- <div class="tab-pane pt-3 fade show fade" id="inventaris_atk" role="tabpanel" aria-labelledby="inventaris_atk-tab">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="">Data Inventaris ATK</p>
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

                                        <th>Kode Atk</th>
                                        <th>Nama Atk</th>
                                        <th>Tanggal Dimiliki</th>
                                        <th>Kelengkapan Dokumen</th>
                                        <th>Asal</th>
                                        <th>Jumlah</th>
                                        <th>Keterangan</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>

                                        <td>03250</td>
                                        <td>Pulpen</td>
                                        <td>03/03/2020</td>
                                        <td>Ada</td>
                                        <td>Beli</td>
                                        <td>3</td>
                                        <td>-</td>
                                        <td>
                                            <a class="btn btn-sm text-white btn-primary" href="/rw/inventaris/detail">Detail</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->
<!--end::Inventaris ATK Tab-->

<!-- </div>
            </div>
        </div>
    </div>
</div> -->
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