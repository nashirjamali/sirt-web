@extends('layouts.default')
@push('page-title')
RT - Penduduk Sementara
@endpush
@push('custom-style')
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}">
<link href="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/data-tables/responsive.datatables.min.css')}}" rel="stylesheet" />
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Tambah Penduduk Sementara</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/penduduk">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="/rt/penduduk">
                    Data Penduduk
                </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Tambah Penduduk Sementara</li>
        </ol>
    </nav>
</div>
<form action="{{route('rt.penduduk-sementara.store')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Pilih Warga</h2>
                </div>
                <div class="card-body">
                    <div class="mb-5">
                        <p class="h5 text-info"> * Jika penduduk belum ada di data warga silahkan tambah data warga terlebih dahulu, <a href="/rt/penduduk/create">Klik Disini</a></span></p>
                    </div>
                    <div class="responsive-data-table">
                        <table class="table dt-responsive nowrap data-table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Pilih</th>
                                    <th>Nama Lengkap</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th>NIK</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($warga as $val)
                                <tr>
                                    <td>
                                        <label class="control outlined control-checkbox checkbox-primary">
                                            <input name="id_warga[]" type="checkbox" value="{{$val->id}}" />
                                            <div class="control-indicator"></div>
                                        </label>
                                    </td>
                                    <td>{{$val->nama}}</td>
                                    <td>{{$val->jkel}}</td>
                                    <td>{{$val->alamat}}</td>
                                    <td>{{$val->nik}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Input Penduduk Sementara</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Pemilik Rumah</label>
                            <div class="w-100"></div>
                            <div class="select2-wrapper w-100">
                                <select id="pemilik" name="id_pemilik" class="form-control select2-pemilik">
                                    @foreach($daftar_pemilik as $val)
                                    <option value="{{$val->id}}">{{$val->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Status Tinggal</label>
                            <select class="form-control" name="status">
                                <option value="Kost">Kost</option>
                                <option value="Sewa">Sewa</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Tambah Data Mutasi</button>
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
        $('.data-table').DataTable();
        $(".select2-pemilik").select2({
            theme: "bootstrap",
            placeholder: "Pilih pemilik rumah",
            maximumSelectionSize: 6,
        });
    });
</script>
@endpush