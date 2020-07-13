<?php

namespace App\Http\Controllers\Warga;

use App\Http\Controllers\Controller;
use App\Models\Bagian;
use App\Models\Pengumuman;
use App\Models\PengumumanWarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_rw = Bagian::where('tipe_bagian', 'RW')->first();
        $pengumuman = Pengumuman::whereIn('id_bagian', [Auth::user()->id_bagian, $id_rw->id])->orderBy('created_at', 'DESC')->paginate(5);
        $data = [
            'pengumuman' => $pengumuman
        ];
        return view('pages.warga.pengumuman.index', $data);
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
        $pengumumanWarga = PengumumanWarga::where('id_warga', Auth::user()->id_warga)->where('id_pengumuman', $id)->first();
        if ($pengumumanWarga == null) {
            PengumumanWarga::create([
                "id_warga" => Auth::user()->id_warga,
                "id_pengumuman" => $id
            ]);
        }

        $pengumuman = Pengumuman::where('id_bagian', Auth::user()->id_bagian)->where('id', $id)->first();
        $data = [
            'pengumuman' => $pengumuman,
        ];
        return view('pages.warga.pengumuman.detail', $data);
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
