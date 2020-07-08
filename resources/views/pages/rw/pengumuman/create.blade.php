@extends('layouts.default')
@push('page-title')
RW - Pengumuman
@endpush
@push('custom-style')
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}">
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Tambah Peengumuman</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rw/bagian">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Pengumuman
            </li>
            <li class="breadcrumb-item" aria-current="page">Tambah Pengumuman</li>
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
<form id="form" method="POST" action="{{route('rt.penduduk.store')}}">
    @csrf
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card card-default">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Input Data Pengumuman</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Id Bagian</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap" required value="{{old('nama')}}">
                        </div>

                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Isi Pengumuman</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Masukkan isi pengumuman..."></textarea>
                        </div>

                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-4 col-sm-12 mb-4">
                            <label>Tanggal Pengumuman</label>
                            <input type="date" class="form-control" name="tgl_lahir" id="inputTglLahir" placeholder="Masukan Tanggal Lahir" required value="{{old('tgl_lahir')}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg float-right">Tambah Data</button>
                </div>
            </div>
        </div>
    </div>    
</form>
@endsection
@push('custom-script')
<script src="{{asset('assets/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-mask-input/jquery.inputmask.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- <script>
    $(document).ready(function() {
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

        $('#alamat-sama').change(function() {
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
            success: function(data) {
                $('#provinsi-ktp').empty();
                data = data.provinsi;
                for (let i = 0; i < data.length; i++) {
                    $('#provinsi-ktp').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                }
            }
        });

        $('#provinsi-ktp').change(function() {
            alamatKtp.idProvinsi = $(this).find(":selected").val();
            $('input[name ="prov_ktp"]').val($(this).find(":selected").text());
            $.ajax({
                type: 'GET',
                url: 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=' + alamatKtp.idProvinsi,
                success: function(data) {
                    $('#kota-ktp').empty();
                    data = data.kota_kabupaten;
                    for (let i = 0; i < data.length; i++) {
                        $('#kota-ktp').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                    }
                }
            });
        });

        $('#kota-ktp').change(function() {
            alamatKtp.idKota = $(this).find(":selected").val();
            $('input[name ="kota_ktp"]').val($(this).find(":selected").text());
            $.ajax({
                type: 'GET',
                url: 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=' + alamatKtp.idKota,
                success: function(data) {
                    $('#kec-ktp').empty();
                    data = data.kecamatan;
                    for (let i = 0; i < data.length; i++) {
                        $('#kec-ktp').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                    }
                }
            });
        });

        $('#kec-ktp').change(function() {
            alamatKtp.idKec = $(this).find(":selected").val();
            $('input[name ="kec_ktp"]').val($(this).find(":selected").text());
            $.ajax({
                type: 'GET',
                url: 'https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=' + alamatKtp.idKec,
                success: function(data) {
                    $('#kel-ktp').empty();
                    data = data.kelurahan;
                    for (let i = 0; i < data.length; i++) {
                        $('#kel-ktp').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                    }
                }
            });
        });

        $('#kel-ktp').change(function() {
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
            success: function(data) {
                $('#provinsi-tinggal').empty();
                data = data.provinsi;
                for (let i = 0; i < data.length; i++) {
                    $('#provinsi-tinggal').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                }
            }
        });

        $('#provinsi-tinggal').change(function() {
            alamatTinggal.idProvinsi = $(this).find(":selected").val();
            $('input[name ="prov_tinggal"]').val($(this).find(":selected").text());
            $.ajax({
                type: 'GET',
                url: 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=' + alamatTinggal.idProvinsi,
                success: function(data) {
                    $('#kota-tinggal').empty();
                    data = data.kota_kabupaten;
                    for (let i = 0; i < data.length; i++) {
                        $('#kota-tinggal').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                    }
                }
            });
        });

        $('#kota-tinggal').change(function() {
            alamatTinggal.idKota = $(this).find(":selected").val();
            $('input[name ="kota_tinggal"]').val($(this).find(":selected").text());
            $.ajax({
                type: 'GET',
                url: 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota=' + alamatTinggal.idKota,
                success: function(data) {
                    $('#kec-tinggal').empty();
                    data = data.kecamatan;
                    for (let i = 0; i < data.length; i++) {
                        $('#kec-tinggal').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                    }
                }
            });
        });

        $('#kec-tinggal').change(function() {
            alamatTinggal.idKec = $(this).find(":selected").val();
            $('input[name ="kec_tinggal"]').val($(this).find(":selected").text());
            $.ajax({
                type: 'GET',
                url: 'https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan=' + alamatTinggal.idKec,
                success: function(data) {
                    $('#kel-tinggal').empty();
                    data = data.kelurahan;
                    for (let i = 0; i < data.length; i++) {
                        $('#kel-tinggal').append('<option value=' + data[i].id + '>' + data[i].nama + '</option>');
                    }
                }
            });
        });

        $('#kel-tinggal').change(function() {
            $('input[name ="kel_tinggal"]').val($(this).find(":selected").text());
        });

    });
</script> -->
@endpush