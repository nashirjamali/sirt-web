@extends('layout.app')

@section('header')
<div class="header-body">
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Detail Penduduk Sementara</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="/default"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="/rt/sementara">Data Penduduk Sementara</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Penduduk Sementara</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid mt--6">
    <div class="row">
        <!-- Form tambah datawarga -->
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-1">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-sm-12">
                            <h3 class="mb-0">Informasi Detail Penduduk Sementara</h3>
                        </div>
                    </div>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <form>
                        <!-- Identitas Diri -->
                        <h2 class="my-4 text-primary">Identitas Diri</h2>
                        <div class="row ml-2">
                            <div class="w-100"></div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <h3>Nama Lengkap</h3>
                                    <p>Nashir Jamali</p>
                                </div>

                                <div class="form-group">
                                    <h3>NIK</h3>
                                    <p>1283478327489</p>
                                </div>

                                <div class="form-group">
                                    <h3>Kewarganegaraan</h3>
                                    <p>Indonesia</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <h3>Pekerjaan</h3>
                                    <p>Pegawa Negeri Sipil</p>
                                </div>

                                <div class="form-group">
                                    <h3>Jenis Kelamin</h3>
                                    <p>Laki - laki</p>
                                </div>

                                <div class="form-group">
                                    <h3>Alamat</h3>
                                    <p>Jl Surabaya</p>
                                </div>
                            </div>
                        </div>

                        <h2 class="my-4 text-primary">Status Kepemilikan Tempat Tinggal</h2>
                        <div class="row ml-2">
                            <div class="w-100"></div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <h3>Jenis Tempat Tinggal</h3>
                                    <p>KOS</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <div class="form-group">
                                    <h3>Nama Pemilik Rumah</h3>
                                    <p>Asrori</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="form-group">
                                <h3>Keterangan</h3>
                                <textarea>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ullam eveniet a iste sed numquam quibusdam culpa? Explicabo quae nam labore expedita, tempora rerum neque temporibus, architecto nemo repellat itaque possimus.</textarea>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection