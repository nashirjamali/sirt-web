@extends('layouts.default')
@push('page-title')
RT - Register - Create
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Tambah Register</h1>
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
            <li class="breadcrumb-item" aria-current="page">Tambah </li>
        </ol>
    </nav>
</div>

<form id="form" method="POST" action="{{route('rt.register.store')}}">
    @csrf
    <div class="row">
        <div class="col-12">
            @if($errors->any())
            <div class="alert alert-dismissible fade show alert-danger" role="alert">
                {{ implode('', $errors->all(':message')) }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
        <div class="w-100"></div>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="card card-default" id="jenis_inv">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Jenis Register</h2>
                </div>
                <div class="card-body">
                    <div class="form-row mb-4">
                        <div class="form-check form-check-inline">
                            <label id="keluar_register_label" class="control control-radio checkbox-primary">Keluar
                                <input type="radio" name="jenis_register" id="keluar_register" value="Keluar" checked>
                                <div class="control-indicator"></div>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label id="masuk_register_label" class="control control-radio checkbox-primary outlined">Masuk
                                <input type="radio" name="jenis_register" id="masuk_register" value="Masuk">
                                <div class="control-indicator"></div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100"></div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-default" id="reg_keluar">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Register Keluar</h2>
                </div>
                <div class="card-body">
                    <div class="form-row mb-4">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" name="no_surat_keluar" placeholder="Masukan No Surat">
                    </div>

                    <div class="form-row mb-4">
                        <label>Nomor Agenda</label>
                        <input type="text" class="form-control" name="no_agenda_keluar" placeholder="Masukan No Agenda">
                    </div>

                    <div class="form-row mb-4">
                        <label>Tanggal Kirim</label>
                        <input type="date" class="form-control" name="tgl_kirim">
                    </div>

                    <div class="form-row mb-4">
                        <label>Tanggal Terima</label>
                        <input type="date" class="form-control" name="tgl_terima_keluar">
                    </div>

                    <div class="form-row mb-4">
                        <label>Penerima Surat</label>
                        <input type="text" class="form-control" name="penerima_surat_keluar" placeholder="Masukan Penerima Surat">
                    </div>

                    <div class="form-row mb-4">
                        <label>Perihal</label>
                        <input type="text" class="form-control" name="perihal_keluar" placeholder="Masukan Perihal">
                    </div>

                    <div class="form-row mb-4">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" name="keterangan_keluar" placeholder="Masukan Keterangan">
                    </div>

                </div>
            </div>
        </div>

        <div class="w-100"></div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-default" id="reg_masuk">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Register Masuk</h2>
                </div>
                <div class="card-body">
                    <div class="form-row mb-4">
                        <label>Nomor Surat</label>
                        <input type="text" class="form-control" name="no_surat_masuk" placeholder="Masukan No Surat">
                    </div>

                    <div class="form-row mb-4">
                        <label>Nomor Agenda</label>
                        <input type="text" class="form-control" name="no_agenda_masuk" placeholder="Masukan No Agenda">
                    </div>

                    <div class="form-row mb-4">
                        <label>Tanggal Surat</label>
                        <input type="date" class="form-control" name="tgl_surat">
                    </div>

                    <div class="form-row mb-4">
                        <label>Tanggal Terima</label>
                        <input type="date" class="form-control" name="tgl_terima_masuk">
                    </div>

                    <div class="form-row mb-4">
                        <label>Asal Surat</label>
                        <input type="text" class="form-control" name="asal_surat_masuk" placeholder="Masukan Asal Surat">
                    </div>

                    <div class="form-row mb-4">
                        <label>Perihal</label>
                        <input type="text" class="form-control" name="perihal_masuk" placeholder="Masukan Perihal">
                    </div>

                    <div class="form-row mb-4">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" name="keterangan_masuk" placeholder="Masukan Keterangan">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary btn-lg">Tambah Data</button>
</form>

@endsection
@push('custom-script')
<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
<script>
    $('#masuk_register_label').addClass('outlined')
    $('#keluar_register_label').removeClass('outlined')
    $('#keluar_register_card').removeClass('d-none');
    $('#masuk_register_card').addClass('d-none');
    $('#reg_masuk').addClass('d-none');
    $('#reg_keluar').removeClass('d-none');

    $('#keluar_register').change(function() {
        if ($(this).attr('checked', true)) {
            $('#masuk_register_label').addClass('outlined')
            $('#keluar_register_label').removeClass('outlined')
            $('#keluar_register_card').removeClass('d-none');
            $('#masuk_register_card').addClass('d-none');
            $('#reg_masuk').addClass('d-none');
            $('#reg_keluar').removeClass('d-none');
        }
    });

    $('#masuk_register').change(function() {
        if ($(this).attr('checked', true)) {
            $('#keluar_register_label').addClass('outlined')
            $('#masuk_register_label').removeClass('outlined')
            $('#masuk_register_card').removeClass('d-none');
            $('#keluar_register_card').addClass('d-none');
            $('#reg_keluar').addClass('d-none');
            $('#reg_masuk').removeClass('d-none');
        }
    });
</script>
@endpush