<?php

namespace App\Http\Controllers\RW;

use App\Http\Controllers\Controller;
use App\Models\Pemilu;
use App\Models\UndanganPemilu as ModelsUndanganPemilu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UndanganPemilu extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.rw.undangan_pemilu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_pemilu = Pemilu::where('id_bagian', Auth::user()->id_bagian)->orderBy('tgl_pemilu', 'DESC')->first()->id;

        $undangan = new ModelsUndanganPemilu();
        $undangan->id_pemilu = $id_pemilu;
        $undangan->isi = $request->get('content');
        $undangan->save();

        return redirect()->route('rw.pemilu.show', $id_pemilu);
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
        $undangan = ModelsUndanganPemilu::find($id);
        return view('pages.rw.undangan_pemilu.edit', ["undangan" => $undangan]);
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
        $id_pemilu = Pemilu::where('id_bagian', Auth::user()->id_bagian)->orderBy('tgl_pemilu', 'DESC')->first()->id;

        $undangan = ModelsUndanganPemilu::find($id);
        $undangan->isi = $request->get('content');
        $undangan->save();

        return redirect()->route('rw.pemilu.show', $id_pemilu);
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
