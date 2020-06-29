@extends('layouts.default')
@push('page-title')
    RW - Bagian
@endpush
@push('custom-style')
    <link href="{{asset('assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/data-tables/responsive.datatables.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2-boostrap.min.css')}}">
@endpush
@section('content')
    <div class="breadcrumb-wrapper">
        <h1>Bagian RT</h1>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card card-default">
                <div class=" card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Data Bagian</h2>
                    <div>
                        <a href="/rw/bagian/create"
                           target="" class="btn btn-outline-primary text-uppercase">
                            <i class="fas fa-plus-circle mr-2"></i> Tambah Bagian RT
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="responsive-data-table">
                        <table class="table dt-responsive nowrap data-table" style="width:100%">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Bagian</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>RT 001</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary" href="/rw/bagian/detail">Detail</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom-script')
    <script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.data-table').DataTable({
                "aLengthMenu": [[20, 30, 50, 75, -1], [20, 30, 50, 75, "All"]],
                "pageLength": 20,
                "dom": '<"row justify-content-between top-information"lf>rt<"row justify-content-between bottom-information"ip><"clear">'
            });
        });
    </script>
@endpush
