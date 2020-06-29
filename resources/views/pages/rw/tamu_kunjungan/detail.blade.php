@extends('layouts.default')
@push('page-title')
RW - Tamu - Detail
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
    <h1 class="mb-2">Detail Tamu Kunjungan</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rw/bagian">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Tamu Kunjungan
            </li>
            <li class="breadcrumb-item" aria-current="page">Detail Tamu Kunjungan</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="w-100"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>No Surat Tugas</h2>
            </div>
            <div class="card-body">
                <form>
                <p>1111111111111111</p>
                </form>
            </div>
        </div>
    </div>

    <div class="w-100"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Informasi Tamu</h2>
            </div>
            <div class="card-body">
                <form>
                    <h5>Nama Lengkap</h5>
                    <p class="spasi">Nashir Jamali</p>
                    <h5>NIP</h5>
                    <p>1234567890123456</p>
                </form>
            </div>
        </div>
    </div>

    <div class="w-100"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Informasi Kunjungan</h2>
            </div>
            <div class="card-body">
                <form>
                    <h5>Jenis Tamu</h5>
                    <p class="spasi">Umum</p>
                    <h5>Periode</h5>
                    <p class="spasi">2020</p>
                    <h5>Tujuan</h5>
                    <p class="spasi">Inspeksi RW</p>
                    <h5>Tanggal</h5>
                    <p class="spasi">03/03/2020</p>
                    <h5>Jabatan</h5>
                    <p class="spasi">Mahasiswa</p>
                    <h5>Instansi</h5>
                    <p>Undika</p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection