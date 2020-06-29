@extends('layouts.default')
@push('page-title')
RW - Bagian
@endpush
@push('custom-style')
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}">
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
                    <div class="form-row">
                        <label>Nama RT</label>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">RT </span>
                            </div>
                            <input type="text" class="form-control" placeholder="Masukan Nama RT" id="inputGroupRT" required>
                        </div>
                        <p style="font-size: 90%">contoh. 001</p>
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
    <div class="col-lg-8 col-md-12 col-sm-12">
        <div class="card card-default">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Input Data Ketua / Pengurus RT</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>NIK (Nomor Induk Penduduk)</label>
                            <input type="text" class="form-control" name="nik" id="inputNIK" placeholder="Masukan NIK" required>
                            <div class="valid-feedback">
                                Bagus! NIK tersedia
                            </div>
                            <div class="invalid-feedback">
                                Maaf, sudah ada warga dengan NIK sama
                            </div>
                        </div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>No. KK</label>
                            <input type="text" class="form-control" name="no_kk" id="inputNoKK" placeholder="Masukan Nomor KK" required>
                            <div class="valid-feedback">

                            </div>
                            <div class="invalid-feedback">

                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-4 col-sm-12 mb-4">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" id="inputTglLahir" placeholder="Masukan Tanggal Lahir" required>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Jenis Kelamin</label>
                            <div class="w-100 mb-2"></div>
                            <ul class="list-unstyled list-inline">
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Laki Laki
                                        <input type="radio" name="jkel" checked="checked" value="L" />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Perempuan
                                        <input type="radio" name="jkel" value="P" />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Status Kawin</label>
                            <div class="w-100 mb-2"></div>
                            <ul class="list-unstyled list-inline">
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Belum
                                        <input type="radio" name="status_kawin" checked="checked" value="Belum" />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Sudah
                                        <input type="radio" name="status_kawin" value="Sudah" />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Agama</label>
                            <select class="form-control" name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                            </select>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Pendidikan</label>
                            <select class="form-control" name="agama">
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="Diploma 1">Diploma 1</option>
                                <option value="Diploma 2">Diploma 2</option>
                                <option value="Diploma 3">Diploma 3</option>
                                <option value="Diploma 4">Diploma 4</option>
                                <option value="Strata 1">Strata 1</option>
                                <option value="Strata 2">Strata 2</option>
                                <option value="Strata 3">Strata 3</option>
                                <option value="Strata 4">Strata 4</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Pekerjaan</label>
                            <input class="form-control" name="pekerjaan" required placeholder="Masukan Pekerjaan">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Kewarganegaraan</label>
                            <div class="w-100 mb-2"></div>
                            <ul class="list-unstyled list-inline">
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">WNI
                                        <input type="radio" name="kewarganegaraan" checked="checked" value="WNI" />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">WNA
                                        <input type="radio" name="kewarganegaraan" value="WNA" />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Kedudukan Keluarga</label>
                            <div class="w-100 mb-2"></div>
                            <ul class="list-unstyled list-inline">
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Kepala Keluarga
                                        <input type="radio" name="kedudukan_keluarga" checked="checked" value="Kepala" />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Anggota Keluarga
                                        <input type="radio" name="kedudukan_keluarga" value="Anggota" />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="w-100 mb-4">
                            <hr class="my-4">
                            <h5 class="">Alamat KTP</h5>
                        </div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Provinsi</label>
                            <div class="w-100"></div>
                            <div class="select2-wrapper w-100">
                                <select id="select2-prov" class="form-control" name="provinsi">
                                </select>
                            </div>
                        </div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Kota / Kabupaten</label>
                            <div class="w-100"></div>
                            <div class="select2-wrapper w-100">
                                <select id="select2-kot" class="form-control" name="kota">
                                </select>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Kecamatan</label>
                            <div class="w-100"></div>
                            <div class="select2-wrapper w-100">
                                <select id="select2-kec" class="form-control" name="kecamatan">
                                </select>
                            </div>
                        </div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Kelurahan / Desa</label>
                            <div class="w-100"></div>
                            <div class="select2-wrapper w-100">
                                <select id="select2-kel" class="form-control" name="kelurahan">
                                </select>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Alamat Jalan</label>
                            <textarea class="form-control mb-2" rows="2" placeholder="Masukan Alamat" name="alamat"></textarea>
                            <p style="font-size: 90%">Tidak perlu menyertakan Provinsi, Kota/Kab, Kecamatan, Kelurahan/Desa</p>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-12">
                            <label class="control outlined control-checkbox checkbox-primary">Apakah alamat KTP sama dengan alamat tinggal ?
                                <input id="alamat-sama" type="checkbox" checked="checked" />
                                <div class="control-indicator"></div>
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom-script')
<script src="{{asset('assets/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-mask-input/jquery.inputmask.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#inputGroupRT').inputmask({
            mask: '999',
            placeholder: '000',
        });

        $('#inputNIK').inputmask({
            mask: '999999-99999-9999',
        })

        $('#inputNoKK').inputmask({
            mask: '999999-99999-9999',
        })

        $("#select2-prov").select2({
            theme: "bootstrap",
            placeholder: "Pilih Provinsi",
            maximumSelectionSize: 6,
        });

        $("#select2-kot").select2({
            theme: "bootstrap",
            placeholder: "Pilih Kota / Kab",
            maximumSelectionSize: 6,
        });

        $("#select2-kec").select2({
            theme: "bootstrap",
            placeholder: "Pilih Kecamatan",
            maximumSelectionSize: 6,
        });

        $("#select2-kel").select2({
            theme: "bootstrap",
            placeholder: "Pilih Kelurahan / Desa",
            maximumSelectionSize: 6,
        });


        /**
         * Get Data Daerah Indonesia
         */
        let idProvinsi, idKota, idKec, idKel;
        $('#select2-prov').change(function() {
            $.ajax({
                type: 'GET',
                url: 'https://dev.farizdotid.com/api/daerahindonesia/provinsi',
            });
        });



    });
</script>
@endpush