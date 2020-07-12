@extends('layouts.default')
@push('page-title')
RT - Edit Tamu Kunjungan
@endpush
@push('custom-style')
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}">
<link href="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/data-tables/responsive.datatables.min.css')}}" rel="stylesheet" />
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Edit Tamu Kunjungan</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/tamu-kunjungan">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="/rt/tamu-kunjungan">
                    Data Tamu Kunjungan
                </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Edit Tamu Kunjungan</li>
        </ol>
    </nav>
</div>
<form action="{{route('rt.tamu-kunjungan.update', $tamu->id)}}" method="post">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Edit Tamu Kunjungan</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Nama Tamu</label>
                            <input type="text" class="form-control" name="nama_tamu" value="{{$tamu->nama_lengkap}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Periode Tamu</label>
                            <input type="text" class="form-control" name="periode_tamu" value="{{$tamu->periode}}">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Tujuan Tamu</label>
                            <input type="text" class="form-control" name="tujuan_tamu" value="{{$tamu->tujuan}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Tanggal Kunjungan Tamu</label>
                            <input type="date" class="form-control" name="tanggal_tamu" value="{{$tamu->tanggal}}">
                        </div>

                        @if($tamu->jenis_tamu == 'Dinas')
                        <div class="w-100 mt-5"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Jabatan Tamu</label>
                            <input type="text" class="form-control" name="jabatan_tamu_dinas" value="{{$tamu->tamuDinas->jabatan}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Instansi Tamu</label>
                            <input type="text" class="form-control" name="instansi_tamu_dinas" value="{{$tamu->tamuDinas->instansi}}">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>NIP Tamu</label>
                            <input type="text" class="form-control" name="nip_tamu" value="{{$tamu->tamuDinas->nip}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Nomor Surat Tugas</label>
                            <input type="text" class="form-control" name="nip_tamu" value="{{$tamu->tamuDinas->no_surat_tugas}}">
                        </div>


                        @elseif($tamu->jenis_tamu == 'Khusus')
                        <div class="w-100 mt-5"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Jabatan Tamu</label>
                            <input type="text" class="form-control" name="jabatan_tamu" value="{{$tamu->tamuKhusus->jabatan}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Instansi Tamu</label>
                            <input type="text" class="form-control" name="instansi_tamu" value="{{$tamu->tamuKhusus->instansi}}">
                        </div>

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Edit Tamu Kunjungan</button>
</form>

@if($errors->any())
<div class="alert alert-dismissible fade show alert-danger" role="alert">
    {{ implode('', $errors->all(':message')) }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@endsection
@push('custom-script')
<script src="{{asset('assets/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-mask-input/jquery.inputmask.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
<script>
    $(document).ready(function() {

    });
</script>
@endpush