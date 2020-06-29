@extends('layouts.default')
@push('page-title')
RW - Bagian
@endpush
@section('content')
<style>
    h5.spasi {
        margin-bottom: 5px;
    }
</style>
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Detail Bagian RT</h1>
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
            <li class="breadcrumb-item" aria-current="page">Detail Bagian RT</li>
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
                    <label>Nama RT</label>
                    <h5>Nashir Jamali</h5>
                </form>
            </div>
        </div>
    </div>
    <div class="w-100"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Ketua RT</h2>
            </div>
            <div class="card-body">
                <form>
                    <h5>Nashir Jamali</h5>
                </form>
            </div>
        </div>
    </div>

    <div class="w-100"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Pengurus RT</h2>
            </div>
            <div class="card-body">
                <h5 class="spasi">Nashir Jamali</h5>
                <h5 class="spasi">Nashir Jamali</h5>
                <h5 class="spasi">Nashir Jamali</h5>
                <h5 class="spasi">Nashir Jamali</h5>
                <h5 class="spasi">Nashir Jamali</h5>
            </div>
        </div>
    </div>
</div>
@endsection