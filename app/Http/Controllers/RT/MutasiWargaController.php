<?php

namespace App\Http\Controllers\RT;

use App\Http\Controllers\Controller;
use App\Models\MutasiWarga;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MutasiWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warga = Warga::where('id_bagian', Auth::user()->id_bagian)->pluck('id')->toArray();
        $mutasi = MutasiWarga::whereIn('id_warga', $warga)->get();

        $data = [
            'mutasi' => $mutasi
        ];
        return view('pages.rt.penduduk.mutasi_warga.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $warga = Warga::where('id_bagian', Auth::user()->id_bagian)->get();

        $data = [
            "warga" => $warga
        ];

        return view('pages.rt.penduduk.mutasi_warga.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_warga = $request->get('id_warga');
        foreach ($id_warga as $val) {
            MutasiWarga::create([
                'id_warga' => $val,
                'tgl_mutasi' => $request->get('tgl_mutasi'),
                'status' => $request->get('status'),
            ]);
        }

        return redirect()->route('rt.mutasi.index');
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
