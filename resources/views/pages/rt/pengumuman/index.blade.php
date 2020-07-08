@extends('layouts.default')
@push('page-title')
RT - Data Pengumuman
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
    <h1>Headline Pengumuman</h1>
</div>
<div class="row">
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Pengumuman terbaru</h2>
            </div>
            <div class="card-body">
                <span class="h3">Judul Pengumuman</span>
                <h5 class="card-title mt-2">Isi pengumuan ...</h5>
                <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#exampleModalLong1">
                    Lihat
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Pengumuman terbaru</h2>
            </div>
            <div class="card-body">
                <span class="h3">Judul Pengumuman</span>
                <h5 class="card-title mt-2">Isi pengumuan ...</h5>
                <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#exampleModalLong2">
                    Lihat
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Pengumuman terbaru</h2>
            </div>
            <div class="card-body">
                <span class="h3">Judul Pengumuman</span>
                <h5 class="card-title mt-2">Isi pengumuan ...</h5>
                <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#exampleModalLong3">
                    Lihat
                </button>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between mb-4">
                <h2>Data Pengumuman</h2>
                <div>
                    <a href="/rt/pengumuman/create" target="" class="btn btn-outline-primary text-uppercase">
                        <i class="fas fa-plus-circle mr-2"></i> Tambah Data Pengumuman
                    </a>
                </div>
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
                                <th>Id Bagian</th>
                                <th>Judul pengumuman</th>
                                <th>Isi Pengumuman</th>
                                <th>Tanggal Pengumuman</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="/rt/penngumuman/detail">edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>

<!-- modal -->
<div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pengumuman 1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                pengumuman no 1
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, ex autem illum aut deleniti molestiae distinctio, similique in vel excepturi iste illo, nostrum voluptatem? Eligendi odio iste architecto libero in.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pengumuman 2</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                pengumuman no 2
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, ex autem illum aut deleniti molestiae distinctio, similique in vel excepturi iste illo, nostrum voluptatem? Eligendi odio iste architecto libero in.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Pengumuman 3</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                pengumuman no 3
                <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, ex autem illum aut deleniti molestiae distinctio, similique in vel excepturi iste illo, nostrum voluptatem? Eligendi odio iste architecto libero in.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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