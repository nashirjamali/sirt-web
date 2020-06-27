<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotulenRapat extends Model
{
    protected $table = 'notulen_rapat';
    protected $fillable = [
        'isi_notulen'

    ];
}
