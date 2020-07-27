<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    protected $table = 'rapat';
    protected $fillable = [
        'id_bagian',
        'tgl_rapat',
        'tempat_rapat',
        'waktu_rapat',
        'id_pemimpin'
    ];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }

    public function pemimpin()
    {
        return $this->belongsTo(Warga::class, 'id_pemimpin');
    }

    public function presensi()
    {
        return $this->hasMany(PresensiRapat::class);
    }

    public function notulen()
    {
        return $this->hasOne(NotulenRapat::class);
    }
}
