<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegisterKeluar extends Model
{
    protected $table = 'register_keluar';
    protected $fillable = [
        'id_bagian',
        'no_surat',
        'no_agenda',
        'tgl_kirim',
        'tgl_terima',
        'penerima_surat',
        'perihal'

    ];
}
