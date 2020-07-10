<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestSuratKependudukan extends Model
{
    protected $table = 'request_surat_kependudukan';
    protected $fillable = [
        'id_bagian',
        'id_warga',
        'tipe_surat',
        'keterangan',
        'status_request'
    ];
    
}
