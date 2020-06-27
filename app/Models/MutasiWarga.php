<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MutasiWarga extends Model
{
    protected $table = 'mutasi_warga';
    protected $fillable = [
        'id_warga',
        'tgl_mutasi',
        'status'

    ];
}
