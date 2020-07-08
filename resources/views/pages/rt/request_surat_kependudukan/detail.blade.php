@extends('layouts.default')
@push('page-title')
RT - Request - Detail
@endpush
@section('content')
<style>
    h5.spasi {
        margin-bottom: 5px;
    }
</style>
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Detail Request Surat Kependudukan</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/request">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Request
            </li>
            <li class="breadcrumb-item" aria-current="page">Detail Request</li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Identitas Warga</h2>
            </div>
            <div class="card-body">
                <form>
                    <label>NIK Warga</label>
                    <h5 class="mb-4">NIK</h5>
                    <label>Nama Warga</label>
                    <h5 class="mb-4">Nashir Jamali</h5>
                </form>
            </div>
        </div>
    </div>

    <div class="w-100"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Informasi Request</h2>
            </div>
            <div class="card-body">
                <label>Tipe Surat</label>
                <h5 class="mb-4">KTP</h5>
                <label>Keterangan</label>
                <h5 class="mb-4">-</h5>
            </div>
        </div>
    </div>

    <div class="w-100"></div>
    <div class="col-lg-6 col-md-6 col-sm-12">
        <form id="form" method="POST">
            <div class="card card-default" id="status_request_card">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Status Request</h2>
                </div>
                <div class="card-body row">
                    <div class="form-row mb-4">
                        <label>Pilih Status</label>
                        <select class="form-control" name="status_request">
                            <option value="Done">Done</option>
                            <option value="In progress">In Progress</option>
                            <option value="On hold">On Hold</option>
                            <option value="Canceled">Canceled</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg">Kembali</button>
        </form>
    </div>
</div>
@endsection