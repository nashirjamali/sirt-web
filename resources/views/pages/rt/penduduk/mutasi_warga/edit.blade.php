@extends('layouts.default')
@push('page-title')
RT - Edit Mutasi Warga
@endpush
@push('custom-style')
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}">
<link href="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/data-tables/responsive.datatables.min.css')}}" rel="stylesheet" />
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Edit Mutasi Warga</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/penduduk">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="/rt/mutasi">
                    Data Mutasi
                </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Edit Mutasi Warga</li>
        </ol>
    </nav>
</div>
<form action="{{route('rt.mutasi.update', $warga->id)}}" method="post">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Edit Mutasi Warga</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-row col-lg-4 col-md-4 col-sm-12 mb-4">
                            <label>Tanggal Mutasi</label>
                            <input type="date" class="form-control" name="tgl_mutasi" value="{{$warga->mutasi->tgl_mutasi}}" id="inputTglMutasi" placeholder="Masukan Tanggal Mutasi" required">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Status Mutasi</label>
                            <select class="form-control" name="status">
                                <option value="Pindah" {{ 'Pindah' == $warga->mutasi->status ? 'selected' : '' }}>Pindah</option>
                                <option value="Datang" {{ 'Datang' == $warga->mutasi->status ? 'selected' : '' }}>Datang</option>
                                <option value="Meninggal" {{ 'Meninggal' == $warga->mutasi->status ? 'selected' : '' }}>Meninggal</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Edit Penduduk Sementara</button>
</form>

@if($errors->any())
<div class="alert alert-dismissible fade show alert-danger" role="alert">
    {{ implode('', $errors->all(':message')) }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@endsection
@push('custom-script')
<script src="{{asset('assets/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-mask-input/jquery.inputmask.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $(".select2-pemilik").select2({
            theme: "bootstrap",
            placeholder: "Pilih pemilik rumah",
            maximumSelectionSize: 6,
        });
    });
</script>
@endpush