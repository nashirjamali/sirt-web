<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemilu extends Model
{
    protected $table = 'pemilu';
    protected $fillable = [
        'id_bagian',
        'periode',
        'tgl_pemilu',
        'tempat_pemilu'

    ];

    public function calonPemilu()
    {
        return $this->hasMany(CalonPemilu::class, 'id_calon');
    }

    public function undanganPemilu()
    {
        return $this->hasMany(UndanganPemilu::class, 'id_pemilu');
    }
}
