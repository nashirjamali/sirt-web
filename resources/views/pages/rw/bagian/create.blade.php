@extends('layouts.default')
@push('page-title')
    RW - Bagian - Create
@endpush
@push('custom-style')
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>
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
    @if($errors->any())
        <div class="alert alert-dismissible fade show alert-danger" role="alert">
            {{ implode('', $errors->all(':message')) }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <form id="form" method="POST" action="{{route('rw.bagian.store')}}">
        @csrf
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card card-default">
                    <div class="card-header-border-bottom card-header d-flex justify-content-between">
                        <h2>Identitas RT</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <label>Nama RT</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">RT </span>
                                </div>
                                <input type="text" name="nama_rt" class="form-control" placeholder="Masukan Nama RT"
                                       id="inputGroupRT" required value="{{old('nama_rt')}}">
                            </div>
                            <p style="font-size: 90%">contoh. 001</p>
                            <div class="valid-feedback">
                                Bagus! nama RT belum pernah dibuat
                            </div>
                            <div class="invalid-feedback">
                                Maaf, nama RT sudah pernah dibuat
                            </div>
                        </div>
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
                        <div class="row">
                            <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                                <label>Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama"
                                       placeholder="Masukan Nama Lengkap" required value="{{old('nama')}}">
                            </div>
                            <div class="w-100"></div>
                            <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                                <label>NIK (Nomor Induk Penduduk)</label>
                                <input type="text" class="form-control" name="nik" id="inputNIK"
                                       placeholder="Masukan NIK" required value="{{old('nik')}}">
                                <div class="valid-feedback">
                                    Bagus! NIK tersedia
                                </div>
                                <div class="invalid-feedback">
                                    Maaf, sudah ada warga dengan NIK sama
                                </div>
                            </div>
                            <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                                <label>No. KK</label>
                                <input type="text" class="form-control" name="no_kk" id="inputNoKK"
                                       placeholder="Masukan Nomor KK" required value="{{old('no_kk')}}">
                                <div class="valid-feedback">

                                </div>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="form-row col-lg-4 col-md-4 col-sm-12 mb-4">
                                <label>Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" id="inputTglLahir"
                                       placeholder="Masukan Tanggal Lahir" required value="{{old('tgl_lahir')}}">
                            </div>
                            <div class="w-100"></div>
                            <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                                <label>Jenis Kelamin</label>
                                <div class="w-100 mb-2"></div>
                                <ul class="list-unstyled list-inline">
                                    <li class="d-inline-block mr-3">
                                        <label class="control control-radio">Laki Laki
                                            <input type="radio" name="jkel" checked="checked" value="L"/>
                                            <div class="control-indicator"></div>
                                        </label>
                                    </li>
                                    <li class="d-inline-block mr-3">
                                        <label class="control control-radio">Perempuan
                                            <input type="radio" name="jkel" value="P"/>
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
                                            <input type="radio" name="status_kawin" checked="checked" value="Belum"/>
                                            <div class="control-indicator"></div>
                                        </label>
                                    </li>
                                    <li class="d-inline-block mr-3">
                                        <label class="control control-radio">Sudah
                                            <input type="radio" name="status_kawin" value="Sudah"/>
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
                                <select class="form-control" name="pendidikan">
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
                                            <input type="radio" name="kewarganegaraan" checked="checked" value="WNI"/>
                                            <div class="control-indicator"></div>
                                        </label>
                                    </li>
                                    <li class="d-inline-block mr-3">
                                        <label class="control control-radio">WNA
                                            <input type="radio" name="kewarganegaraan" value="WNA"/>
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
                                            <input type="radio" name="kedudukan_keluarga" checked="checked"
                                                   value="Kepala"/>
                                            <div class="control-indicator"></div>
                                        </label>
                                    </li>
                                    <li class="d-inline-block mr-3">
                                        <label class="control control-radio">Anggota Keluarga
                                            <input type="radio" name="kedudukan_keluarga" value="Anggota"/>
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
                                    <select id="provinsi-ktp" class="form-control select2-prov">
                                    </select>
                                    <input type="hidden" name="prov_ktp">
                                </div>
                            </div>
                            <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                                <label>Kota / Kabupaten</label>
                                <div class="w-100"></div>
                                <div class="select2-wrapper w-100">
                                    <select id="kota-ktp" class="form-control select2-kot">
                                    </select>
                                    <input type="hidden" name="kota_ktp">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                                <label>Kecamatan</label>
                                <div class="w-100"></div>
                                <div class="select2-wrapper w-100">
                                    <select id="kec-ktp" class="form-control select2-kec">
                                    </select>
                                    <input type="hidden" name="kec_ktp">
                                </div>
                            </div>
                            <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                                <label>Kelurahan / Desa</label>
                                <div class="w-100"></div>
                                <div class="select2-wrapper w-100">
                                    <select id="kel-ktp" class="form-control select2-kel">
                                    </select>
                                    <input type="hidden" name="kel_ktp">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                                <label>Alamat Jalan</label>
                                <textarea class="form-control mb-2" rows="2" placeholder="Masukan Alamat"
                                          name="alamat_ktp"></textarea>
                                <p style="font-size: 90%">Tidak perlu menyertakan Provinsi, Kota/Kab, Kecamatan,
                                    Kelurahan/Desa</p>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-12">
                                <label class="control outlined control-checkbox checkbox-primary">Apakah alamat KTP sama
                                    dengan alamat tinggal ?
                                    <input id="alamat-sama" name="alamat_sama" type="checkbox"/>
                                    <div class="control-indicator"></div>
                                </label>
                            </div>


                            <div class="w-100 mb-4 tinggal">
                                <hr class="my-4">
                                <h5 class="">Alamat Tinggal</h5>
                            </div>
                            <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4 tinggal">
                                <label>Provinsi</label>
                                <div class="w-100"></div>
                                <div class="select2-wrapper w-100">
                                    <select id="provinsi-tinggal" class="form-control select2-prov">
                                    </select>
                                    <input type="hidden" name="prov_tinggal">
                                </div>
                            </div>
                            <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4 tinggal">
                                <label>Kota / Kabupaten</label>
                                <div class="w-100"></div>
                                <div class="select2-wrapper w-100">
                                    <select id="kota-tinggal" class="form-control select2-kot">
                                    </select>
                                    <input type="hidden" name="kota_tinggal">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4 tinggal">
                                <label>Kecamatan</label>
                                <div class="w-100"></div>
                                <div class="select2-wrapper w-100">
                                    <select id="kec-tinggal" class="form-control select2-kec">
                                    </select>
                                    <input type="hidden" name="kec_tinggal">
                                </div>
                            </div>
                            <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4 tinggal">
                                <label>Kelurahan / Desa</label>
                                <div class="w-100"></div>
                                <div class="select2-wrapper w-100">
                                    <select id="kel-tinggal" class="form-control select2-kel">
                                    </select>
                                    <input type="hidden" name="kel_tinggal">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4 tinggal">
                                <label>Alamat Jalan</label>
                                <textarea class="form-control mb-2" rows="2" placeholder="Masukan Alamat"
                                          name="alamat_tinggal"></textarea>
                                <p style="font-size: 90%">Tidak perlu menyertakan Provinsi, Kota/Kab, Kecamatan,
                                    Kelurahan/Desa</p>
                            </div>
                            <div class="w-100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Tambah Data</button>
    </form>
@endsection
@push('custom-script')
    <script src="{{asset('assets/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jquery-mask-input/jquery.inputmask.min.js')}}"></script>
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#inputGroupRT').inputmask({
                mask: '999',
                placeholder: '000',
            });

            $('#inputNIK').inputmask({
                mask: '999999-999999-9999',
            });

            $('#inputNoKK').inputmask({
                mask: '999999-999999-9999',
            });

            $(".select2-prov").select2({
                theme: "bootstrap",
                placeholder: "Pilih Provinsi",
                maximumSelectionSize: 6,
            });

            $(".select2-kot").select2({
                theme: "bootstrap",
                placeholder: "Pilih Kota / Kab",
                maximumSelectionSize: 6,
            });

            $(".select2-kec").select2({
                theme: "bootstrap",
                placeholder: "Pilih Kecamatan",
                maximumSelectionSize: 6,
            });

            $(".select2-kel").select2({
                theme: "bootstrap",
                placeholder: "Pilih Kelurahan / Desa",
                maximumSelectionSize: 6,
            });

            $('#alamat-sama').change(function () {
                if ($(this).is(":checked")) {
                    $('.tinggal').addClass('d-none');
                } else {
                    $('.tinggal').removeClass('d-none');
                }
            });

            /**
             * Get Data Daerah Indonesia
             */
            let alamatKtp = {
                idProvinsi: '',
                idKota: '',
                idKec: '',
                idKel: '',
                alamat: '',
            };

            $.ajax({
                type: 'GET',
                url: 'https://dev.farizdotid.com/api/daerahindonesia/provinsi',
                success: function (data) {
                    $('#provinsi-ktp').empty();
                    data = data.provinsi;
                    for (let i = 0; i < data.length; i++) {
                        $('#provinsi-ktp').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                    }
                }
            });

            $('#provinsi-ktp').change(function () {
                alamatKtp.idProvinsi = $(this).find(":selected").val();
                $('input[name ="prov_ktp"]').val($(this).find(":selected").text());
                $.ajax({
                    type: 'GET',
                    url: 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=' + alamatKtp.idProvinsi,
                    success: function (data) {
                        $('#kota-ktp').empty();
                        data = data.kota_kabupaten;
                        for (let i = 0; i < data.length; i++) {
                            $('#kota-ktp').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                        }
                    }
                });
            });

            $('#kota-ktp').change(function () {
                alamatKtp.idKota = $(this).find(":selected").val();
                $('input[name ="kota_ktp"]').val($(this).find(":selected").text());
                $.ajax({
                    type: 'GET',
                    url: 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=' + alamatKtp.idKota,
                    success: function (data) {
                        $('#kec-ktp').empty();
                        data = data.kecamatan;
                        for (let i = 0; i < data.length; i++) {
                            $('#kec-ktp').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                        }
                    }
                });
            });

            $('#kec-ktp').change(function () {
                alamatKtp.idKec = $(this).find(":selected").val();
                $('input[name ="kec_ktp"]').val($(this).find(":selected").text());
                $.ajax({
                    type: 'GET',
                    url: 'https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=' + alamatKtp.idKec,
                    success: function (data) {
                        $('#kel-ktp').empty();
                        data = data.kelurahan;
                        for (let i = 0; i < data.length; i++) {
                            $('#kel-ktp').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                        }
                    }
                });
            });

            $('#kel-ktp').change(function () {
                $('input[name ="kel_ktp"]').val($(this).find(":selected").text());
            });


            let alamatTinggal = {
                idProvinsi: '',
                idKota: '',
                idKec: '',
                idKel: '',
                alamat: '',
            };

            $.ajax({
                type: 'GET',
                url: 'https://dev.farizdotid.com/api/daerahindonesia/provinsi',
                success: function (data) {
                    $('#provinsi-tinggal').empty();
                    data = data.provinsi;
                    for (let i = 0; i < data.length; i++) {
                        $('#provinsi-tinggal').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                    }
                }
            });

            $('#provinsi-tinggal').change(function () {
                alamatTinggal.idProvinsi = $(this).find(":selected").val();
                $('input[name ="prov_tinggal"]').val($(this).find(":selected").text());
                $.ajax({
                    type: 'GET',
                    url: 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=' + alamatTinggal.idProvinsi,
                    success: function (data) {
                        $('#kota-tinggal').empty();
                        data = data.kota_kabupaten;
                        for (let i = 0; i < data.length; i++) {
                            $('#kota-tinggal').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                        }
                    }
                });
            });

            $('#kota-tinggal').change(function () {
                alamatTinggal.idKota = $(this).find(":selected").val();
                $('input[name ="kota_tinggal"]').val($(this).find(":selected").text());
                $.ajax({
                    type: 'GET',
                    url: 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=' + alamatTinggal.idKota,
                    success: function (data) {
                        $('#kec-tinggal').empty();
                        data = data.kecamatan;
                        for (let i = 0; i < data.length; i++) {
                            $('#kec-tinggal').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                        }
                    }
                });
            });

            $('#kec-tinggal').change(function () {
                alamatTinggal.idKec = $(this).find(":selected").val();
                $('input[name ="kec_tinggal"]').val($(this).find(":selected").text());
                $.ajax({
                    type: 'GET',
                    url: 'https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=' + alamatTinggal.idKec,
                    success: function (data) {
                        $('#kel-tinggal').empty();
                        data = data.kelurahan;
                        for (let i = 0; i < data.length; i++) {
                            $('#kel-tinggal').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                        }
                    }
                });
            });

            $('#kel-tinggal').change(function () {
                $('input[name ="kel_tinggal"]').val($(this).find(":selected").text());
            });

        });


    </script>
@endpush
