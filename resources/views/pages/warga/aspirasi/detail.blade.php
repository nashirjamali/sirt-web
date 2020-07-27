@extends('layouts.default')
@push('page-title')
Warga - Aspirasi
@endpush
@push('custom-style')
@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-body">
                <h3 class="card-title text-dark">Aspirasi</h3>
                @php
                $date = new DateTime($aspirasi->created_at);
                $result = $date->format('d M Y H:i');
                @endphp
                <p><span class="text-primary h6">{{$aspirasi->bagian->nama_bagian}}</span></p>
                <p class="mb-5">{{$result}} WIB</p>
                <p>
                    {!! html_entity_decode($aspirasi->isi_aspirasi) !!}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection