@extends('layouts.default')
@push('page-title')
Warga - Pengumuman
@endpush
@push('custom-style')
@endpush
@section('content')
<div class="breadcrumb-wrapper">
    <h1>Pengumuman Terbaru</h1>
</div>
<div class="row">
    @foreach($pengumuman as $val)
    <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-default">
            <div class="card-body">
                <h6 class="text-dark mb-4">{{$val->bagian->nama_bagian}}</h6>
                <h5 class="card-title text-primary">{{$val->judul_pengumuman}}</h5>
                <p class="card-text pb-3">{{character_limiter($val->isi_pengumuman, 50)}}</p>
                <p class="card-text">
                    <small class="text-muted">{{$val->tgl_pengumuman}}</small>
                </p>
                <a href="/warga/pengumuman/{{$val->id}}" type="button" class="btn btn-primary text-white mt-4">
                    Baca
                </a>
            </div>
        </div>
    </div>
    @endforeach
    <div class="col-12">
        {{ $pengumuman->links() }}
    </div>
    @php
    function character_limiter($str, $n = 500, $end_char = '....')
    {
    if (strlen($str) < $n) { return $str; } $str=preg_replace("/\s+/", ' ' , str_replace(array("\r\n", "\r" , "\n" ), ' ' , $str)); if (strlen($str) <=$n) { return $str; } $out="" ; foreach (explode(' ', trim($str)) as $val) {
            $out .= $val . ' ';

            if (strlen($out) >= $n) {
                $out = trim($out);
                return (strlen($out) == strlen($str)) ? $out : $out . $end_char;
            }
        }
    }
    @endphp
</div>
@endsection