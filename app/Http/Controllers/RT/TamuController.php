<?php

namespace App\Http\Controllers\RT;

use App\Http\Controllers\Controller;
use App\Models\TamuDinas;
use App\Models\TamuKhusus;
use App\Models\TamuKunjungan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tamu_kunjungan = TamuKunjungan::where('id_bagian', Auth::user()->id_bagian);
        $tamu_dinas = TamuDinas::whereIn('id_tamu', $tamu_kunjungan->pluck('id')->toArray())->get();
        $tamu_khusus = TamuKhusus::whereIn('id_tamu', $tamu_kunjungan->pluck('id')->toArray())->get();
        $data = [
            'tamu_kunjungan' => $tamu_kunjungan->get(),
            'tamu_dinas' => $tamu_dinas,
            'tamu_khusus' => $tamu_khusus,
        ];

        return view('pages.rt.tamu_kunjungan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.rt.tamu_kunjungan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenis = $request->get('jenis_tamu');

        $validator = Validator::make(request()->all(), [
            'nama_tamu' => 'required',
            'periode_tamu' => 'required',
            'tanggal_tamu' => 'required|date',
            'tujuan_tamu' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator->errors())
                ->withInput($request->input());
        }

        switch ($jenis) {
            case 'Umum':
                TamuKunjungan::create([
                    'id_bagian' => Auth::user()->id_bagian,
                    'nama_lengkap' => $request->get('nama_tamu'),
                    'jenis_tamu' => $jenis,
                    'periode' => $request->get('periode_tamu'),
                    'tujuan' => $request->get('tujuan_tamu'),
                    'tanggal' => $request->get('tanggal_tamu')
                ]);
                break;

            case 'Khusus':
                $validator = Validator::make(request()->all(), [
                    'jabatan_tamu' => 'required',
                    'instansi_tamu' => 'required',
                ]);

                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator->errors())
                        ->withInput($request->input());
                }
                $tamu = new TamuKunjungan;
                $tamu->id_bagian = Auth::user()->id_bagian;
                $tamu->nama_lengkap = $request->get('nama_tamu');
                $tamu->jenis_tamu = $jenis;
                $tamu->periode = $request->get('periode_tamu');
                $tamu->tujuan = $request->get('tujuan_tamu');
                $tamu->tanggal = $request->get('tanggal_tamu');
                $tamu->save();

                TamuKhusus::create([
                    'id_tamu' => $tamu->id,
                    'jabatan' => $request->get('jabatan_tamu'),
                    'instansi' => $request->get('instansi_tamu'),
                ]);

                break;

            case 'Dinas':
                $validator = Validator::make(request()->all(), [
                    'jabatan_tamu_dinas' => 'required',
                    'instansi_tamu_dinas' => 'required',
                    'nip_tamu' => 'required',
                    'no_surat_tugas_tamu' => 'required',
                ]);

                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator->errors())
                        ->withInput($request->input());
                }

                $tamu = new TamuKunjungan;
                $tamu->id_bagian = Auth::user()->id_bagian;
                $tamu->nama_lengkap = $request->get('nama_tamu');
                $tamu->jenis_tamu = $jenis;
                $tamu->periode = $request->get('periode_tamu');
                $tamu->tujuan = $request->get('tujuan_tamu');
                $tamu->tanggal = $request->get('tanggal_tamu');
                $tamu->save();

                TamuDinas::create([
                    'id_tamu' => $tamu->id,
                    'jabatan' => $request->get('jabatan_tamu_dinas'),
                    'instansi' => $request->get('instansi_tamu_dinas'),
                    'nip' => $request->get('nip_tamu'),
                    'no_surat_tugas' => $request->get('no_surat_tugas_tamu'),
                ]);


                break;
            default:

                break;
        }
        return redirect()->route('rt.tamu-kunjungan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tamu = TamuKunjungan::where('id_bagian', Auth::user()->id_bagian)->where('id', $id)->first();

        $data = [
            'tamu' => $tamu,
        ];
        return view('pages.rt.tamu_kunjungan.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tamu = TamuKunjungan::where('id_bagian', Auth::user()->id_bagian)->where('id', $id)->first();

        $data = [
            'tamu' => $tamu,
        ];
        return view('pages.rt.tamu_kunjungan.edit', $data);
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
        $tamu = TamuKunjungan::where('id_bagian', Auth::user()->id_bagian)->where('id', $id)->first();

        if ($tamu == null) {
            return redirect()->route('rt.tamu-kunjungan.index');
        }

        $jenis = $tamu->jenis_tamu;

        $validator = Validator::make(request()->all(), [
            'nama_tamu' => 'required',
            'periode_tamu' => 'required',
            'tanggal_tamu' => 'required|date',
            'tujuan_tamu' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator->errors())
                ->withInput($request->input());
        }

        $tamu->nama_lengkap = $request->get('nama_tamu');
        $tamu->periode = $request->get('periode_tamu');
        $tamu->tujuan = $request->get('tujuan_tamu');
        $tamu->tanggal = $request->get('tanggal_tamu');
        $tamu->save();

        switch ($jenis) {
            case 'Khusus':
                $validator = Validator::make(request()->all(), [
                    'jabatan_tamu' => 'required',
                    'instansi_tamu' => 'required',
                ]);

                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator->errors())
                        ->withInput($request->input());
                }
                $tamu_khusus = TamuKhusus::where('id_tamu', $id)->first();
                $tamu_khusus->jabatan = $request->get('jabatan_tamu');
                $tamu_khusus->instansi = $request->get('instansi_tamu');
                $tamu_khusus->save();
                break;

            case 'Dinas':
                $validator = Validator::make(request()->all(), [
                    'jabatan_tamu_dinas' => 'required',
                    'instansi_tamu_dinas' => 'required',
                    'nip_tamu' => 'required',
                    'no_surat_tugas_tamu' => 'required',
                ]);

                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator->errors())
                        ->withInput($request->input());
                }

                $tamu_dinas = TamuDinas::where('id_tamu', $id)->first();
                $tamu_dinas->jabatan = $request->get('jabatan_tamu_dinas');
                $tamu_dinas->instansi = $request->get('instansi_tamu_dinas');
                $tamu_dinas->nip = $request->get('nip_tamu');
                $tamu_dinas->no_surat_tugas = $request->get('no_surat_tugas_tamu');
                $tamu_dinas->save();
                break;
            default:

                break;
        }
        return redirect()->route('rt.tamu-kunjungan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TamuKunjungan::where('id_bagian', Auth::user()->id_bagian)->where('id', $id)->delete();
        return redirect()->route('rt.tamu-kunjungan.index');
    }
}
