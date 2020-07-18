@extends('layouts.default')
@push('page-title')
RW - Detail Penduduk
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Detail Warga</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rw/penduduk">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Warga
            </li>
            <li class="breadcrumb-item" aria-current="page">Detail Warga</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-account font-size-20"></i>
                </div>
                <h2>Identitas Warga</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Nama Lengkap</label>
                        <div class="w-100"></div>
                        <h3 class="text-dark">{{$warga->nama}} ({{$warga->jkel}})</h3>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Nomor Induk Penduduk</label>
                        <div class="w-100"></div>
                        <h3 class="text-dark">{{$warga->nik}}</h3>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Nomor Kartu Keluarga</label>
                        <div class="w-100"></div>
                        <h3 class="text-dark">{{$warga->no_kk}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                    <i class="mdi mdi-account-card-details font-size-20"></i>
                </div>
                <h2>Informasi Warga</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Jenis Kelamin</label>
                        <div class="w-100"></div>
                        @if($warga->jkel == "P")
                        <h5 class="text-dark">Perempuan</h5>
                        @else
                        <h5 class="text-dark">Laki-Laki</h5>
                        @endif
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Tanggal Lahir</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$warga->tgl_lahir}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Agama</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$warga->agama}}</h5>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Pendidikan</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$warga->pendidikan}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Pekerjaan</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$warga->pekerjaan}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-info text-white">
                    <i class="mdi mdi-home-map-marker font-size-20"></i>
                </div>
                <h2>Alamat Warga</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Alamat KTP</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$warga->alamat_ktp}}</h5>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Alamat Tinggal</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$warga->alamat}}</h5>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</div>
@endsection