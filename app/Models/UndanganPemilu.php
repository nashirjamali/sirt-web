<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UndanganPemilu extends Model
{
    protected $table = 'undangan_pemilu';
    protected $fillable = [
        'periode',
        'tgl_pemilu',
        'tempat_pemilu'
        
    ];
}
