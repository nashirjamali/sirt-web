<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'request_surat_kependudukan';
    protected $fillable = [
        'id_bagian',
        'id_warga',
        'tipe_surat',
        'keterangan',
        'status_request'
    ];
    
}
