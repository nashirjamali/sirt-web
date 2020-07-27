@extends('layouts.default')
@push('page-title')
RW - Detail Bagian
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Detail Bagian</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rw/bagian">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Bagian
            </li>
            <li class="breadcrumb-item" aria-current="page">Detail Bagian</li>
        </ol>
    </nav>
</div>
<div class="row">

    <div class="col-6">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-archive font-size-20"></i>
                </div>
                <h2>Detail Bagian</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Nama Bagian</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$bagian->nama_bagian}}</h5>
                    </div>
                </div>
                <a href="/rw/bagian/{{$bagian->id}}/edit" class="mr-2 btn btn-warning btn-pill text-white">
                    <i class="mdi mdi-circle-edit-outline"></i>
                    Edit
                </a>
                <!-- <button class="btn btn-danger btn-pill text-white" data-toggle="modal" data-target="#deleteModal">
                    <i class="mdi mdi-trash-can"></i>
                    Hapus
                </button> -->
                <a class="btn btn-primary btn-pill text-white" href="/rw/pengurus/create?id_bagian={{$bagian->id}}">
                    <i class="mdi mdi-add"></i>
                    Tambah Pengurus
                </a>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-archive font-size-20"></i>
                </div>
                <h2>Daftar Pengurus</h2>
            </div>
            <div class="card-body">
                <div class="responsive-data-table">
                    <table class="table dt-responsive nowrap data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($pengurus as $val)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{$val->warga->nama}}</td>
                                <td>{{$val->warga->alamat}}</td>
                                <td>{{$val->warga->jkel}}</td>
                                <td>
                                    <button class="btn btn-danger btn-pill text-white" data-toggle="modal" data-target="#deleteModal">
                                        <i class="mdi mdi-trash-can"></i>
                                        Hapus
                                    </button>
                                </td>
                            </tr>
                            @php $no++; @endphp
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Delete Modal -->
@foreach($pengurus as $val)
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('rw.pengurus.destroy', $val->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Pengurus</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>
                        Yakin menghapus pengurus ini ?
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
@endforeach

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
    });
</script>
@endpush