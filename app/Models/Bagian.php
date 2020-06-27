<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bagian extends Model
{

    protected $fillable = [
        'nama_bagian', 'tipe_bagian'
    ];

    // protected $fillable = [
    //     'name', 'email', 'password',
    // ];
}
