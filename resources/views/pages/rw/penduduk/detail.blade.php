@extends('layouts.default')
@push('page-title')
RW - Bagian
@endpush
@section('content')
<style>
    .spasi {
        margin-bottom: 30px;
    }
    h5 {
        margin-bottom: 10px;
        color:black;
    }
</style>
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Detail Penduduk</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rw/bagian">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Penduduk
            </li>
            <li class="breadcrumb-item" aria-current="page">Detail Penduduk</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="w-100"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>NIK</h2>
            </div>
            <div class="card-body">
                <form>
                <p class="spasi">14567899876544512</p>
                </form>
            </div>
        </div>
    </div>

    <div class="w-100"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Identitas Penduduk</h2>
            </div>
            <div class="card-body">
                <form>
                    <h5>Nama Lengkap</h5>
                    <p class="spasi">Nashir Jamali</p>
                    <h5>Jenis Kelamin</h5>
                    <p class="spasi">Laki-Laki</p>
                    <h5>Alamat</h5>
                    <p class="spasi">Jalan Surabaya</p>
                    <h5>Wilayah RT</h5>
                    <p class="spasi">RT 002</p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection