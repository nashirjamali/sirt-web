@extends('layouts.default')
@push('page-title')
Warga - Buat Aspirasi
@endpush
@push('custom-style')
<link href="{{asset('assets/plugins/summernote/summernote.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}" rel="stylesheet">
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Tambah Aspirasi</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/warga/request">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Aspirasi
            </li>
            <li class="breadcrumb-item" aria-current="page">Tambah Aspirasi</li>
        </ol>
    </nav>
</div>
<form id="form" action="{{route('warga.aspirasi.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-default" id="request_card">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Aspirasi Warga</h2>
                </div>
                <div class="card-body row">
                    <div class="form-row mb-4">
                        <label>Untuk Bagian</label>
                        <select class="form-control" name="id_bagian">
                            @foreach($bagian as $val)
                            <option value="{{$val->id}}">{{$val->nama_bagian}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="w-100"></div>
                    <div class="form-row w-100 mb-4">
                        <label>Isi Aspirasi</label>
                        <div class="w-100"></div>
                        <textarea class="text-dark form-control mb-4" rows="8" id="summernote" name="content"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Tambah Aspirasi</button>
</form>


@endsection
@push('custom-script')
<script src="{{asset('assets/plugins/summernote/summernote.min.js')}}"></script>
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 500,
            minHeight: null,
            maxHeight: null,
            focus: true
        });
    });
</script>
@endpush