@extends('layouts.default')
@push('page-title')
Warga - {{$pengumuman->judul_pengumuman}}
@endpush
@push('custom-style')
@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-body">
                <h3 class="card-title text-dark">{{$pengumuman->judul_pengumuman}}</h3>
                @php
                $date = new DateTime($pengumuman->created_at);
                $result = $date->format('d M Y H:i');
                @endphp
                <p><span class="text-primary h6">{{$pengumuman->bagian->nama_bagian}}</span></p>
                <p class="mb-5">{{$result}} WIB</p>
                <p>
                    {{$pengumuman->isi_pengumuman}}
                </p>
            </div>
        </div>
    </div>
</div>

@endsection