@extends('layouts.default')
@push('page-title')
    RW - Data Penduduk
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
        <h1>Data Penduduk</h1>
    </div>
@endsection
@push('custom-script')
    <script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('assets/plugins/data-tables/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/data-tables/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/data-tables/datatables.responsive.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.data-table').DataTable();
        });
    </script>
@endpush