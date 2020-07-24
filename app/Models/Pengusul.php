<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengusul extends Model
{
    protected $table = 'pengusul';
    protected $fillable = [
        'id_calon',
        'id_warga',        
    ];

    public function calonPemilu()
    {
        return $this->belongsTo(CalonPemilu::class, 'id_calon');
    }

    public function wargaPengusul()
    {
        return $this->belongsTo(Warga::class, 'id_warga');
    }
}
