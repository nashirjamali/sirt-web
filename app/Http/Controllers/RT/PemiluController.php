<?php

namespace App\Http\Controllers\RT;

use App\Http\Controllers\Controller;
use App\Models\CalonPemilu;
use App\Models\Pemilu;
use App\Models\UndanganPemilu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PemiluController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemilu = Pemilu::where('id_bagian', Auth::user()->id_bagian)->get();

        $data = [
            "pemilu" => $pemilu,
        ];

        return view('pages.rt.pemilu.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.rt.pemilu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pemilu = new Pemilu;
        $request['id_bagian'] = Auth::user()->id_bagian;

        $pemilu->fill($request->all());
        $pemilu->save();

        return redirect()->route('rt.pemilu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pemilu = Pemilu::where('id_bagian', Auth::user()->id_bagian)->where('id', $id)->first();
        $calonRT = CalonPemilu::where('id_pemilu', $pemilu->id)->with('warga')->groupBy('id_warga')->select('id_warga', DB::raw('count(*) as total'))->get();
        $undangan = UndanganPemilu::where('id_pemilu', $pemilu->id)->first();
        $data = [
            "pemilu" => $pemilu,
            "calonRT" => $calonRT,
            "undangan" => $undangan,
        ];

        return view('pages.rt.pemilu.detail', $data);
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

    public function sebarUndangan()
    {
        
    }
}
