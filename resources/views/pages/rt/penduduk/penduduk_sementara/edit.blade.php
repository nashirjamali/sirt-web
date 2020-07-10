@extends('layouts.default')
@push('page-title')
RT - Edit Penduduk Sementara
@endpush
@push('custom-style')
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}">
<link href="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/data-tables/responsive.datatables.min.css')}}" rel="stylesheet" />
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Edit Penduduk Sementara</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/penduduk">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="/rt/penduduk-sementara">
                    Data Penduduk Sementara
                </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Edit Penduduk Sementara</li>
        </ol>
    </nav>
</div>
<form action="{{route('rt.penduduk-sementara.update', $warga->id)}}" method="post">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Edit Penduduk Sementara</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Pemilik Rumah</label>
                            <div class="w-100"></div>
                            <div class="select2-wrapper w-100">
                                <select id="pemilik" name="id_pemilik" class="form-control select2-pemilik">
                                    @foreach($daftar_pemilik as $val)
                                    <option value="{{$val->id}}" {{ $val->id == $warga->pendudukSementara->id_pemilik_rumah ? 'selected' : '' }}>{{$val->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Status Tinggal</label>
                            <select class="form-control" name="status">
                                <option value="Kost" {{ 'Kost' == $warga->pendudukSementara->status ? 'selected' : '' }}>Kost</option>
                                <option value="Sewa" {{ 'Sewa' == $warga->pendudukSementara->status ? 'selected' : '' }}>Sewa</option>
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