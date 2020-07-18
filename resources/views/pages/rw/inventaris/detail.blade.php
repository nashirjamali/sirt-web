@extends('layouts.default')
@push('page-title')
RW - Detail Inventaris
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Detail Inventaris</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rw/inventaris">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Inventaris
            </li>
            <li class="breadcrumb-item" aria-current="page">Detail Inventaris</li>
        </ol>
    </nav>
</div>
@if($jenis == 'barang')
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-archive font-size-20"></i>
                </div>
                <h2>Identitas Barang</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Jenis Inventaris</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">Barang</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Kode Barang</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->kode_barang}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Nama Barang</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->nama_barang}}</h5>
                    </div>
                </div>
                <a href="/rw/inventaris/{{$inventaris->id}}/edit?jenis={{$jenis}}" class="mr-2 btn btn-warning btn-pill text-white">
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
                <h2>Informasi Barang</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Tanggal Perolehan</label>
                        <div class="w-100"></div>
                        @php
                        $date = new DateTime($inventaris->tgl_perolehan);
                        $result = $date->format('d M Y');
                        @endphp
                        <h5 class="text-dark">{{$result}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Kelengkapan Dokumen</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->kelengkapan_dokumen}}</h5>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Asal</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->asal}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Kondisi</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->kondisi}}</h5>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Harga</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">Rp {{ number_format($inventaris->harga,2,',','.') }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                    <i class="mdi mdi-calculator font-size-20"></i>
                </div>
                <h2>Jumlah Barang</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Kuantitas</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->kuantitas}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Satuan</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->satuan}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($jenis == 'perpustakaan')
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-archive font-size-20"></i>
                </div>
                <h2>Identitas Buku</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Jenis Inventaris</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">Perpustakaan</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Kode Buku</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->kode_buku}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Judul Buku</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->judul}}</h5>
                    </div>
                </div>
                <a href="/rw/inventaris/{{$inventaris->id}}/edit?jenis={{$jenis}}" class="mr-2 btn btn-warning btn-pill text-white">
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
                <h2>Informasi Buku</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Pengarang Buku</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->pengarang}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Penerbit Buku</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->penerbit}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Tahun Terbit Buku</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->tahun_terbit}}</h5>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Tanggal Dimiliki</label>
                        <div class="w-100"></div>
                        @php
                        $date = new DateTime($inventaris->tgl_dimiliki);
                        $result = $date->format('d M Y');
                        @endphp
                        <h5 class="text-dark">{{$result}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Kepemilikan Dokumen</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->kepemilikan_dokumen}}</h5>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Asal</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->asal}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Kondisi</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->kondisi_buku}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                    <i class="mdi mdi-calculator font-size-20"></i>
                </div>
                <h2>Jumlah Buku</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Kuantitas</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->jumlah_buku}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Satuan</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">Buku</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif($jenis == 'tanah_bangunan')
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-archive font-size-20"></i>
                </div>
                <h2>Identitas Tanah Bangunan</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Jenis Inventaris</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">Tanah Bangunan</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Kode Tanah Bangunan</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->kode_tanah}}</h5>
                    </div>
                </div>
                <a href="/rw/inventaris/{{$inventaris->id}}/edit?jenis={{$jenis}}" class="mr-2 btn btn-warning btn-pill text-white">
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
                <h2>Informasi Tanah Bangunan</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Tanggal Dimiliki</label>
                        <div class="w-100"></div>
                        @php
                        $date = new DateTime($inventaris->tgl_dimiliki);
                        $result = $date->format('d M Y');
                        @endphp
                        <h5 class="text-dark">{{$result}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Kelengkapan Dokumen</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->kelengkapan_dokumen}}</h5>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Asal</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->asal}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Asal</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->asal}}</h5>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12 col-sm-12 mb-4">
                        <label for="">Alamat</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->alamat}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                    <i class="mdi mdi-calculator font-size-20"></i>
                </div>
                <h2>Luas Tanah Bangunan</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Luas</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->luas}} m2</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@elseif($jenis == 'atk')
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-primary text-white">
                    <i class="mdi mdi-archive font-size-20"></i>
                </div>
                <h2>Identitas ATK</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Jenis Inventaris</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">ATK</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Kode ATK</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->kode_atk}}</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <label for="">Nama ATK</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->nama_atk}}</h5>
                    </div>
                </div>
                <a href="/rw/inventaris/{{$inventaris->id}}/edit?jenis={{$jenis}}" class="mr-2 btn btn-warning btn-pill text-white">
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
                <h2>Informasi ATK</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Tanggal Dimiliki</label>
                        <div class="w-100"></div>
                        @php
                        $date = new DateTime($inventaris->tgl_dimiliki);
                        $result = $date->format('d M Y');
                        @endphp
                        <h5 class="text-dark">{{$result}}</h5>
                    </div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Kelengkapan Dokumen</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->kelengkapan_dokumen}}</h5>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Asal</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->asal}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-success text-white">
                    <i class="mdi mdi-calculator font-size-20"></i>
                </div>
                <h2>Jumlah ATK</h2>
            </div>
            <div class="card-body">
                <div class="form-row mb-4">
                    <div class="col-md-6 col-sm-12 mb-4">
                        <label for="">Kuantitas</label>
                        <div class="w-100"></div>
                        <h5 class="text-dark">{{$inventaris->jumlah}} Buah</h5>
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
        <form action="{{route('rw.inventaris.destroy', $inventaris->id)}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <input name="jenis" type="hidden" value="{{$jenis}}">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Inventaris</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>
                        Yakin menghapus inventaris ini ?
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