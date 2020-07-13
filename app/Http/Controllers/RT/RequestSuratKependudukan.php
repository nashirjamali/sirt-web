<?php

namespace App\Http\Controllers\RT;

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
        $req = ModelsRequestSuratKependudukan::where('id_bagian', Auth::user()->id_bagian)->orderBy('created_at', 'DESC')->get();
        $data = [
            'request' => $req,
        ];
        return view('pages.rt.request_surat_kependudukan.index', $data);
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
        $req = ModelsRequestSuratKependudukan::where('id_bagian', Auth::user()->id_bagian)->where('id', $id)->first();
        $data = [
            'request' => $req,
        ];
        return view('pages.rt.request_surat_kependudukan.detail', $data);
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
        $req = ModelsRequestSuratKependudukan::where('id_bagian', Auth::user()->id_bagian)->where('id', $id)->first();
        $req->status_request = $request->get('status_request');
        $req->save();

        return redirect()->route('rt.request.show', $id);
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
