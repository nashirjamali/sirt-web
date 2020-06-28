<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengumumanWarga extends Model
{
    protected $table = 'pengumuman_warga';
    protected $fillable = [
        'id_warga',
        'id_pengumuman',
    ];

    public function pengumuman()
    {
        return $this->belongsTo(Pengumuman::class);
    }

    public function warga()
    {
        return $this->belongsTo(Warga::class);
    }
    
}
