@extends('layouts.default')
@push('page-title')
RW - Data Pengumuman
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
    <h1>Pengumuman</h1>
</div>
<div class="row">
    @foreach($last as $val)
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Pengumuman terbaru</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title text-primary">{{$val['judul_pengumuman']}}</h5>
                <p class="card-text pb-3">{{$val['isi_pengumuman']}}</p>
                <p class="card-text">
                    <small class="text-muted">{{$val['tgl_pengumuman']}}</small>
                </p>
                <button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#pengumuman-{{$val['id']}}">
                    Lihat
                </button>
            </div>
        </div>
    </div>
    @endforeach



    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between mb-4">
                <h2>Data Pengumuman</h2>
                <div>
                    <a href="/rw/pengumuman/create" target="" class="btn btn-outline-primary text-uppercase">
                        <i class="fas fa-plus-circle mr-2"></i> Tambah Pengumuman
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
                                <th>Judul pengumuman</th>
                                <th>Tanggal Pengumuman</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach($pengumuman as $val)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$val->judul_pengumuman}}</td>
                                <td>{{$val->tgl_pengumuman}}</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="/rw/pengumuman/{{$val->id}}">Detail</a>
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

<!-- modal -->
@foreach($pengumuman_last as $val)
<div class="modal fade" id="pengumuman-{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="pengumuman-{{$val->id}}-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pengumuman-{{$val->id}}-title">{{$val->judul_pengumuman}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{$val->isi_pengumuman}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Detail</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach


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
    });
</script>
@endpush