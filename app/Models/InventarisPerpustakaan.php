<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventarisPerpustakaan extends Model
{
    protected $table = 'inventaris_perpustakaan';
    protected $fillable = [
        'id_bagian',
        'kode_buku',
        'judul',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'tgl_dimiliki',
        'kepemilikan_dokumen',
        'asal',
        'jumlah_buku',
        'kondisi_buku'

    ];
    
    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }
}
