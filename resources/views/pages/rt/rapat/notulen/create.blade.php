@extends('layouts.default')
@push('page-title')
RT - Notulen Rapat
@endpush
@push('custom-style')
<link href="{{asset('assets/plugins/summernote/summernote.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}" rel="stylesheet">
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Notulen Rapat</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="/rt/rapat/{{$rapat->id}}">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                Data Rapat
            </li>
            <li class="breadcrumb-item" aria-current="page">Buat Notulen</li>
        </ol>
    </nav>
</div>
@if($errors->any())
<div class="alert alert-dismissible fade show alert-danger" role="alert">
    {{ implode('', $errors->all(':message')) }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<form id="form" method="POST" action="{{route('rt.notulen.store')}}">
    @csrf
    <input type="hidden" name="id_rapat" value="{{$rapat->id}}">
    <div class="row">
        <div class="col-lg-12 col-md-8 col-sm-12">
            <div class="card card-default">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h4>Isi Rapat</h4>
                </div>
                <div class="card-body">
                    <textarea class="text-dark form-control mb-4" rows="8" id="summernote" name="content"></textarea>
                    <button type="submit" class="btn btn-primary btn-lg">Buat Notulen</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
@push('custom-script')
<script src="{{asset('assets/plugins/jquery-mask-input/jquery.mask.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-mask-input/jquery.inputmask.min.js')}}"></script>
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/plugins/summernote/summernote.min.js')}}"></script>
<script src="{{asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 500,
            minHeight: null,
            maxHeight: null,
            focus: true
        });
    });
</script>
@endpush