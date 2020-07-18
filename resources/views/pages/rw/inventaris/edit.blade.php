@extends('layouts.default')
@push('page-title')
RW - Edit Inventaris
@endpush
@push('custom-style')
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}">
<link href="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/data-tables/responsive.datatables.min.css')}}" rel="stylesheet" />
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Edit Inventaris</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rw/inventaris">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="/rw/inventaris">
                    Data Inventaris
                </a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Edit Inventaris</li>
        </ol>
    </nav>
</div>
<form action="{{route('rw.inventaris.update', $inventaris->id)}}" method="post">
    @csrf
    <input name="_method" type="hidden" value="PUT">
    <input name="jenis" type="hidden" value="{{$jenis}}">
    <div class="row">
        <div class="col-12">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h2>Edit Inventaris</h2>
                </div>
                <div class="card-body">
                    @if($jenis == 'barang')
                    <div class="row">
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kode Barang</label>
                            <input type="text" class="form-control" name="kode_barang" value="{{$inventaris->kode_barang}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama_barang" value="{{$inventaris->nama_barang}}">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Tanggal Perolehan Barang</label>
                            <input type="date" class="form-control" name="brg_tanggal_perolehan" value="{{$inventaris->tgl_perolehan}}">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kelengkapan Dokumen</label>
                            <div class="w-100 mb-2"></div>
                            <ul class="list-unstyled list-inline">
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Lengkap
                                        <input type="radio" name="brg_kelengkapan_dokumen" value="Lengkap" <?php echo $inventaris->kelengkapan_dokumen == 'Lengkap' ? 'checked' : '' ?> />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Tidak
                                        <input type="radio" name="brg_kelengkapan_dokumen" value="Tidak" <?php echo $inventaris->kelengkapan_dokumen == 'Tidak' ? 'checked' : '' ?> />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kuantitas</label>
                            <input type="number" class="form-control" name="brg_kuantitas" value="{{$inventaris->kuantitas}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Satuan</label>
                            <input type="text" class="form-control" name="brg_satuan" value="{{$inventaris->satuan}}">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Asal Barang</label>
                            <select class="form-control" name="brg_asal">
                                <option <?php echo 'Beli' == $inventaris->asal ? 'selected' : '' ?> value="Beli">Beli</option>
                                <option <?php echo 'Hibah' == $inventaris->asal ? 'selected' : '' ?> value="Hibah">Hibah</option>
                                <option <?php echo 'Hadiah' == $inventaris->asal ? 'selected' : '' ?> value="Hadiah">Hadiah</option>
                                <option <?php echo 'Wakaf' == $inventaris->asal ? 'selected' : '' ?> value="Wakaf">Wakaf</option>
                                <option <?php echo 'Sumbangan' == $inventaris->asal ? 'selected' : '' ?> value="Sumbangan">Sumbangan</option>
                            </select>
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kondisi Barang</label>
                            <select class="form-control" name="brg_kondisi">
                                <option <?php echo 'Sangat Baik' == $inventaris->kondisi ? 'selected' : '' ?> value="Sangat Baik">Sangat Baik</option>
                                <option <?php echo 'Baik' == $inventaris->kondisi ? 'selected' : '' ?> value="Baik">Baik</option>
                                <option <?php echo 'Rusak' == $inventaris->kondisi ? 'selected' : '' ?> value="Rusak">Rusak</option>
                                <option <?php echo 'Sangat Rusak' == $inventaris->kondisi ? 'selected' : '' ?> value="Sangat Rusak">Sangat Rusak</option>
                            </select>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Harga Barang</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp </span>
                                </div>
                                <input type="number" class="form-control" name="brg_harga" value="{{$inventaris->harga}}">
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-6 col-md-6 col-sm-12 mb-4">
                            <label>Keterangan Barang</label>
                            <textarea type="text" class="form-control" rows="2" name="brg_keterangan" value="{{$inventaris->keterangan}}"></textarea>
                        </div>
                    </div>
                    @elseif($jenis == 'perpustakaan')
                    <div class="row">
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kode Buku</label>
                            <input type="text" class="form-control" name="kode_buku" value="{{$inventaris->kode_buku}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Judul Buku</label>
                            <input type="text" class="form-control" name="judul_buku" value="{{$inventaris->judul}}">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Pengarang Buku</label>
                            <input type="text" class="form-control" name="pengarang_buku" value="{{$inventaris->pengarang}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Penerbit Buku</label>
                            <input type="text" class="form-control" name="penerbit_buku" value="{{$inventaris->penerbit}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Tahun Terbit</label>
                            <input type="number" class="form-control" name="tahun_terbit_buku" value="{{$inventaris->tahun_terbit}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Tanggal Perolehan Buku</label>
                            <input type="date" class="form-control" name="buku_tanggal_perolehan" value="{{$inventaris->tgl_dimiliki}}">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kepemilikan Dokumen</label>
                            <div class="w-100 mb-2"></div>
                            <ul class="list-unstyled list-inline">
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Lengkap
                                        <input type="radio" name="buku_kepemilikan_dokumen" value="Lengkap" <?php echo $inventaris->kepemilikan_dokumen == 'Lengkap' ? 'checked' : '' ?> />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Tidak
                                        <input type="radio" name="buku_kepemilikan_dokumen" value="Tidak" <?php echo $inventaris->kepemilikan_dokumen == 'Tidak' ? 'checked' : '' ?> />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Asal Buku</label>
                            <select class="form-control" name="buku_asal">
                                <option <?php echo 'Beli' == $inventaris->asal ? 'selected' : '' ?> value="Beli">Beli</option>
                                <option <?php echo 'Hibah' == $inventaris->asal ? 'selected' : '' ?> value="Hibah">Hibah</option>
                                <option <?php echo 'Hadiah' == $inventaris->asal ? 'selected' : '' ?> value="Hadiah">Hadiah</option>
                                <option <?php echo 'Wakaf' == $inventaris->asal ? 'selected' : '' ?> value="Wakaf">Wakaf</option>
                                <option <?php echo 'Sumbangan' == $inventaris->asal ? 'selected' : '' ?> value="Sumbangan">Sumbangan</option>
                            </select>
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kondisi Buku</label>
                            <select class="form-control" name="buku_kondisi">
                                <option <?php echo 'Sangat Baik' == $inventaris->kondisi_buku ? 'selected' : '' ?> value="Sangat Baik">Sangat Baik</option>
                                <option <?php echo 'Baik' == $inventaris->kondisi_buku ? 'selected' : '' ?> value="Baik">Baik</option>
                                <option <?php echo 'Rusak' == $inventaris->kondisi_buku ? 'selected' : '' ?> value="Rusak">Rusak</option>
                                <option <?php echo 'Sangat Rusak' == $inventaris->kondisi_buku ? 'selected' : '' ?> value="Sangat Rusak">Sangat Rusak</option>
                            </select>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kuantitas</label>
                            <input type="number" class="form-control" name="brg_kuantitas" value="{{$inventaris->jumlah_buku}}">
                        </div>
                    </div>

                    @elseif($jenis == 'tanah_bangunan')
                    <div class="row">
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kode Tanah</label>
                            <input type="text" class="form-control" name="kode_tanah" value="{{$inventaris->kode_tanah}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Tanggal Perolehan Tanah</label>
                            <input type="date" class="form-control" name="tanah_tanggal_perolehan" value="{{$inventaris->tgl_dimiliki}}">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kelengkapan Dokumen</label>
                            <div class="w-100 mb-2"></div>
                            <ul class="list-unstyled list-inline">
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Lengkap
                                        <input type="radio" name="tanah_kelengkapan_dokumen" value="Lengkap" <?php echo $inventaris->kelengkapan_dokumen == 'Lengkap' ? 'checked' : '' ?> />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Tidak
                                        <input type="radio" name="tanah_kelengkapan_dokumen" value="Tidak" <?php echo $inventaris->kelengkapan_dokumen == 'Tidak' ? 'checked' : '' ?> />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-md-8 col-sm-12 mb-4">
                            <label>Alamat</label>
                            <textarea rows="2" class="form-control" name="tanah_alamat">{{$inventaris->alamat}}</textarea>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Asal</label>
                            <select class="form-control" name="tanah_asal">
                                <option <?php echo 'Beli' == $inventaris->asal ? 'selected' : '' ?> value="Beli">Beli</option>
                                <option <?php echo 'Hibah' == $inventaris->asal ? 'selected' : '' ?> value="Hibah">Hibah</option>
                                <option <?php echo 'Hadiah' == $inventaris->asal ? 'selected' : '' ?> value="Hadiah">Hadiah</option>
                                <option <?php echo 'Wakaf' == $inventaris->asal ? 'selected' : '' ?> value="Wakaf">Wakaf</option>
                                <option <?php echo 'Sumbangan' == $inventaris->asal ? 'selected' : '' ?> value="Sumbangan">Sumbangan</option>
                            </select>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Luas</label>
                            <input type="number" class="form-control" name="tanah_luas" value="{{$inventaris->luas}}">
                        </div>
                    </div>

                    @elseif($jenis == 'atk')
                    <div class="row">
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kode ATK</label>
                            <input type="text" class="form-control" name="kode_atk" value="{{$inventaris->kode_atk}}">
                        </div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Nama ATK</label>
                            <input type="text" class="form-control" name="nama_atk" value="{{$inventaris->nama_atk}}">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Tanggal Perolehan ATK</label>
                            <input type="date" class="form-control" name="atk_tanggal_perolehan" value="{{$inventaris->tgl_dimiliki}}">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kelengkapan Dokumen</label>
                            <div class="w-100 mb-2"></div>
                            <ul class="list-unstyled list-inline">
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Lengkap
                                        <input type="radio" name="atk_kelengkapan_dokumen" value="Lengkap" <?php echo $inventaris->kelengkapan_dokumen == 'Lengkap' ? 'checked' : '' ?> />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                                <li class="d-inline-block mr-3">
                                    <label class="control control-radio">Tidak
                                        <input type="radio" name="atk_kelengkapan_dokumen" value="Tidak" <?php echo $inventaris->kelengkapan_dokumen == 'Tidak' ? 'checked' : '' ?> />
                                        <div class="control-indicator"></div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Kuantitas</label>
                            <input type="number" class="form-control" name="atk_kuantitas" value="{{$inventaris->jumlah}}">
                        </div>
                        <div class="w-100"></div>
                        <div class="form-row col-lg-4 col-md-6 col-sm-12 mb-4">
                            <label>Asal ATK</label>
                            <select class="form-control" name="atk_asal">
                                <option <?php echo 'Beli' == $inventaris->asal ? 'selected' : '' ?> value="Beli">Beli</option>
                                <option <?php echo 'Hibah' == $inventaris->asal ? 'selected' : '' ?> value="Hibah">Hibah</option>
                                <option <?php echo 'Hadiah' == $inventaris->asal ? 'selected' : '' ?> value="Hadiah">Hadiah</option>
                                <option <?php echo 'Wakaf' == $inventaris->asal ? 'selected' : '' ?> value="Wakaf">Wakaf</option>
                                <option <?php echo 'Sumbangan' == $inventaris->asal ? 'selected' : '' ?> value="Sumbangan">Sumbangan</option>
                            </select>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Edit Inventaris</button>
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

    });
</script>
@endpush