@extends('layouts.default')
@push('page-title')
RT - Pemilu
@endpush
@push('custom-style')
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}">
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Tambah Pemilu</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/pemilu">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Pemilu
            </li>
            <li class="breadcrumb-item" aria-current="page">Tambah Pemilu</li>
        </ol>
    </nav>
</div>
@if($errors->any())
<div class="alert alert-dismissible fade show alert-danger" role="alert">
    {{ implode('', $errors->all(':message')) }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<form id="form" method="POST" action="{{route('rt.pemilu.store')}}">
    @csrf
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <div class="card card-default">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Input Pemilu</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Periode</label>
                            <input type="number" class="form-control" placeholder="Masukan periode pemilu" required name="periode"></input>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Tanggal Pemilu</label>
                            <input type="date" class="form-control" placeholder="Masukan tanggal pemilu" required name="tgl_pemilu"></input>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Tempat Pemilu</label>
                            <input type="text" class="form-control" placeholder="Masukan tempat pemilu" required name="tempat_pemilu"></input>
                        </div>
                        <div class="w-100"></div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Tambah Data</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@push('custom-script')
<script src="{{asset('assets/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-mask-input/jquery.inputmask.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
@endpush