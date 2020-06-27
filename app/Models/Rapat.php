<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    protected $table = 'rapat';
    protected $fillable = [
        'tgl_rapat',
        'tempat_rapat',
        'waktu_rapat'

    ];
}
