@extends('layouts.default')
@push('page-title')
RW - Bagian
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Tambah Bagian RT</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rw/bagian">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Bagian RT
            </li>
            <li class="breadcrumb-item" aria-current="page">Tambah Bagian RT</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Identitas RT</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group row">
                        <label>Nama RT</label>
                        <input type="text" class="form-control" name="nama_rt" placeholder="Masukan Nama RT">
                        <small class="form-text text-muted"><b>Contoh nama RT:</b> 001</small>
                        <div class="valid-feedback">
                            Bagus! nama RT belum pernah dibuat
                        </div>
                        <div class="invalid-feedback">
                            Maaf, nama RT sudah pernah dibuat
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="w-100"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Input Ketua / Pengurus RT</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group row">
                        <label>NIK (Nomor Induk Penduduk)</label>
                        <input type="text" class="form-control is-invalid" name="nik" placeholder="Masukan Nama RT">
                        <div class="valid-feedback">
                            Bagus! NIK tersedia
                        </div>
                        <div class="invalid-feedback">
                            Maaf, sudah ada warga dengan NIK sama
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection