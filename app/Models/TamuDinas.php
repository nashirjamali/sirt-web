<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TamuDinas extends Model
{
    protected $table = 'tamu_dinas';
    protected $fillable = [
        'jabatan',
        'instansi',
        'nip',
        'no_surat_tugas'

    ];
}
