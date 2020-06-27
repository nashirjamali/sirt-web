<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventarisATK extends Model
{
    protected $table = 'inventaris_atk';
    protected $fillable = [
        'kode_atk',
        'nama_atk',
        'tgl_dimiliki',
        'kelengkapan_dokumen',
        'asal',
        'jumlah'

    ];
}
