<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\AspirasiWarga;
use App\Models\Bagian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspirasi = AspirasiWarga::where('id_warga', Auth::user()->id_warga)->get();
        
        $data = [
            "aspirasi" => $aspirasi,
        ];
        return view('pages.warga.aspirasi.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bagian = Bagian::whereIn('id', [1, Auth::user()->id_bagian])->get();
        $data = [
            "bagian" => $bagian
        ];
        return view('pages.warga.aspirasi.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aspirasi = new AspirasiWarga;
        $aspirasi->id_bagian = $request->get('id_bagian');
        $aspirasi->id_warga = Auth::user()->id_warga;
        $aspirasi->isi_aspirasi = $request->get('content');
        $aspirasi->save();

        return redirect()->route('warga.aspirasi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aspirasi = AspirasiWarga::find($id);
        
        $data = [
            "aspirasi" => $aspirasi,
        ];
        return view('pages.warga.aspirasi.detail', $data);
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
