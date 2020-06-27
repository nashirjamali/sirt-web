<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MutasiWarga extends Model
{
    protected $table = 'mutasi_warga';
    protected $fillable = [
        'tgl_mutasi',
        'status'

    ];
}
