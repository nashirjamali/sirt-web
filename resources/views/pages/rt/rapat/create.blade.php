@extends('layouts.default')
@push('page-title')
RT - Rapat - Create
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Tambah Rapat</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/rapat">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Rapat
            </li>
            <li class="breadcrumb-item" aria-current="page">Tambah Rapat</li>
        </ol>
    </nav>
</div>

<form id="form" method="POST" action="{{route('rt.rapat.store')}}">
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

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-default" id="reg_keluar">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Register Keluar</h2>
                </div>
                <div class="card-body">
                    
                    <div class="form-row mb-4">
                        <label>Pemimpin Rapat</label>
                        <select name="id_pemimpin"  class="form-control">
                            @foreach($user as $val)
                            <option value="{{$val->warga->id}}">{{$val->warga->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-row mb-4">
                        <label>Tanggal</label>
                        <input type="date" class="form-control" name="tgl_rapat">
                    </div>

                    <div class="form-row mb-4">
                        <label>Waktu</label>
                        <input type="text" class="form-control" name="waktu_rapat">
                    </div>

                    <div class="form-row mb-4">
                        <label>Tempat</label>
                        <input type="text" class="form-control" name="tempat_rapat">
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
@endpush