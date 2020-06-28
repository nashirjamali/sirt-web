<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengmumanController extends Controller
{
    public function index()
    {
        return view('pages.warga.pengumuman.index');
    }
}
