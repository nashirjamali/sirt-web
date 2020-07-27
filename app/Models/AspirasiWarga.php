<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AspirasiWarga extends Model
{
    protected $table = 'aspirasi_warga';
    protected $fillable = [
        'id_warga',
        'id_bagian',
        'isi_aspirasi'

    ];

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'id_warga');
    }

    public function bagian()
    {
        return $this->belongsTo(Bagian::class, 'id_bagian');
    }
}
