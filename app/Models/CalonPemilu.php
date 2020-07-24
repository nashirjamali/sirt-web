<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalonPemilu extends Model
{
    protected $table = 'calon_pemilu';
    protected $fillable = [
        'id_pemilu',
        'id_warga',
    ];

    public function pemilu()
    {
        return $this->belongsTo(Pemilu::class, 'id_pemilu');
    }

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'id_warga');
    }

    public function pengusul()
    {
        return $this->hasMany(Pengusul::class, 'id_warga');
    }
}
