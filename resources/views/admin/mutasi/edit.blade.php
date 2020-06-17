@extends('layout.app')

@section('header')
<div class="header-body">
    <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
            <h6 class="h2 text-white d-inline-block mb-0">Edit Mutasi Warga</h6>
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                    <li class="breadcrumb-item"><a href="/default"><i class="fas fa-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="/rt/data-warga">Mutasi Warga</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Mutasi Warga</li>
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
                    <form>
                        <div class="row ml-2">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="input-nama" class="form-control-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="input-nama" placeholder="Masukan Nama Lengkap" readonly>
                                </div>
                            </div>

                        </div>
                        <div class="row ml-2">


                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="input-nik" class="form-control-label">Nomor Induk Kependudukan
                                        (NIK)</label>
                                    <input type="text" class="form-control" id="input-nik" placeholder="Masukan Nomor NIK" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="input-nkk" class="form-control-label">Nomor Kartu Keluarga
                                        (KK)</label>
                                    <input type="text" class="form-control" id="input-nkk" placeholder="Masukan Nomor No. Kartu Keluarga" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-2">
                            <div class="w-100"></div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="input-tgl-mutasi" class="form-control-label">Tanggal Mutasi</label>
                                    <input type="date" class="form-control" id="input-tgl-mutasi">
                                </div>
                            </div>

                            <div class="w-100"></div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="input-status" class="form-control-label">Status</label>
                                    <input type="text" class="form-control" id="input-status" placeholder="Masukan status">
                                </div>
                            </div>
                        </div>






                        <button type="submit" class="my-4    btn btn-primary">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection