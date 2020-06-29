<?php

namespace App\Http\Controllers\RW;

use App\Http\Controllers\Controller;
use App\Models\Bagian;
use App\Models\User;
use App\Models\Warga;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class BagianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $bagian = Bagian::all();
        return view('pages.rw.bagian.index', ['bagian' => $bagian]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('pages.rw.bagian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'nama_rt' => 'required|max:3|min:3',
            'nama' => 'required',
            'nik' => 'required|max:18|min:18',
            'no_kk' => 'required|max:18|min:18',
            'jkel' => 'required|in:P,L',
            'tgl_lahir' => 'required|date',
            'status_kawin' => 'required|in:Belum,Sudah',
            'agama' => 'required|in:Islam,Kristen,Katolik,Hindu,Buddha',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required|in:WNI,WNA',
            'kedudukan_keluarga' => 'required|in:Kepala,Anggota',
            'prov_ktp' => 'required',
            'kota_ktp' => 'required',
            'kec_ktp' => 'required',
            'kel_ktp' => 'required',
            'alamat_ktp' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator->errors())
                ->withInput($request->input());
        }
        $alamat_ktp = $request->get('alamat_ktp') . ', '
            . $request->get('kel_ktp') . ', '
            . $request->get('kec_ktp') . ', '
            . $request->get('kota_ktp') . ', '
            . $request->get('prov_ktp');

        if ($request->get('alamat_sama') == null) {
            $alamat_tinggal = $request->get('alamat_ktp') . ', '
                . $request->get('kel_ktp') . ', '
                . $request->get('kec_ktp') . ', '
                . $request->get('kota_ktp') . ', '
                . $request->get('prov_ktp');
        } else {
            $alamat_tinggal = $alamat_ktp;
        }

//        Insert Bagian Table
        $bagian = new Bagian;
        $bagian->nama_bagian = "RT ". $request->get('nama_rt');
        $bagian->tipe_bagian = "RT";
        $bagian->save();

//        Insert Warga Table
        $warga = new Warga;
        $warga->id_bagian = $bagian->id;
        $warga->nama = $request->get('nama');
        $warga->nik = str_replace('-', '', $request->get('nik'));
        $warga->no_kk = str_replace('-', '', $request->get('no_kk'));
        $warga->agama = $request->get('agama');
        $warga->tgl_lahir = $request->get('tgl_lahir');
        $warga->jkel = $request->get('jkel');
        $warga->status_kawin = $request->get('status_kawin');
        $warga->pendidikan = $request->get('pendidikan');
        $warga->pekerjaan = $request->get('pekerjaan');
        $warga->kewarganegaraan = $request->get('kewarganegaraan');
        $warga->kedudukan_keluarga = $request->get('kedudukan_keluarga');
        $warga->alamat = addslashes($alamat_tinggal);
        $warga->alamat_ktp = addslashes($alamat_ktp);
        $warga->save();

//        Insert User Table
//        'id_warga',
//        'id_bagian',
//        'tipe',
//        'username',
//        'password',
        $user = new User;
        $user->id_warga = $warga->id;
        $user->id_bagian = $bagian->id;
        $user->tipe = "RT";
        $user->username = substr(strtolower($warga->nama), 0, 2) . substr($warga->nik, 13, 3);
        $user->password = substr(strtolower($warga->nama), 0, 3) . date('Y', strtotime($warga->tgl_lahir));
        $user->save();

        return  redirect()->route('rw.bagian.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
