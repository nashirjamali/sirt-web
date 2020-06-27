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
}
