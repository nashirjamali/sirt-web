<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\RequestSuratKependudukan as ModelsRequestSuratKependudukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestSuratKependudukan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $req = ModelsRequestSuratKependudukan::where('id_bagian', Auth::user()->id_bagian)->where('id_warga', Auth::user()->id_warga)->get();
        $data = [
            'request' => $req,
        ];
        return view('pages.warga.request_surat_kependudukan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.warga.request_surat_kependudukan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ModelsRequestSuratKependudukan::create([
            'id_bagian' => Auth::user()->id_bagian,
            'id_warga' => Auth::user()->id_warga,
            'tipe_surat' => $request->get('jenis_surat_request'),
            'keterangan' => $request->get('keterangan_request'),
            'status_request' => 'Ditangguhkan'
        ]);

        return redirect()->route('warga.request.index');
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
