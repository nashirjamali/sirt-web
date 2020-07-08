<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{
    protected $table = 'bagian';
    protected $fillable = [
        'nama_bagian',
        'tipe_bagian'
    ];

    public function warga()
    {
        return $this->hasMany(Warga::class, 'id_bagian');
    }

    public function rapat()
    {
        return $this->hasMany(Rapat::class, 'id_bagian');
    }

    public function aspirasi()
    {
        return $this->hasMany(AspirasiWarga::class, 'id_bagian');
    }

    public function user()
    {
        return $this->hasMany(User::class, 'id_bagian');
    }

    public function pengumuman()
    {
        return $this->hasMany(Pengumuman::class, 'id_bagian');
    }

    public function registerKeluar()
    {
        return $this->hasMany(RegisterKeluar::class, 'id_bagian');
    }

    public function registerMasuk()
    {
        return $this->hasMany(RegisterMasuk::class, 'id_bagian');
    }

    public function tamuKunjungan()
    {
        return $this->hasMany(TamuKunjungan::class, 'id_bagian');
    }

    public function inventarisBarang()
    {
        return $this->hasMany(InventarisBarang::class);
    }

    public function inventarisPerpustakaan()
    {
        return $this->hasMany(InventarisPerpustakaan::class);
    }

    public function inventarisATK()
    {
        return $this->hasMany(InventarisATK::class);
    }

    public function inventarisTanah()
    {
        return $this->hasMany(InventarisTanahBangunan::class);
    }
}
