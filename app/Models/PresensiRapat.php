<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PresensiRapat extends Model
{
    protected $table = 'presensi_rapat';
    protected $fillable = [
        'id_rapat',
        'id_warga',
        'kehadiran'
    ];

    public function rapat()
    {
        return $this->belongsTo(Rapat::class);
    }

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }
}
