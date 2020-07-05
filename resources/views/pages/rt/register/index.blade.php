@extends('layouts.default')
@push('page-title')
RT - Register
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
    <h1>Data Register</h1>
    <br>
    <a href="/rt/register/create" target="" class="btn btn-outline-primary text-uppercase">
        <i class="fas fa-plus-circle mr-2"></i> Tambah Register
    </a>
</div>

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default" id="keluar_register_card">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Register Keluar</h2>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <p class="">Data Register Keluar</p>
                    <div>
                        <a href="/" target="" class="btn btn-outline-success btn-sm text-uppercase">
                            <i class="fas fa-file-excel"></i> Export Excel
                        </a>
                        <a href="/" target="" class="btn btn-outline-info btn-sm text-uppercase">
                            <i class="fas fa-print"></i> Print
                        </a>
                    </div>
                </div>
                <div class="responsive-data-table">
                    <table class="table dt-responsive nowrap data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Surat</th>
                                <th>No Agenda</th>
                                <th>Penerima Surat</th>
                                <th>Tanggal Kirim</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>$no</td>
                                <td>no_surat</td>
                                <td>no_agenda</td>
                                <td>penerima_surat</td>
                                <td>tgl_kirim</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="card card-default" id="masuk_register_card">
            <div class="card-header-border-bottom card-header d-flex justify-content-between">
                <h2>Register Masuk</h2>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between mb-4">
                    <p class="">Data Register Masuk</p>
                    <div>
                        <a href="/" target="" class="btn btn-outline-success btn-sm text-uppercase">
                            <i class="fas fa-file-excel"></i> Export Excel
                        </a>
                        <a href="/" target="" class="btn btn-outline-info btn-sm text-uppercase">
                            <i class="fas fa-print"></i> Print
                        </a>
                    </div>
                </div>
                <div class="responsive-data-table">
                    <table class="table dt-responsive nowrap data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Surat</th>
                                <th>No Agenda</th>
                                <th>Asal Surat</th>
                                <th>Tanggal Surat</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>$no</td>
                                <td>no_surat</td>
                                <td>no_agenda</td>
                                <td>asal_surat</td>
                                <td>tgl_surat</td>
                                <td>
                                    <a class="btn btn-sm text-white btn-primary">Detail</a>
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

        // $('#keluar_register').change(function() {
        //     if ($(this).attr('checked', true)) {
        //         $('#masuk_register_label').addClass('outlined')
        //         $('#keluar_register_label').removeClass('outlined')
        //         $('#keluar_register_card').removeClass('d-none');
        //         $('#masuk_register_card').addClass('d-none');
        //     }
        // });

        // $('#masuk_register').change(function() {
        //     if ($(this).attr('checked', true)) {
        //         $('#keluar_register_label').addClass('outlined')
        //         $('#masuk_register_label').removeClass('outlined')
        //         $('#masuk_register_card').removeClass('d-none');
        //         $('#keluar_register_card').addClass('d-none');
        //     }
        // });
    </script>
    @endpush