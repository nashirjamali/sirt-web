<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $table = 'warga';
    protected $fillable = [
        'id_bagian',
        'nama',
        'nik',
        'tgl_lahir',
        'jkel',
        'status_kawin',
        'no_kk',
        'agama',
        'pendidikan',
        'pekerjaan',
        'kewarganegaraan',
        'kedudukan_keluarga',
        'alamat',
        'alamat_ktp'
        
    ];

    public function bagian()
    {
        return $this->belongsTo(Bagian::class);
    }

    public function pemimpinRapat()
    {
        return $this->hasOne(Rapat::class);
    }

    public function presensiRapat()
    {
        return $this->hasMany(PresensiRapat::class);
    }

    public function pengusulPemilu()
    {
        return $this->hasMany(Pengusul::class);
    }

    public function aspirasi()
    {
        return $this->hasMany(AspirasiWarga::class);
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id_warga');
    }

    public function mutasi()
    {
        return $this->hasMany(MutasiWarga::class);
    }

    public function pengumumanWarga()
    {
        return $this->hasMany(PengumumanWarga::class);
    }

    public function pendudukSementara()
    {
        return $this->hasMany(PendudukSementara::class);
    }

    public function pemilikRumah()
    {
        return $this->hasMany(PendudukSementara::class);
    }
}
