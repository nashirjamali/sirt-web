@extends('layouts.default')
@push('page-title')
RT - Pengumuman
@endpush
@push('custom-style')
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}">
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Tambah Pengumuman</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rw/bagian">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Pengumuman
            </li>
            <li class="breadcrumb-item" aria-current="page">Tambah Pengumuman</li>
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
<form id="form" method="POST" action="{{route('rt.pengumuman.store')}}">
    @csrf
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-default">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Input Pengumuman</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Judul Pengumuman</label>
                            <input class="form-control" placeholder="Masukan judul pengumuman" required name="judul"></input>
                        </div>
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Isi Pengumuman</label>
                            <textarea class="form-control" rows="10" placeholder="Masukan isi pengumuman" required name="isi"></textarea>
                        </div>
                        <div class="w-100"></div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg float-right">Tambah Data</button>
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