@extends('layouts.default')
@push('page-title')
RT - Detail Rapat
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Detail Register</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/rapat">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="/rt/rapat">
                    Data Rapat
                </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Detail Rapat</li>
        </ol>
    </nav>
</div>

<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-email-open font-size-20"></i>
                </div>
                <h2>Informasi Rapat</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Tanggal</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$rapat->tanggal_rapat}}</h5>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                        <label for="">Waktu</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$rapat->waktu_rapat}}</h5>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                        <label for="">Tempat</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$rapat->tempat_rapat}}</h5>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
                        <label for="">Pemimpin Rapat</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$rapat->pemimpin->nama}}</h5>
                    </div>
                </div>
                <a href="/rt/rapat/{{$rapat->id}}/edit" class="mr-2 btn btn-warning btn-pill text-white">
                    <i class="mdi mdi-circle-edit-outline"></i>
                    Edit
                </a>
                <button class="btn btn-danger btn-pill text-white" data-toggle="modal" data-target="#deleteModal">
                    <i class="mdi mdi-trash-can"></i>
                    Hapus
                </button>
                <a href="/rt/notulen/create?id_rapat={{$rapat->id}}" class="mr-2 btn btn-primary btn-pill text-white">
                    <i class="mdi mdi-circle-edit-outline"></i>
                    Buat Notulen
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-12 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-email-open font-size-20"></i>
                </div>
                <h2>Notulen Rapat</h2>
            </div>
            <div class="card-body">
                @if($notulen)
                {!! html_entity_decode($notulen->isi_notulen) !!}
                @endif
            </div>
        </div>
    </div>

</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('rt.rapat.destroy', $rapat->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Rapat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>
                        Yakin mengahapus data rapat ?
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