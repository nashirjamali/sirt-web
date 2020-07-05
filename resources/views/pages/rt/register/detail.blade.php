@extends('layouts.default')
@push('page-title')
RT - Register - Detail
@endpush
@section('content')
<style>
    .spasi {
        margin-bottom: 30px;
    }

    h5 {
        margin-bottom: 10px;
        color: black;
    }
</style>
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Detail Register</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rw/bagian">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Register
            </li>
            <li class="breadcrumb-item" aria-current="page">Detail Register</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="w-100"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Informasi Register</h2>
            </div>
            <div class="card-body">
                <form>
                    <h5>No Surat</h5>
                    <p class="mb-4">12345</p>
                    <h5>No Agenda</h5>
                    <p class="mb-4">123132</p>
                    <h5>Tanggal Surat</h5>
                    <p class="mb-4">03/03/2020</p>
                    <h5>Tanggal Terima</h5>
                    <p class="mb-4">L03/03/2020</p>
                    <h5>Penerima Surat</h5>
                    <p class="mb-4">Nashir</p>
                    <h5>Perihal</h5>
                    <p class="mb-4">-</p>
                    <h5>Keterangan</h5>
                    <p class="">-</p>
                </form>
            </div>
        </div>
    </div>
    <!-- 
    <th>nama bagian_rw</th>
    <th>kode_barang</th>
    <th>nama_barang</th>
    <th>tgl_perolehan</th>
    <th>kelengkapan_dokumen</th>
    <th>kuantitas</th>
    <th>satuan</th>
    <th>asal</th>
    <th>kondisi</th>
    <th>harga</th>
    <th>keterangan</th>

                                        <td>RW 1</td>
                                        <td>12345</td>
                                        <td>Lampu</td>
                                        <td>03/03/2020</td>
                                        <td>Lengkap</td>
                                        <td>2</td>
                                        <td>Unit</td>
                                        <td>Beli</td>
                                        <td>Sangat Baik</td>
                                        <td>30000</td>
                                        <td>-</td>
-->
</div>
@endsection