<?php

namespace App\Http\Controllers\RW;

use App\Http\Controllers\Controller;
use App\Models\InventarisBarang;
use App\Models\InventarisPerpustakaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = InventarisBarang::where('id_bagian', Auth::user()->id_bagian)->get();
        $perpustakaan = InventarisPerpustakaan::where('id_bagian', Auth::user()->id_bagian)->get();
        $data = [
            "barang" => $barang,
            "perpustakaan" => $perpustakaan
        ];
        return view('pages.rw.inventaris.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.rw.inventaris.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jenis = $request->get('jenis_inventaris');

        switch ($jenis) {
            case 'Barang':
                $validator = Validator::make(request()->all(), [
                    'kode_barang' => 'required',
                    'nama_barang' => 'required',
                    'brg_tanggal_perolehan' => 'required|date',
                    'brg_kelengkapan_dokumen' => 'required|in:Lengkap,Tidak',
                    'brg_kuantitas' => 'required|numeric',
                    'brg_satuan' => 'required',
                    'brg_asal' => 'required|in:Beli,Hibah,Hadiah,Wakaf,Sumbangan',
                    'brg_kondisi' => 'required|in:Sangat Baik,Baik,Sangat Rusak,Rusak',
                    'brg_harga' => 'required|numeric',
                ]);

                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator->errors())
                        ->withInput($request->input());
                }
                InventarisBarang::create([
                    'id_bagian' => Auth::user()->id_bagian,
                    'kode_barang' => $request->get('kode_barang'),
                    'nama_barang' => $request->get('nama_barang'),
                    'tgl_perolehan' => $request->get('brg_tanggal_perolehan'),
                    'kelengkapan_dokumen' => $request->get('brg_kelengkapan_dokumen'),
                    'kuantitas' => $request->get('brg_kuantitas'),
                    'satuan' => $request->get('brg_satuan'),
                    'asal' => $request->get('brg_asal'),
                    'kondisi' => $request->get('brg_kondisi'),
                    'harga' => $request->get('brg_harga')
                ]);
                break;

            case 'Perpustakaan':
                $validator = Validator::make(request()->all(), [
                    'kode_buku' => 'required',
                    'judul_buku' => 'required',
                    'pengarang_buku' => 'required',
                    'penerbit_buku' => 'required',
                    'tahun_terbit_buku' => 'required|date_format:Y',
                    'buku_tanggal_perolehan' => 'required|date',
                    'buku_kepemilikan_dokumen' => 'required|in:Lengkap,Tidak',
                    'buku_kuantitas' => 'required|numeric',
                    'buku_asal' => 'required|in:Beli,Hibah,Hadiah,Wakaf,Sumbangan',
                    'buku_kondisi' => 'required|in:Sangat Baik,Baik,Sangat Rusak,Rusak',
                ]);

                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator->errors())
                        ->withInput($request->input());
                }

                InventarisPerpustakaan::create([
                    'id_bagian' => Auth::user()->id_bagian,
                    'kode_buku' => $request->get('kode_buku'),
                    'judul' => $request->get('judul_buku'),
                    'pengarang' => $request->get('pengarang_buku'),
                    'penerbit' => $request->get('penerbit_buku'),
                    'tahun_terbit' => $request->get('tahun_terbit_buku'),
                    'tgl_dimiliki' => $request->get('buku_tanggal_perolehan'),
                    'kepemilikan_dokumen' => $request->get('buku_kepemilikan_dokumen'),
                    'asal' => $request->get('buku_asal'),
                    'jumlah_buku' => $request->get('buku_kuantitas'),
                    'kondisi_buku' => $request->get('buku_kondisi'),
                ]);
                break;
            default:

                break;
        }
        return redirect()->route('rw.inventaris.index');
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
