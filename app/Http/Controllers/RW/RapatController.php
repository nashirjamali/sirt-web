<?php

namespace App\Http\Controllers\RW;

use App\Http\Controllers\Controller;
use App\Models\Rapat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RapatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rapat = Rapat::where('id_bagian', Auth::user()->id_bagian)->get();
        $data = [
            "rapat" => $rapat,
        ];
        return view('pages.rw.rapat.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::where('id_bagian', Auth::user()->id_bagian)->where('tipe', '!=', 'Warga')->get();
        return view('pages.rw.rapat.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // id, id_bagian, id_pemimpin, tgl_rapat, waktu_rapat, tempat_rapat, created_at, updated_at

        $rapat = new Rapat;
        $rapat->id_bagian = Auth::user()->id_bagian;
        $rapat->id_pemimpin = $request->get('id_pemimpin');
        $rapat->tgl_rapat = $request->get('tgl_rapat');
        $rapat->waktu_rapat = $request->get('waktu_rapat');
        $rapat->tempat_rapat = $request->get('tempat_rapat');
        $rapat->save();

        return redirect()->route('rw.rapat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rapat = Rapat::where('id', $id)->where('id_bagian', Auth::user()->id_bagian)->first();
        $data = [
            "rapat" => $rapat,
        ];
        return view('pages.rw.rapat.detail', $data);
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
