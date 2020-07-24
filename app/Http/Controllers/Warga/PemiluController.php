<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\CalonPemilu;
use App\Models\Pemilu;
use App\Models\Pengusul;
use App\Models\UndanganPemilu;
use App\Models\Warga;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemiluController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calon_rt = null;
        $calon_rw = null;
        $undangan_rt = null;
        $undangan_rw = null;
        $pemilu_rt = null;
        $pemilu_rw = null;
        $today = date('Y-m-d');
        $id_bagian = Auth::user()->warga->id_bagian;

        $pemilu = Pemilu::where('id_bagian', $id_bagian)->orderBy('tgl_pemilu', 'desc')->first();
        if ($pemilu) {

            $undangan_rt = UndanganPemilu::where('id_pemilu', $pemilu->id)->first();
            $pemilu_rt = $pemilu;
            if ($today <= $pemilu->tgl_pemilu) {
                $is_calon = CalonPemilu::where('id_pemilu', $pemilu->id)->get('id')->toArray();
                if ($is_calon) {
                    $pengusul = Pengusul::where('id_warga', Auth::user()->id_warga)->whereIn('id_calon', $is_calon)->first();
                    if (!$pengusul) {
                        $calon_rt = Warga::where('id_bagian', $id_bagian)
                            ->whereDoesntHave('mutasi', function (Builder $query) {
                                $query->whereIn('mutasi_warga.status', ['Meninggal', 'Pindah']);
                            })
                            ->get();
                    }
                } else {
                    $pengusul = Pengusul::where('id_warga', Auth::user()->id_warga)->count();
                    if ($pengusul < 2) {
                        $calon_rt = Warga::where('id_bagian', $id_bagian)
                            ->whereDoesntHave('mutasi', function (Builder $query) {
                                $query->whereIn('mutasi_warga.status', ['Meninggal', 'Pindah']);
                            })
                            ->get();
                    }
                }
            }
        }

        $pemilu = Pemilu::where('id_bagian', 1)->orderBy('tgl_pemilu', 'desc')->first();

        if ($pemilu) {
            $undangan_rw = UndanganPemilu::where('id_pemilu', $pemilu->id)->first();
            $pemilu_rw = $pemilu;
            if ($today <= $pemilu->tgl_pemilu) {
                $is_calon = CalonPemilu::where('id_pemilu', $pemilu->id)->get('id')->toArray();
                if ($is_calon) {
                    $pengusul = Pengusul::where('id_warga', Auth::user()->id_warga)->whereIn('id_calon', $is_calon)->first();
                    if (!$pengusul) {
                        $calon_rw = Warga::where('id_bagian', $id_bagian)
                            ->whereDoesntHave('mutasi', function (Builder $query) {
                                $query->whereIn('mutasi_warga.status', ['Meninggal', 'Pindah']);
                            })
                            ->get();
                    }
                } else {
                    $pengusul = Pengusul::where('id_warga', Auth::user()->id_warga)->count();
                    if ($pengusul < 2) {
                        $calon_rw = Warga::where('id_bagian', $id_bagian)
                            ->whereDoesntHave('mutasi', function (Builder $query) {
                                $query->whereIn('mutasi_warga.status', ['Meninggal', 'Pindah']);
                            })
                            ->get();
                    }
                }
            }
        }
        $data = [
            "calon_rt" => $calon_rt,
            "calon_rw" => $calon_rw,
            "undangan_rt" => $undangan_rt,
            "undangan_rw" => $undangan_rw,
            "pemilu_rt" => $pemilu_rt,
            "pemilu_rw" => $pemilu_rw,
        ];

        return view('pages.warga.pemilu.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipe = $request->get('tipe');
        $id_bagian = Auth::user()->warga->id_bagian;
        if ($tipe == 'RW') {
            $pemilu = Pemilu::where('id_bagian', 1)->orderBy('created_at', 'desc')->first();
            $calon = new CalonPemilu;
            $calon->id_warga = $request->get('id_warga');
            $calon->id_pemilu = $pemilu->id;
            $calon->save();

            $pengusul = new Pengusul;
            $pengusul->id_calon = $calon->id;
            $pengusul->id_warga = Auth::user()->id_warga;
            $pengusul->save();
        } else {
            $pemilu = Pemilu::where('id_bagian', $id_bagian)->orderBy('created_at', 'desc')->first();
            $calon = new CalonPemilu;
            $calon->id_warga = $request->get('id_warga');
            $calon->id_pemilu = $pemilu->id;
            $calon->save();

            $pengusul = new Pengusul;
            $pengusul->id_calon = $calon->id;
            $pengusul->id_warga = Auth::user()->id_warga;
            $pengusul->save();
        }


        return redirect()->route('warga.pemilu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
