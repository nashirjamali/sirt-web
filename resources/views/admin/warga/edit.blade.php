@extends('layout.app')

@section('header')
    <div class="header-body">
        <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0">Edit Data Warga</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="/default"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/rt/data-warga">Data Warga</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Data Warga</li>
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
                                <h3 class="mb-0">Form Input</h3>
                            </div>
                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <form>
                            <div class="row ml-2">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-nik" class="form-control-label">Nomor Induk Kependudukan
                                            (NIK)</label>
                                        <input type="text" class="form-control" id="input-nik"
                                               placeholder="Masukan Nomor NIK">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-nkk" class="form-control-label">Nomor Kartu Keluarga
                                            (KK)</label>
                                        <input type="text" class="form-control" id="input-nkk"
                                               placeholder="Masukan Nomor No. Kartu Keluarga">
                                    </div>
                                </div>
                            </div>
                            <!-- Identitas Diri -->
                            <h2 class="my-4 text-primary">Identitas Diri</h2>
                            <div class="row ml-2">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-nama" class="form-control-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="input-nama"
                                               placeholder="Masukan Nama Lengkap">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-alamat" class="form-control-label">Jenis Kelamin</label>
                                        <div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="radio-jkel-1" name="input-jkel"
                                                       class="custom-control-input" value="L">
                                                <label class="custom-control-label" for="radio-jkel-1">Laki-Laki</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="radio-jkel-2" name="input-jkel"
                                                       class="custom-control-input" value="P">
                                                <label class="custom-control-label" for="radio-jkel-2">Perempuan</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-agama" class="form-control-label">Agama</label>
                                        <select id="input-agama" class="form-control">
                                            <option>Pilih Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-status-kawin" class="form-control-label">Status Kawin</label>
                                        <div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="radio-kawin-1" name="input-status-kawin"
                                                       class="custom-control-input" value="0">
                                                <label class="custom-control-label" for="radio-kawin-1">Belum</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="radio-kawin-2" name="input-status-kawin"
                                                       class="custom-control-input" value="1">
                                                <label class="custom-control-label" for="radio-kawin-2">Sudah</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-pekerjaan" class="form-control-label">Pekerjaan</label>
                                        <input type="text" class="form-control" id="input-pekerjaan"
                                               placeholder="Masukan Pekerjaan">
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-tempat-lahir" class="form-control-label">Tempat Lahir</label>
                                        <input id="input-tempat-lahir" class="form-control"
                                               placeholder="Masukan Tempat Lahir">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-tgl-lahir" class="form-control-label">Tanggal Lahir</label>
                                        <input id="input-tgl-lahir" type="date" class="form-control"
                                               placeholder="Masukan Tanggal Lahir">
                                    </div>
                                </div>
                            </div>
                            <!-- Alamat KTP -->
                            <h2 class="my-4 text-primary">Alamat KTP</h2>
                            <div class="row ml-2">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-provinsi" class="form-control-label">Provinsi</label>
                                        <select id="input-provinsi" class="form-control">
                                            <option>Pilih Provinsi</option>
                                            <option value="0">Aceh</option>
                                            <option value="1">DKI Jakarta</option>
                                            <option value="2">Jawa Timur</option>
                                            <option value="3">Bali</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-kota" class="form-control-label">Kota/Kabupaten</label>
                                        <select id="input-kota" class="form-control">
                                            <option>Pilih Kota/Kab</option>
                                            <option value="0">Kota Surabaya</option>
                                            <option value="1">Kab. Sidoarjo</option>
                                            <option value="2">Kab. Gresik</option>
                                            <option value="3">Kab. Pasuruan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-kecamatan" class="form-control-label">Kecamatan</label>
                                        <select id="input-kecamatan" class="form-control">
                                            <option>Pilih Kecamatan</option>
                                            <option value="0">Tambaksari</option>
                                            <option value="1">Genteng</option>
                                            <option value="2">Rungkut</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-kelurahan" class="form-control-label">Kelurahan</label>
                                        <select id="input-kelurahan" class="form-control">
                                            <option>Pilih Kelurahan</option>
                                            <option value="0">Genteng</option>
                                            <option value="1">Ketabang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-alamat" class="form-control-label">Alamat</label>
                                        <textarea id="input-alamat" class="form-control"
                                                  placeholder="Masukan Alamat"></textarea>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="check-alamat">
                                            <label class="custom-control-label" for="check-alamat">Apakah alamat tinggal
                                                dengan alamat KTP sama ?</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Alamat Tinggal -->
                            <h2 class="my-4 text-primary">Alamat Tinggal</h2>
                            <div class="row ml-2">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-provinsi" class="form-control-label">Provinsi</label>
                                        <select id="input-provinsi" class="form-control">
                                            <option>Pilih Provinsi</option>
                                            <option value="0">Aceh</option>
                                            <option value="1">DKI Jakarta</option>
                                            <option value="2">Jawa Timur</option>
                                            <option value="3">Bali</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-kota" class="form-control-label">Kota/Kabupaten</label>
                                        <select id="input-kota" class="form-control">
                                            <option>Pilih Kota/Kab</option>
                                            <option value="0">Kota Surabaya</option>
                                            <option value="1">Kab. Sidoarjo</option>
                                            <option value="2">Kab. Gresik</option>
                                            <option value="3">Kab. Pasuruan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-kecamatan" class="form-control-label">Kecamatan</label>
                                        <select id="input-kecamatan" class="form-control">
                                            <option>Pilih Kecamatan</option>
                                            <option value="0">Tambaksari</option>
                                            <option value="1">Genteng</option>
                                            <option value="2">Rungkut</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-kelurahan" class="form-control-label">Kelurahan</label>
                                        <select id="input-kelurahan" class="form-control">
                                            <option>Pilih Kelurahan</option>
                                            <option value="0">Genteng</option>
                                            <option value="1">Ketabang</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col-lg-8 col-md-8 col-sm-12">
                                    <div class="form-group">
                                        <label for="input-alamat" class="form-control-label">Alamat</label>
                                        <textarea id="input-alamat" class="form-control"
                                                  placeholder="Masukan Alamat"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="my-4    btn btn-primary">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
