<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AspirasiWarga extends Model
{
    protected $table = 'aspirasi_warga';
    protected $fillable = [
        'id_warga',
        'id_bagian',
        'isi_aspirasi'

    ];
}
