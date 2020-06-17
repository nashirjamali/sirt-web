@extends('layout.app')

@section('header')
<div class="header-body">
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Detail Mutasi Warga</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="/default"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="/rt/data-warga">Mutasi Warga</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Mutasi Warga</li>
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
                            <h3 class="mb-0">Identitas Warga</h3>
                        </div>
                    </div>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <div class="row ml-2">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="input-nama" class="form-control-label">Nama Lengkap</label>
                                <h3>Nashir Jamali</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-2">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="input-nik" class="form-control-label">Nomor Induk Kependudukan
                                    (NIK)</label>
                                <h3>1234567890123456</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="input-nkk" class="form-control-label">Nomor Kartu Keluarga
                                    (KK)</label>
                                <h3>1234567890123456890</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row ml-2">


                        <div class="w-100"></div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="input-tempat-lahir" class="form-control-label">Tempat Lahir</label>
                                <h3>1234567890123456</h3>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="input-tgl-lahir" class="form-control-label">Tanggal Lahir</label>
                                <h3>01/01/1111</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Alamat KTP -->
                    <h2 class="my-4 text-primary">Alamat KTP</h2>
                    <div class="row ml-2">
                        <div class="w-100"></div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="form-group">
                                <label for="input-alamat" class="form-control-label">Alamat</label>
                                <h3>Jl. Kedung Baruk No. 98</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Alamat Tinggal -->
                    <h2 class="my-4 text-primary">Alamat Tinggal</h2>
                    <div class="row ml-2">
                        <div class="w-100"></div>
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="form-group">
                                <label for="input-alamat" class="form-control-label">Alamat</label>
                                <h3>Jl. Kedung Baruk No. 98</h3>
                            </div>
                        </div>

                    </div>
                    <div class="w-100"></div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="input-tgl-mutasi" class="form-control-label">Tanggal Mutasi</label>
                            <h3>11/11/1111</h3>
                        </div>
                    </div>


                    <div class="w-100"></div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="input-status" class="form-control-label">Status</label>
                            <h3>Pindah</h3>
                        </div>
                    </div>
                    <a class="btn btn-sm btn-light" href="/rt/mutasi-warga/">
                        Back
                    </a>
                </div>

            </div>

        </div>
    </div>

</div>
@endsection