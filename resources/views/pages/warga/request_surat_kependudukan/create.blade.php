@extends('layouts.default')
@push('page-title')
Warga - Request - Create
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Tambah Request</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/warga/request">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Request
            </li>
            <li class="breadcrumb-item" aria-current="page">Tambah Request Surat Kependudukan</li>
        </ol>
    </nav>
</div>
<form id="form" method="POST">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-default" id="request_card">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Request Surat Kependudukan</h2>
                </div>
                <div class="card-body row">
                    <div class="form-row mb-4">
                        <label>Jenis Surat Kependudukan</label>
                        <select class="form-control" name="jenis_surat_request">
                            <option value="KTP">KTP</option>
                            <option value="Kartu Keluarga">Kartu Keluarga</option>
                        </select>
                    </div>
                    <div class="w-100"></div>
                    <div class="form-row mb-4">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" name="keterangan_request" placeholder="Masukan Keterangan">
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
   
</script>
@endpush