@extends('layouts.default')
@push('page-title')
RW - Request Detail
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Detail Request Surat Kependudukan</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/request">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Request
            </li>
            <li class="breadcrumb-item" aria-current="page">Detail Request</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-account-box-outline font-size-20"></i>
                </div>
                <h2>Identitas Warga</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">NIK</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$aspirasi->warga->nik}}</h5>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Nama</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$aspirasi->warga->nama}}</h5>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Alamat</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$aspirasi->warga->alamat}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                    <i class="mdi mdi-information font-size-20"></i>
                </div>
                <h2>Isi Aspirasi</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Tanggal</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$aspirasi->created_at}}</h5>
                    </div>
                    <br>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Isi Aspirasi</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{!! html_entity_decode($aspirasi->isi_aspirasi) !!}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection