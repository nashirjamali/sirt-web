<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventarisBarang extends Model
{
    protected $table = 'inventaris_barang';
    protected $fillable = [
        'id_bagian',
        'kode_barang',
        'nama_barang',
        'tgl_perolehan',
        'kelengkapan_dokumen',
        'kuantitas',
        'satuan',
        'asal',
        'kondisi',
        'harga'
    ];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }
}
