<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';
    protected $fillable = [
        'id_user',
        'id_mutasi_warga',
        'id_bagian',
        'nama',
        'nik',
        'tgl_lahir',
        'jkel',
        'status_kawin',
        'no_kk',
        'agama',
        'pendidikan',
        'pekerjaan',
        'kewarganegaraan',
        'kedudukan_keluarga',
        'alamat',
        'alamat_ktp'
        
    ];
}
