<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventarisTanahBangunan extends Model
{
    protected $table = 'inventaris_tanah_bangunan';
    protected $fillable = [
        'id_bagian',
        'kode_tanah',
        'tgl_dimiliki',
        'asal',
        'kelengkapan_dokumen',
        'alamat',
        'luas'

    ];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }
}
