<?php

namespace App\Http\Controllers\RW;

use App\Http\Controllers\Controller;
use App\Models\RegisterKeluar;
use App\Models\RegisterMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register_keluar = RegisterKeluar::where('id_bagian', Auth::user()->id_bagian)->get();
        $register_masuk = RegisterMasuk::where('id_bagian', Auth::user()->id_bagian)->get();
        $data = [
            'register_keluar' => $register_keluar,
            'register_masuk' => $register_masuk,
        ];
        return view('pages.rw.register.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.rw.register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenis = $request->get('jenis_register');

        switch ($jenis) {
            case 'Masuk':
                $validator = Validator::make(request()->all(), [
                    'no_surat_masuk' => 'required',
                    'no_agenda_masuk' => 'required',
                    'tgl_surat' => 'required|date',
                    'tgl_terima_masuk' => 'required|date',
                    'asal_surat_masuk' => 'required',
                    'perihal_masuk' => 'required',
                ]);
                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator->errors())
                        ->withInput($request->input());
                }
                RegisterMasuk::create([
                    'id_bagian' => Auth::user()->id_bagian,
                    'no_surat' => $request->get('no_surat_masuk'),
                    'no_agenda' => $request->get('no_agenda_masuk'),
                    'tgl_surat' => $request->get('tgl_surat'),
                    'tgl_terima' => $request->get('tgl_terima_masuk'),
                    'asal_surat' => $request->get('asal_surat_masuk'),
                    'perihal' => $request->get('perihal_masuk'),
                ]);
                break;
            case 'Keluar':
                $validator = Validator::make(request()->all(), [
                    'no_surat_keluar' => 'required',
                    'no_agenda_keluar' => 'required',
                    'tgl_kirim' => 'required|date',
                    'tgl_terima_keluar' => 'required|date',
                    'penerima_surat_keluar' => 'required',
                    'perihal_keluar' => 'required',
                ]);
                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator->errors())
                        ->withInput($request->input());
                }

                RegisterKeluar::create([
                    'id_bagian' => Auth::user()->id_bagian,
                    'no_surat' => $request->get('no_surat_keluar'),
                    'no_agenda' => $request->get('no_agenda_keluar'),
                    'tgl_kirim' => $request->get('tgl_kirim'),
                    'tgl_terima' => $request->get('tgl_terima_keluar'),
                    'penerima_surat' => $request->get('penerima_surat_keluar'),
                    'perihal' => $request->get('perihal_keluar'),
                ]);

                break;
            default:
                # code...
                break;
        }

        return redirect()->route('rw.register.index');
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