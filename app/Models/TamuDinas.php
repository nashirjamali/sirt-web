<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TamuDinas extends Model
{
    protected $table = 'tamu_dinas';
    protected $fillable = [
        'id_tamu',
        'jabatan',
        'instansi',
        'nip',
        'no_surat_tugas'
    ];

    public function tamuKunjungan()
    {
        return $this->belongsTo(TamuKunjungan::class, 'id_tamu');
    }
}
