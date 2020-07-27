<?php

namespace App\Http\Controllers\RT;

use App\Http\Controllers\Controller;
use App\Models\NotulenRapat;
use App\Models\Rapat;
use Illuminate\Http\Request;

class NotulenController extends Controller
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
    public function create(Request $request)
    {
        $id = $request->get('id_rapat');

        $rapat = Rapat::find($id);
        
        return view('pages.rt.rapat.notulen.create', ['rapat' => $rapat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_rapat = $request->get('id_rapat');
        $isi_notulen = $request->get('content');

        $notulen = new NotulenRapat;
        $notulen->id_rapat = $id_rapat;
        $notulen->isi_notulen = $isi_notulen;
        $notulen->save();

        return redirect()->route('rt.rapat.show', $id_rapat);
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
