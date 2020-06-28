<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    protected $table = 'pengumuman';
    protected $fillable = [
        'id_bagian',
        'judul_pengumuman',
        'isi_pengumuman',
        'tgl_pengumuman'
    ];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }

    public function pengumumanWarga()
    {
        return $this->hasMany(PengumumanWarga::class);
    }
}
