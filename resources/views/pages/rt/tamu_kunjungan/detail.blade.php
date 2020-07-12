@extends('layouts.default')
@push('page-title')
RT - Detail Tamu Kunjungan
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Detail Tamu Kunjungan</h1>
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
            <li class="breadcrumb-item" aria-current="page">Detail Tamu Kunjungan</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-account-box-outline font-size-20"></i>
                </div>
                <h2>Informasi Tamu</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Nama Tamu</label>
                        <h5 class="text-dark">{{$tamu->nama_lengkap}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Periode Tamu</label>
                        <h5 class="text-dark">{{$tamu->periode}}</h5>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Tanggal Kunjungan</label>
                        @php
                        $date = new DateTime($tamu->tanggal);
                        $result = $date->format('d M Y');
                        @endphp
                        <h5 class="text-dark">{{$result}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Tujuan</label>
                        <h5 class="text-dark">{{$tamu->tujuan}}</h5>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Jenis</label>
                        <h5 class="text-dark">Tamu {{$tamu->jenis_tamu}}</h5>
                    </div>
                </div>
                <a href="/rt/tamu-kunjungan/{{$tamu->id}}/edit" class="mr-2 btn btn-warning btn-pill text-white">
                    <i class="mdi mdi-circle-edit-outline"></i>
                    Edit
                </a>
                <button class="btn btn-danger btn-pill text-white" data-toggle="modal" data-target="#deleteModal">
                    <i class="mdi mdi-trash-can"></i>
                    Hapus
                </button>
            </div>
        </div>
    </div>
    @if($tamu->jenis_tamu == 'Khusus')
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                    <i class="mdi mdi-account-card-details font-size-20"></i>
                </div>
                <h2>Informasi Tamu Khusus</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Jabatan</label>
                        <h5 class="text-dark">{{$tamu->tamuKhusus->jabatan}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Instansi</label>
                        <h5 class="text-dark">{{$tamu->tamuKhusus->instansi}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @elseif($tamu->jenis_tamu == 'Dinas')
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                    <i class="mdi mdi-account-card-details font-size-20"></i>
                </div>
                <h2>Informasi Tamu Dinas</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Jabatan</label>
                        <h5 class="text-dark">{{$tamu->tamuDinas->jabatan}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Instansi</label>
                        <h5 class="text-dark">{{$tamu->tamuDinas->instansi}}</h5>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">NIP</label>
                        <h5 class="text-dark">{{$tamu->tamuDinas->nip}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Nomor Surat Tugas</label>
                        <h5 class="text-dark">{{$tamu->tamuDinas->no_surat_tugas}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('rt.tamu-kunjungan.destroy', $tamu->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Tamu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>
                        Yakin mengahapus data tamu {{$tamu->nama_lengkap}} ?
                    </h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-pill" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger btn-pill">Ok</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection