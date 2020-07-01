<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TamuKunjungan extends Model
{
    protected $table = 'tamu_kunjungan';
    protected $fillable = [
        'id_bagian',
        'nama_lengkap',
        'jenis_tamu',
        'periode',
        'tujuan',
        'tanggal'
    ];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class, 'id_bagian');
    }

    public function tamuDinas()
    {
        return $this->hasOne(TamuDinas::class, 'id_tamu');
    }

    public function tamuKhusus()
    {
        return $this->hasOne(TamuKhusus::class, 'id_tamu');
    }
}
