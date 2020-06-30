@extends('layouts.default')
@push('page-title')
RW - Inventaris - Create
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Tambah Inventaris</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rw/bagian">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Inventaris
            </li>
            <li class="breadcrumb-item" aria-current="page">Tambah Inventaris</li>
        </ol>
    </nav>
</div>

<form id="form" method="POST" action="{{route('rw.inventaris.store')}}">
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
        <div class="w-100"></div>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="card card-default" id="jenis_inv">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Jenis Inventaris</h2>
                </div>
                <div class="card-body">
                    <div class="form-row mb-4">
                        <div class="form-check form-check-inline">
                            <label id="inventaris_barang_label" class="control control-radio checkbox-primary">Barang
                                <input type="radio" name="jenis_inventaris" id="inventaris_barang" value="Barang" {{ (old('inventaris_barang') == 'Barang' || old('inventaris_barang') == '') ? 'checked' : '' }}>
                                <div class="control-indicator"></div>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label id="inventaris_perpustakaan_label" class="control control-radio checkbox-primary outlined ">Perpustakaan
                                <input type="radio" name="jenis_inventaris" id="inventaris_perpustakaan" value="Perpustakaan" {{ (old('inventaris_barang') == 'Perpustakaan') ? 'checked' : '' }}>
                                <div class="control-indicator"></div>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label id="inventaris_tanah_bangunan_label" class="control control-radio checkbox-primary outlined ">Tanah Bangunan
                                <input type="radio" name="jenis_inventaris" id="inventaris_tanah_bangunan" value="Tanah Bangunan" {{ (old('inventaris_barang') == 'Tanah Bangunan') ? 'checked' : '' }}>
                                <div class="control-indicator"></div>
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label id="inventaris_atk_label" class="control control-radio checkbox-primary outlined ">ATK
                                <input type="radio" name="jenis_inventaris" id="inventaris_atk" value="ATK" {{ (old('inventaris_barang') == 'ATK') ? 'checked' : '' }}>
                                <div class="control-indicator"></div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100"></div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-default" id="inv_brg">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Inventaris Barang</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row mb-4">
                            <label>Kode Barang</label>
                            <input type="text" class="form-control" name="kode_barang" placeholder="Masukan Kode Barang">
                        </div>

                        <div class="form-row mb-4">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" placeholder="Masukan Nama Barang">
                        </div>

                        <div class="form-row mb-4">
                            <label>Tanggal Perolehan Barang</label>
                            <input type="date" class="form-control" name="brg_tanggal_perolehan">
                        </div>

                        <div class="form-row mb-4">
                            <label>Kelengkapan Dokumen</label>
                            <div class="w-100 mb-2"></div>
                            <ul class="list-unstyled list-inline">
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Lengkap
                                        <input type="radio" name="brg_kelengkapan_dokumen" checked="checked" value="Lengkap" />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Tidak
                                        <input type="radio" name="brg_kelengkapan_dokumen" value="Tidak" />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div class="form-row mb-4">
                            <label>Kuantitas</label>
                            <input type="number" class="form-control" name="brg_kuantitas" placeholder="Masukan Kuantitas Barang">
                        </div>

                        <div class="form-row mb-4">
                            <label>Satuan</label>
                            <input type="text" class="form-control" name="brg_satuan" placeholder="Masukan Satuan Barang">
                        </div>

                        <div class="form-row mb-4">
                            <label>Asal Barang</label>
                            <select class="form-control" name="brg_asal">
                                <option value="Beli">Beli</option>
                                <option value="Hibah">Hibah</option>
                                <option value="Hadiah">Hadiah</option>
                                <option value="Wakaf">Wakaf</option>
                                <option value="Sumbangan">Sumbangan</option>
                            </select>
                        </div>

                        <div class="form-row mb-4">
                            <label>Kondisi Barang</label>
                            <select class="form-control" name="brg_kondisi">
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Rusak">Rusak</option>
                                <option value="Sangat Rusak">Sangat Rusak</option>
                            </select>
                        </div>
                        <div class="form-row mb-4">
                            <label>Harga Barang</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp </span>
                                </div>
                                <input type="number" class="form-control" name="brg_harga" placeholder="Masukan Harga Barang">
                            </div>
                        </div>

                        <div class="form-row mb-4">
                            <label>Keterangan Barang</label>
                            <textarea type="text" class="form-control" rows="2" name="brg_keterangan" placeholder="Masukan Keterangan Barang"></textarea>
                        </div>


                </div>
            </div>
        </div>


        <div class="w-100"></div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-default d-none" id="inv_perpus">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Inventaris Perpustakaan</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row mb-4">
                            <label>Kode Buku</label>
                            <input type="text" class="form-control" name="kode_buku" placeholder="Masukan Kode Buku">
                        </div>

                        <div class="form-row mb-4">
                            <label>Judul Buku</label>
                            <input type="text" class="form-control" name="judul_buku" placeholder="Masukan Judul Buku">
                        </div>

                        <div class="form-row mb-4">
                            <label>Pengarang Buku</label>
                            <input type="text" class="form-control" name="pengarang_buku" placeholder="Masukan Pengarang Buku">
                        </div>

                        <div class="form-row mb-4">
                            <label>Penerbit Buku</label>
                            <input type="text" class="form-control" name="penerbit_buku" placeholder="Masukan Penerbit Buku">
                        </div>

                        <div class="form-row mb-4">
                            <label>Tahun Terbit</label>
                            <input type="number" class="form-control" name="tahun_terbit_buku" placeholder="Masukan Tahun Terbit Buku">
                        </div>

                        <div class="form-row mb-4">
                            <label>Tanggal Perolehan Buku</label>
                            <input type="date" class="form-control" name="buku_tanggal_perolehan">
                        </div>

                        <div class="form-row mb-4">
                            <label>Kepemilikan Dokumen</label>
                            <div class="w-100 mb-2"></div>
                            <ul class="list-unstyled list-inline">
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Lengkap
                                        <input type="radio" name="buku_kepemilikan_dokumen" checked="checked" value="Lengkap" />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Tidak
                                        <input type="radio" name="buku_kepemilikan_dokumen" value="Tidak" />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div class="form-row mb-4">
                            <label>Asal Buku</label>
                            <select class="form-control" name="buku_asal">
                                <option value="Beli">Beli</option>
                                <option value="Hibah">Hibah</option>
                                <option value="Hadiah">Hadiah</option>
                                <option value="Wakaf">Wakaf</option>
                                <option value="Sumbangan">Sumbangan</option>
                            </select>
                        </div>

                        <div class="form-row mb-4">
                            <label>Kuantitas</label>
                            <input type="number" class="form-control" name="buku_kuantitas" placeholder="Masukan Kuantitas Buku">
                        </div>

                        <div class="form-row mb-4">
                            <label>Kondisi Buku</label>
                            <select class="form-control" name="buku_kondisi">
                                <option value="Sangat Baik">Sangat Baik</option>
                                <option value="Baik">Baik</option>
                                <option value="Rusak">Rusak</option>
                                <option value="Sangat Rusak">Sangat Rusak</option>
                            </select>
                        </div>

                </div>
            </div>
        </div>


        <div class="w-100"></div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-default d-none" id="inv_tanah">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Inventaris Tanah Bangunan</h2>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row mb-4">
                            <label>Kode Tanah</label>
                            <input type="text" class="form-control" name="kode_tanah" placeholder="Masukan Kode Tanah">
                        </div>

                        <div class="form-row mb-4">
                            <label>Tanggal Perolehan Tanah</label>
                            <input type="date" class="form-control" name="tanah_tanggal_perolehan">
                        </div>

                        <div class="form-row mb-4">
                            <label>Asal Tanah</label>
                            <select class="form-control" name="tanah_asal">
                                <option value="Beli">Beli</option>
                                <option value="Hibah">Hibah</option>
                                <option value="Hadiah">Hadiah</option>
                                <option value="Wakaf">Wakaf</option>
                                <option value="Sumbangan">Sumbangan</option>
                            </select>
                        </div>

                        <div class="form-row mb-4">
                            <label>Kelengkapan Dokumen</label>
                            <input type="text" class="form-control" name="tanah_kelengkapan_dokumen" placeholder="Lengkap / Tidak">
                        </div>

                        <div class="form-row mb-4">
                            <label>Alamat Tanah</label>
                            <input type="text" class="form-control" name="tanah_alamat" placeholder="Masukan Alamat Tanah">
                        </div>

                        <div class="form-row mb-4">
                            <label>Luas Tanah</label>
                            <input type="text" class="form-control" name="tanah_luas" placeholder="Masukan Luas Tanah">
                        </div>

                        <div class="form-row mb-4">
                            <label>Keterangan</label>
                            <input type="text" class="form-control" name="tanah_keterangan" placeholder="Masukan Keterangan">
                        </div>


                </div>
            </div>
        </div>


        <div class="w-100"></div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card card-default d-none" id="inv_atk">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Inventaris ATK</h2>
                </div>
                <div class="card-body">
                    <div class="form-row mb-4">
                        <label>Kode ATK</label>
                        <input type="text" class="form-control" name="kode_atk" placeholder="Masukan Kode ATK">
                    </div>

                    <div class="form-row mb-4">
                        <label>Nama ATK</label>
                        <input type="text" class="form-control" name="nama_atk" placeholder="Masukan Nama ATK">
                    </div>

                    <div class="form-row mb-4">
                        <label>Tanggal Perolehan ATK</label>
                        <input type="date" class="form-control" name="atk_tanggal_perolehan">
                    </div>

                    <div class="form-row mb-4">
                        <label>Kelengkapan Dokumen</label>
                        <input type="text" class="form-control" name="atk_kelengkapan_dokumen" placeholder="Lengkap / Tidak">
                    </div>

                    <div class="form-row mb-4">
                        <label>Asal ATK</label>
                        <select class="form-control" name="atk_asal">
                            <option value="Beli">Beli</option>
                            <option value="Hibah">Hibah</option>
                            <option value="Hadiah">Hadiah</option>
                            <option value="Wakaf">Wakaf</option>
                            <option value="Sumbangan">Sumbangan</option>
                        </select>
                    </div>

                    <div class="form-row mb-4">
                        <label>Kuantitas ATK</label>
                        <input type="text" class="form-control" name="atk_kuantitas" placeholder="Masukan Kuantitas ATK">
                    </div>

                    <div class="form-row mb-4">
                        <label>Keterangan</label>
                        <input type="text" class="form-control" name="atk_keterangan" placeholder="Masukan Keterangan">
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
    $('#inventaris_barang').change(function() {
        if ($(this).attr('checked', true)) {
            $('#inventaris_atk_label').addClass('outlined')
            $('#inventaris_perpustakaan_label').addClass('outlined')
            $('#inventaris_tanah_bangunan_label').addClass('outlined')
            $('#inventaris_barang_label').removeClass('outlined')
            $('#inv_brg').removeClass('d-none');
            $('#inv_perpus').addClass('d-none');
            $('#inv_tanah').addClass('d-none');
            $('#inv_atk').addClass('d-none');
        }
    });

    $('#inventaris_perpustakaan').change(function() {
        if ($(this).attr('checked', true)) {
            $('#inventaris_atk_label').addClass('outlined')
            $('#inventaris_perpustakaan_label').removeClass('outlined')
            $('#inventaris_tanah_bangunan_label').addClass('outlined')
            $('#inventaris_barang_label').addClass('outlined')
            $('#inv_brg').addClass('d-none');
            $('#inv_perpus').removeClass('d-none');
            $('#inv_tanah').addClass('d-none');
            $('#inv_atk').addClass('d-none');
        }
    });


    $('#inventaris_tanah_bangunan').change(function() {
        if ($(this).attr('checked', true)) {
            $('#inventaris_atk_label').addClass('outlined')
            $('#inventaris_perpustakaan_label').addClass('outlined')
            $('#inventaris_tanah_bangunan_label').removeClass('outlined')
            $('#inventaris_barang_label').addClass('outlined')
            $('#inv_brg').addClass('d-none');
            $('#inv_perpus').addClass('d-none');
            $('#inv_tanah').removeClass('d-none');
            $('#inv_atk').addClass('d-none');
        }
    });

    $('#inventaris_atk').change(function() {
        if ($(this).attr('checked', true)) {
            $('#inventaris_atk_label').removeClass('outlined')
            $('#inventaris_perpustakaan_label').addClass('outlined')
            $('#inventaris_tanah_bangunan_label').addClass('outlined')
            $('#inventaris_barang_label').addClass('outlined')
            $('#inv_brg').addClass('d-none');
            $('#inv_perpus').addClass('d-none');
            $('#inv_tanah').addClass('d-none');
            $('#inv_atk').removeClass('d-none');
        }
    });
</script>
@endpush