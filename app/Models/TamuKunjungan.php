<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TamuKunjungan extends Model
{
    protected $table = 'tamu_kunjungan';
    protected $fillable = [
        'id_bagian',
        'id_tamu_khusus',
        'id_tamu_dinas',
        'nama_lengkap',
        'jenis_tamu',
        'periode',
        'tujuan',
        'tanggal'
        
    ];
}
