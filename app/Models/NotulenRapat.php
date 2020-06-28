<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NotulenRapat extends Model
{
    protected $table = 'notulen_rapat';
    protected $fillable = [
        'id_rapat',
        'isi_notulen'
    ];

    public function rapat()
    {
        return $this->belongsTo(Rapat::class);
    }
}
