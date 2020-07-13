@extends('layouts.default')
@push('page-title')
RT - Request - Detail
@endpush
@section('content')
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
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-account-box-outline font-size-20"></i>
                </div>
                <h2>Identitas Warga</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">NIK</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$request->warga->nik}}</h5>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Nama</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$request->warga->nama}}</h5>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <label for="">Alamat</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$request->warga->alamat}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                    <i class="mdi mdi-information font-size-20"></i>
                </div>
                <h2>Informasi Request</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Tanggal Permintaan</label>
                        <div class="w-100"></div>
                        @php
                        $date = new DateTime($request->created_at);
                        $result = $date->format('d M Y');
                        @endphp
                        <h5 class="text-dark">{{$result}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Tipe Surat</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$request->tipe_surat}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Status</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$request->status_request}}</h5>
                    </div>
                </div>
                <button class="btn btn-primary btn-pill text-white" data-toggle="modal" data-target="#editModal">
                    <i class="mdi mdi-circle-edit-outline"></i>
                    Edit Status
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('rt.request.update', $request->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="PUT">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row mb-4">
                        <label for="">Status</label>
                        <select class="form-control" name="status_request">
                            <option <?php echo $request->status_request == "Selesai" ? 'selected' : ''; ?> value="Selesai">Selesai</option>
                            <option <?php echo $request->status_request == "Diproses" ? 'selected' : ''; ?> value="Diproses">Diproses</option>
                            <option <?php echo $request->status_request == "Ditangguhkan" ? 'selected' : ''; ?> value="Ditangguhkan">Ditangguhkan</option>
                            <option <?php echo $request->status_request == "Dibatalkan" ? 'selected' : ''; ?> value="Dibatalkan">Dibatalkan</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-pill" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-pill">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection