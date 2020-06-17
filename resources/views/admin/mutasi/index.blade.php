@extends('layout.app')

@section('header')
    <div class="header-body">
        <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0">Data Mutasi Warga</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="/default"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="/rt/mutasi-warga">Data Mutasi Warga</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Mutasi Warga</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Card stats -->
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Mutasi Warga</h5>
                                <span class="h2 font-weight-bold mb-0">100.000</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card card-stats">
                    <!-- Card body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <h5 class="card-title text-uppercase text-muted mb-0">Jumlah KK</h5>
                                <span class="h2 font-weight-bold mb-0">2,356</span>
                            </div>
                            <div class="col-auto">
                                <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid mt--6">
        <div class="row">
            <!-- Mutasi Warga datatable -->
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <div class="row">
                            <div class="col-lg-8 col-md-6 col-sm-12 mb-3">
                                <h3 class="mb-0">List Mutasi Warga</h3>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <a class="btn btn-success" href="/rt/mutasi-warga/create">
                                    <i class="fas fa-plus"></i> Tambah Data
                                </a>
                                <a class="btn btn-info" href="/rt/mutasi-warga/export">
                                    <i class="fas fa-file-excel"></i> Export Data
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Mutasi Warga datatable -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="no">No</th>
                                <th scope="col" class="sort" data-sort="nik">NIK</th>
                                <th scope="col">Tgl Mutasi</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Status</th>                       
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            @for($i = 0; $i < 10; $i++)
                                <tr>
                                    <th class="no" scope="row">{{ $i+1 }}</th>
                                    <td class="nik">1283478327489</td>
                                    <td>6/18/2020</td>
                                    <td>Nashir Jamali</td>
                                    <td>Pindah</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="/rt/mutasi-warga/detail" role="button">
                                            Detail
                                        </a>
                                        <a class="btn btn-sm btn-warning" href="/rt/mutasi-warga/edit" role="button">
                                            Edit
                                        </a>
                                        <a class="btn btn-sm btn-danger" href="#" role="button">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
