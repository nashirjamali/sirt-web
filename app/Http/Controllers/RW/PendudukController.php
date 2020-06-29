<?php

namespace App\Http\Controllers\RW;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        return view('pages.rw.penduduk.index');
    }
}
