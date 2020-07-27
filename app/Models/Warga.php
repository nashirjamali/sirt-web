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
        return $this->belongsTo(Bagian::class, 'id_bagian');
    }

    public function pemimpinRapat()
    {
        return $this->hasOne(Rapat::class, 'id_pemimpin');
    }

    public function presensiRapat()
    {
        return $this->hasMany(PresensiRapat::class);
    }

    public function pengusulPemilu()
    {
        return $this->hasMany(Pengusul::class, 'id_warga');
    }

    public function calonPemilu()
    {
        return $this->hasMany(CalonPemilu::class, 'id_warga');
    }

    public function aspirasi()
    {
        return $this->hasMany(AspirasiWarga::class, 'id_warga');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id_warga');
    }

    public function mutasi()
    {
        return $this->hasOne(MutasiWarga::class, 'id_warga');
    }

    public function pengumumanWarga()
    {
        return $this->hasMany(PengumumanWarga::class);
    }

    public function pendudukSementara()
    {
        return $this->hasOne(PendudukSementara::class, 'id_warga');
    }

    public function pemilikRumah()
    {
        return $this->hasMany(PendudukSementara::class, 'id_pemilik_rumah');
    }
    
    public function requestSurat()
    {
        return $this->hasMany(RequestSuratKependudukan::class, 'id_bagian');
    }
}
