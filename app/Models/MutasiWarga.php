<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MutasiWarga extends Model
{
    protected $table = 'mutasi_warga';
    protected $fillable = [
        'id_warga',
        'tgl_mutasi',
        'status'
    ];

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'id_warga');
    }
}
