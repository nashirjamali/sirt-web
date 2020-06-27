<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TamuKhusus extends Model
{
    protected $table = 'tamu_khusus';
    protected $fillable = [
        'id_tamu',
        'jabatan',
        'instansi'
        
    ];
}
