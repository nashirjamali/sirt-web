<?php

namespace App\Http\Controllers\RT;

use App\Http\Controllers\Controller;
use App\Models\MutasiWarga;
use App\Models\PendudukSementara;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Warga::all();

        $warga = [];
        foreach ($models as $val) {
            $status = "Tetap";
            $mutasi = MutasiWarga::where('id_warga', $val->id)->where('status', ['Pindah'])->first();
            $sementara = PendudukSementara::where('id_warga', $val->id)->first();

            if ($mutasi) {
                $status = $mutasi->status;
            } else if ($sementara) {
                $status = "Sementara";
            }

            $x = [
                "nik" => $val->nik,
                "nama" => $val->nama,
                "jkel" => $val->jkel === "P" ? "Perempuan" : "Laki-laki",
                "alamat" => $val->alamat,
                "status" => $status,
                "wilayah" => $val->bagian->nama_bagian,
                "id" => $val->id
            ];

            array_push($warga, $x);
        }

        $data = [
            "warga" => $warga
        ];
        return view('pages.rt.penduduk.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.rt.penduduk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
