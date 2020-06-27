<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventarisBarang extends Model
{
    protected $table = 'inventaris_barang';
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'tanggal_perolehan',
        'kelengkapan_dokumen',
        'kuantitas',
        'satuan',
        'asal',
        'kondisi',
        'harga'


    ];
}
