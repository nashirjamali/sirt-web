<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\CalonPemilu;
use App\Models\Pemilu;
use App\Models\Pengusul;
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
        $undangan = null;
        $calon_rt = null;
        $calon_rw = null;
        $today = date('Y-m-d');
        $pemilu = Pemilu::where('id_bagian', Auth::user()->id_bagian)->orderBy('created_at', 'desc')->first();

        if ($today <= $pemilu->tgl_pemilu) {
            $is_calon = CalonPemilu::where('id_pemilu', $pemilu->id)->where('tipe', 'RT')->get('id')->toArray();
            
            if ($is_calon) {
                $pengusul = Pengusul::where('id_warga', Auth::user()->id_warga)->where('id_calon', $is_calon)->first();
                if (!$pengusul) {
                    $calon_rt = Warga::where('id_bagian', Auth::user()->id_bagian)
                        ->whereDoesntHave('mutasi', function (Builder $query) {
                            $query->whereIn('mutasi_warga.status', ['Meninggal', 'Pindah']);
                        })
                        ->get();
                }
            } else {                
                $pengusul = Pengusul::where('id_warga', Auth::user()->id_warga)->count();
                if ($pengusul < 2) {
                    $calon_rt = Warga::where('id_bagian', Auth::user()->id_bagian)
                        ->whereDoesntHave('mutasi', function (Builder $query) {
                            $query->whereIn('mutasi_warga.status', ['Meninggal', 'Pindah']);
                        })
                        ->get();
                }
            }
        }

        if ($today <= $pemilu->tgl_pemilu) {
            $is_calon = CalonPemilu::where('id_pemilu', $pemilu->id)->where('tipe', "RW")->get('id')->toArray();
            if ($is_calon) {
                $pengusul = Pengusul::where('id_warga', Auth::user()->id_warga)->where('id_calon', $is_calon)->first();
                if (!$pengusul) {
                    $calon_rw = Warga::where('id_bagian', Auth::user()->id_bagian)
                        ->whereDoesntHave('mutasi', function (Builder $query) {
                            $query->whereIn('mutasi_warga.status', ['Meninggal', 'Pindah']);
                        })
                        ->get();
                }
            } else {
                $pengusul = Pengusul::where('id_warga', Auth::user()->id_warga)->count();
                if ($pengusul < 2) {
                    $calon_rw = Warga::where('id_bagian', Auth::user()->id_bagian)
                        ->whereDoesntHave('mutasi', function (Builder $query) {
                            $query->whereIn('mutasi_warga.status', ['Meninggal', 'Pindah']);
                        })
                        ->get();
                }
            }
        }

        $data = [
            "calon_rt" => $calon_rt,
            "calon_rw" => $calon_rw,
            "undangan" => $undangan,
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
        $pemilu = Pemilu::where('id_bagian', Auth::user()->id_bagian)->orderBy('created_at', 'desc')->first();
        $calon = new CalonPemilu;
        $calon->id_warga = $request->get('id_warga');
        $calon->id_pemilu = $pemilu->id;
        $calon->tipe = $request->get('tipe');
        $calon->save();

        $pengusul = new Pengusul;
        $pengusul->id_calon = $calon->id;
        $pengusul->id_warga = Auth::user()->id_warga;
        $pengusul->save();

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
