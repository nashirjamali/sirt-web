<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $fillable = [
        'judul_pengumuman',
        'isi_pengumuman',
        'tgl_pengumuman'

    ];
}
