@extends('layouts.default')
@push('page-title')
RT - Detail Register
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Detail Register</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/register">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="/rt/register">
                    Data Register
                </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Detail Register</li>
        </ol>
    </nav>
</div>

<!-- Register Keluar -->
@if($jenis == 'keluar')
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-email-open font-size-20"></i>
                </div>
                <h2>Identitas Register</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Jenis Surat Register</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">Keluar</h5>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                        <label for="">Nomor Surat</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$register->no_surat}}</h5>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                        <label for="">Nomor Agenda</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$register->no_agenda}}</h5>
                    </div>
                </div>
                <a href="/rt/register/{{$register->id}}/edit?jenis=keluar" class="mr-2 btn btn-warning btn-pill text-white">
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
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                    <i class="mdi mdi-information font-size-20"></i>
                </div>
                <h2>Informasi Surat Register</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Tanggal Kirim</label>
                        <div class="w-100"></div>
                        @php
                        $date = new DateTime($register->tgl_kirim);
                        $result = $date->format('d M Y');
                        @endphp
                        <h5 class="text-dark">{{$result}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Tanggal Terima</label>
                        <div class="w-100"></div>
                        @php
                        $date = new DateTime($register->tgl_terima);
                        $result = $date->format('d M Y');
                        @endphp
                        <h5 class="text-dark">{{$result}}</h5>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Penerima Surat</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$register->penerima_surat}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Perihal</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$register->perihal}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($jenis == 'masuk')
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-email-open font-size-20"></i>
                </div>
                <h2>Identitas Register</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Jenis Surat Register</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">Masuk</h5>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                        <label for="">Nomor Surat</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$register->no_surat}}</h5>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                        <label for="">Nomor Agenda</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$register->no_agenda}}</h5>
                    </div>
                </div>
                <a href="/rt/register/{{$register->id}}/edit?jenis=masuk" class="mr-2 btn btn-warning btn-pill text-white">
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
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                    <i class="mdi mdi-information font-size-20"></i>
                </div>
                <h2>Informasi Surat Register</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Tanggal Surat</label>
                        <div class="w-100"></div>
                        @php
                        $date = new DateTime($register->tgl_surat);
                        $result = $date->format('d M Y');
                        @endphp
                        <h5 class="text-dark">{{$result}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Tanggal Terima</label>
                        <div class="w-100"></div>
                        @php
                        $date = new DateTime($register->tgl_terima);
                        $result = $date->format('d M Y');
                        @endphp
                        <h5 class="text-dark">{{$result}}</h5>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Asal Surat</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$register->asal_surat}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Perihal</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$register->perihal}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('rt.register.destroy', $register->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <input name="jenis" type="hidden" value="{{$jenis}}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>
                        Yakin mengahapus data register {{$jenis}} {{$register->no_surat}} ?
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