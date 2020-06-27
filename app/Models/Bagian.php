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
        return $this->hasMany(Warga::class);
    }

    public function rapat()
    {
        return $this->hasMany(Rapat::class);
    }

    public function aspirasi()
    {
        return $this->hasMany(AspirasiWarga::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
