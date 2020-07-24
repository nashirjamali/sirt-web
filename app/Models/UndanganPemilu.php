<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UndanganPemilu extends Model
{
    protected $table = 'undangan_pemilu';
    protected $fillable = [
        'id_pemilu',
        'isi',
    ];

    public function pemilu()
    {
        return $this->belongsTo(Pemilu::class, 'id_pemilu');
    }
}
