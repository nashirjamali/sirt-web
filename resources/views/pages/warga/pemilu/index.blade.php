@extends('layouts.default')
@push('page-title')
Warga - Pemilu
@endpush
@push('custom-style')
<link href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/data-tables/responsive.datatables.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}">
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1>Pemilihan {{Auth::user()->bagian->nama_bagian}} dan RW 001</h1>
    <br>
</div>
<div class="row">
    @if($calon_rt != null)
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card card-default" id="inventaris_barang">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Pilih Calon RT</h2>
                </div>
                <div class="card-body">
                    <div class="responsive-data-table">
                        <table class="table dt-responsive nowrap data-table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th class="no-sort">Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($calon_rt as $val)
                                <tr>
                                    <td>{{$val->nama}}</td>
                                    <td>{{$val->jkel}}</td>
                                    <td>{{$val->alamat}}</td>
                                    <td>
                                        <form action="{{route('warga.pemilu.store')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id_warga" value="{{$val->id}}">
                                            <input type="hidden" name="tipe" value="RT">
                                            <button type="submit" class="btn btn-sm btn-primary">Pilih</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif


    @if($calon_rw != null)
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card card-default" id="inventaris_barang">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Pilih Calon RW</h2>
                </div>
                <div class="card-body">
                    <div class="responsive-data-table">
                        <table class="table dt-responsive nowrap data-table" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>
                                    <th class="no-sort">Pilih</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($calon_rw as $val)
                                <tr>
                                    <td>{{$val->nama}}</td>
                                    <td>{{$val->jkel}}</td>
                                    <td>{{$val->alamat}}</td>
                                    <td>
                                        <form action="{{route('warga.pemilu.store')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id_warga" value="{{$val->id}}">
                                            <input type="hidden" name="tipe" value="RW">
                                            <button type="submit" class="btn btn-sm btn-primary">Pilih</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

@endsection
@push('custom-script')
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('.data-table').DataTable({
            "responsive": true,
            "aLengthMenu": [
                [20, 30, 50, 75, -1],
                [20, 30, 50, 75, "All"]
            ],
            "pageLength": 20,
            "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">',
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }]
        });
    });
</script>
@endpush