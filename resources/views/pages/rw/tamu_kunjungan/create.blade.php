@extends('layouts.default')
@push('page-title')
RW - Bagian
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Tambah Tamu Kunjungan</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rw/bagian">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Tamu Kunjungan
            </li>
            <li class="breadcrumb-item" aria-current="page">Tambah Tamu Kunjungan</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default" id="tamu_umum">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Identitas Tamu Kunjungan</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-row mb-4">
                        <!-- Nama Tamu -->
                        <label>Nama Tamu</label>
                        <input type="text" class="form-control" name="nama_tamu" placeholder="Masukan Nama Tamu">
                        <small class="form-text text-muted"><b>Contoh nama Tamu:</b> Udin</small>
                        <div class="valid-feedback">
                            -
                        </div>
                        <div class="invalid-feedback">
                            -
                        </div>
                    </div>

                    <div class="form-group row">
                        <!-- Periode Tamu -->
                        <label>Periode Tamu</label>
                        <input type="text" class="form-control" name="periode_tamu" placeholder="Masukan Periode Tamu">
                        <div class="valid-feedback">
                            -
                        </div>
                        <div class="invalid-feedback">
                            -
                        </div>
                    </div>

                    <div class="form-group row">
                        <!-- Periode Tamu -->
                        <label>Tujuan Tamu</label>
                        <input type="text" class="form-control" name="tujuan_tamu" placeholder="Masukan Tujuan Tamu">
                        <div class="valid-feedback">
                            -
                        </div>
                        <div class="invalid-feedback">
                            -
                        </div>
                    </div>

                    <div class="form-group row">
                        <!-- Periode Tamu -->
                        <label>Tanggal kunjungan tamu</label>
                        <input type="date" class="form-control" name="tanggal_tamu">
                        <div class="valid-feedback">
                            -
                        </div>
                        <div class="invalid-feedback">
                            -
                        </div>
                    </div>

                    <div class="form-group row">
                        <label>Jenis Tamu</label>
                        <div class="w-100"></div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio_jenistamu" id="jenistamu_umum" value="Umum" checked>
                            <label class="form-check-label" for="jenistamu_umum">
                                Umum
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio_jenistamu" id="jenistamu_khusus" value="Khusus">
                            <label class="form-check-label" for="jenistamu_khusus">
                                Khusus
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="radio_jenistamu" id="jenistamu_dinas" value="Dinas">
                            <label class="form-check-label" for="jenistamu_dinas">
                                Dinas
                            </label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="w-100"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default d-none" id="tamu_khusus">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Tamu Khusus</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group row">
                        <!-- Jabatan Tamu -->
                        <label>Jabatan Tamu</label>
                        <input type="text" class="form-control" name="jabatan_tamu" placeholder="Masukan Jabatan Tamu">
                        <div class="valid-feedback">
                            -
                        </div>
                        <div class="invalid-feedback">
                            -
                        </div>
                    </div>

                    <div class="form-group row">
                        <!-- Instansi Tamu -->
                        <label>Instansi Tamu</label>
                        <input type="text" class="form-control" name="instansi_tamu" placeholder="Masukan Instansi Tamu">
                        <div class="valid-feedback">
                            -
                        </div>
                        <div class="invalid-feedback">
                            -
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="w-100"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default d-none" id="tamu_dinas">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Tamu Dinas</h2>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group row">
                        <!-- NIP Tamu -->
                        <label>NIP Tamu</label>
                        <input type="text" class="form-control" name="nip_tamu" placeholder="Masukan NIP Tamu">
                        <div class="valid-feedback">
                            -
                        </div>
                        <div class="invalid-feedback">
                            -
                        </div>
                    </div>

                    <div class="form-group row">
                        <!-- Nomor Surat Tugas Tamu -->
                        <label>Nomor Surat Tugas Tamu</label>
                        <input type="text" class="form-control" name="no_surat_tugas_tamu" placeholder="Masukan Nomor Surat Tugas Tamu">
                        <div class="valid-feedback">
                            -
                        </div>
                        <div class="invalid-feedback">
                            -
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <th>No</th>
                                        <th>Nama Bagian Rw</th>
                                        <th>Nama Lengkap</th>
                                        <th>Jenis Tamu</th>
                                        <th>Periode</th>
                                        <th>Tujuan</th>
                                        <th>Tanggal</th>
                                        <th>Jabatan</th>
                                        <th>Instansi</th>
                                        <th>NIP</th>
                                        <th>No Surat Tugas</th> -->


@endsection
@push('custom-script')
<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
<script>
    $('#jenistamu_umum').change(function() {
    });

    $('#jenistamu_khusus').change(function() {
        if ($(this).attr('checked', true)) {
            $('#tamu_khusus').removeClass('d-none');
            $('#tamu_dinas').addClass('d-none');
        }
    });


    $('#jenistamu_dinas').change(function() {
    });
</script>
@endpush