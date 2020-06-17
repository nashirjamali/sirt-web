@extends('layout.app')

@section('header')
    <div class="header-body">
        <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
                <h6 class="h2 text-white d-inline-block mb-0">Detail Warga</h6>
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                        <li class="breadcrumb-item"><a href="/default"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Warga</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- Card body -->
                <div class="card-body">
                    <h1><strong>Nashir Jamali</strong></h1>
                    <div class="my-3">
                        <strong>NIK&nbsp;</strong>1245678987656789
                    </div>
                    <div class="my-3">
                        <strong>No. KK&nbsp;</strong>1245678987656789
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
           <div class="card">
               <!-- Card header -->
               <div class="card-header">
                   <h3 class="mb-0">Identitas Diri</h3>
               </div>
               <!-- Card body -->
               <div class="card-body">
                   <div class="row">
                       <div class="w-100"></div>
                       <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="form-group">
                               <label class="form-control-label">Jenis Kelamin</label>
                               <h3>Laki-laki</h3>
                           </div>
                       </div>
                       <div class="w-100"></div>
                       <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="form-group">
                               <label class="form-control-label">Agama</label>
                               <h3>Islam</h3>
                           </div>
                       </div>
                       <div class="w-100"></div>
                       <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="form-group">
                               <label class="form-control-label">Status Kawin</label>
                               <h3>Belum</h3>
                           </div>
                       </div>
                       <div class="w-100"></div>
                       <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="form-group">
                               <label class="form-control-label">Pekerjaan</label>
                               <h3>Software Developer</h3>
                           </div>
                       </div>
                       <div class="w-100"></div>
                       <div class="col-lg-6 col-md-6 col-sm-12">
                           <div class="form-group">
                               <label class="form-control-label">Tempat Tanggal Lahir</label>
                               <h3>Kediri, 31 Februari 2020</h3>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0">Alamat</h3>
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="w-100"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">Alamat KTP</label>
                                <h3>Jalan Kanginan 2 No 7, Ketabang, Genteng, Surabaya, Jawa Timur</h3>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label class="form-control-label">Alamat Tinggal</label>
                                <h3>Jalan Kanginan 2 No 7, Ketabang, Genteng, Surabaya, Jawa Timur</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

