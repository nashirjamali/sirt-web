<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventarisATK extends Model
{
    protected $table = 'inventaris_atk';
    protected $fillable = [
        'id_bagian',
        'kode_atk',
        'nama_atk',
        'tgl_dimiliki',
        'kelengkapan_dokumen',
        'asal',
        'jumlah'

    ];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }
}
