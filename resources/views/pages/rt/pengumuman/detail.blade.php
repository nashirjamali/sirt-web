@extends('layouts.default')
@push('page-title')
RT - Detail Pengumuman
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Detail Pengumuman</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/pengumuman">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Pengumuman
            </li>
            <li class="breadcrumb-item" aria-current="page">Detail Pengumuman</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-account-box-outline font-size-20"></i>
                </div>
                <h2>Informasi Penguman</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Judul</label>
                        <div class="w-100"></div>

                        <h5 class="text-dark">{{$pengumuman->judul_pengumuman}}</h5>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Tanggal Terbit</label>
                        <div class="w-100"></div>
                        @php
                        $date = new DateTime($pengumuman->tgl_pengumuman);
                        $result = $date->format('d M Y');
                        @endphp
                        <h5 class="text-dark">{{$result}}</h5>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Jumlah Lihat</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$pengumuman->pengumumanWarga->count()}} Warga</h5>
                    </div>
                </div>
                <a href="/rt/pengumuman/{{$pengumuman->id}}/edit" class="mr-2 btn btn-warning btn-pill text-white">
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
    <div class="w-100"></div>
    <div class="col-md-12 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                    <i class="mdi mdi-card-text-outline font-size-20"></i>
                </div>
                <h2>Isi Pengumuman</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-md-12 col-sm-12 mb-4">
                        <p class="text-dark">{{$pengumuman->isi_pengumuman}}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('rt.pengumuman.destroy', $pengumuman->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Pengumuman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row mb-4">
                        Yakin menghapus pengumuman?
                    </div>
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