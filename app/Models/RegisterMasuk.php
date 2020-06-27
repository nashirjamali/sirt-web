<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterMasuk extends Model
{
    protected $table = 'register_masuk';
    protected $fillable = [
        'no_surat',
        'no_agenda',
        'tgl_kirim',
        'tgl_terima',
        'penerima_surat',
        'perihal'

    ];
}
