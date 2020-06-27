<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendudukSementara extends Model
{
    protected $table = 'penduduk_sementara';
    protected $fillable = [
        'id_warga',
        'id_pemilik_rumah',
        'status'

    ];
}
