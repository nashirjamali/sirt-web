<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';
    protected $fillable = [
        'id_warga',
        'id_bagian',
        'tipe',
        'username',
        'password',
    ];
    protected $hidden = [
        'password',
    ];

    public function warga()
    {
        return $this->belongsTo(Warga::class, 'id_warga');
    }

    public function bagian()
    {
        return $this->belongsTo(Bagian::class, 'id_bagian');
    }
}
