<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TamuKunjungan extends Model
{
    protected $table = 'tamu_kunjungan';
    protected $fillable = [
        'nama_lengkap',
        'jenis_tamu',
        'periode',
        'tujuan',
        'tanggal'
        
    ];
}
