<?php

namespace App\Http\Controllers\RW;

use App\Http\Controllers\Controller;
use App\Models\InventarisATK;
use App\Models\InventarisBarang;
use App\Models\InventarisPerpustakaan;
use App\Models\InventarisTanahBangunan;
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
        $tanah_bangunan = InventarisTanahBangunan::where('id_bagian', Auth::user()->id_bagian)->get();
        $atk = InventarisATK::where('id_bagian', Auth::user()->id_bagian)->get();
        $data = [
            "barang" => $barang,
            "perpustakaan" => $perpustakaan,
            "tanah_bangunan" => $tanah_bangunan,
            "atk" => $atk,
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

            case 'Tanah Bangunan':
                $validator = Validator::make(request()->all(), [
                    'kode_tanah' => 'required',
                    'tanah_tanggal_perolehan' => 'required|date',
                    'tanah_kelengkapan_dokumen' => 'required|in:Lengkap,Tidak',
                    'tanah_asal' => 'required|in:Beli,Hibah,Hadiah,Wakaf,Sumbangan',
                    'tanah_alamat' => 'required',
                    'tanah_luas' => 'required|numeric',
                ]);

                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator->errors())
                        ->withInput($request->input());
                }

                InventarisTanahBangunan::create([
                    'id_bagian' => Auth::user()->id_bagian,
                    'kode_tanah' => $request->get('kode_tanah'),
                    'tgl_dimiliki' => $request->get('tanah_tanggal_perolehan'),
                    'asal' => $request->get('tanah_asal'),
                    'kelengkapan_dokumen' => $request->get('tanah_kelengkapan_dokumen'),
                    'alamat' => $request->get('tanah_alamat'),
                    'luas' => $request->get('tanah_luas')
                ]);
                break;

            case 'ATK':
                $validator = Validator::make(request()->all(), [
                    'kode_atk' => 'required',
                    'nama_atk' => 'required',
                    'atk_tanggal_perolehan' => 'required|date',
                    'atk_kelengkapan_dokumen' => 'required|in:Lengkap,Tidak',
                    'atk_asal' => 'required|in:Beli,Hibah,Hadiah,Wakaf,Sumbangan',
                    'atk_kuantitas' => 'required|numeric',
                ]);

                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator->errors())
                        ->withInput($request->input());
                }

                InventarisATK::create([
                    'id_bagian' => Auth::user()->id_bagian,
                    'kode_atk' => $request->get('kode_atk'),
                    'nama_atk' => $request->get('nama_atk'),
                    'tgl_dimiliki' => $request->get('atk_tanggal_perolehan'),
                    'kelengkapan_dokumen' => $request->get('atk_kelengkapan_dokumen'),
                    'asal' => $request->get('atk_asal'),
                    'jumlah' => $request->get('atk_kuantitas')
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
    public function show($id, Request $request)
    {
        $jenis = $request->get('jenis');
        switch ($jenis) {
            case 'barang':
                $inventaris = InventarisBarang::where('id', $id)->where('id_bagian', Auth::user()->id_bagian)->first();
                break;

            case 'perpustakaan':
                $inventaris = InventarisPerpustakaan::where('id', $id)->where('id_bagian', Auth::user()->id_bagian)->first();
                break;

            case 'tanah_bangunan':
                $inventaris = InventarisTanahBangunan::where('id', $id)->where('id_bagian', Auth::user()->id_bagian)->first();
                break;

            case 'atk':
                $inventaris = InventarisATK::where('id', $id)->where('id_bagian', Auth::user()->id_bagian)->first();
                break;

            default:
                return redirect()->route('rw.inventaris.index');
                break;
        }

        if ($inventaris == null) {
            return redirect()->route('rw.inventaris.index');
        }

        $data = [
            'inventaris' => $inventaris,
            'jenis' => $jenis,
        ];
        return view('pages.rw.inventaris.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $jenis = $request->get('jenis');
        switch ($jenis) {
            case 'barang':
                $inventaris = InventarisBarang::where('id', $id)->where('id_bagian', Auth::user()->id_bagian)->first();
                break;

            case 'perpustakaan':
                $inventaris = InventarisPerpustakaan::where('id', $id)->where('id_bagian', Auth::user()->id_bagian)->first();
                break;

            case 'tanah_bangunan':
                $inventaris = InventarisTanahBangunan::where('id', $id)->where('id_bagian', Auth::user()->id_bagian)->first();
                break;

            case 'atk':
                $inventaris = InventarisATK::where('id', $id)->where('id_bagian', Auth::user()->id_bagian)->first();
                break;

            default:
                return redirect()->route('rw.inventaris.index');
                break;
        }

        if ($inventaris == null) {
            return redirect()->route('rw.inventaris.index');
        }

        $data = [
            'inventaris' => $inventaris,
            'jenis' => $jenis,
        ];
        return view('pages.rw.inventaris.edit', $data);
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
        $jenis = $request->get('jenis');
        switch ($jenis) {
            case 'barang':
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
                $inventaris = InventarisBarang::where('id', $id)->where('id_bagian', Auth::user()->id_bagian)->first();
                if ($inventaris == null) {
                    return redirect()->route('rt.inventaris.index');
                }
                $inventaris->kode_barang = $request->get('kode_barang');
                $inventaris->nama_barang = $request->get('nama_barang');
                $inventaris->tgl_perolehan = $request->get('brg_tanggal_perolehan');
                $inventaris->kelengkapan_dokumen = $request->get('brg_kelengkapan_dokumen');
                $inventaris->kuantitas = $request->get('brg_kuantitas');
                $inventaris->satuan = $request->get('brg_satuan');
                $inventaris->asal = $request->get('brg_asal');
                $inventaris->kondisi = $request->get('brg_kondisi');
                $inventaris->harga = $request->get('brg_harga');
                $inventaris->save();
                break;

            case 'perpustakaan':
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

                $inventaris = InventarisPerpustakaan::where('id', $id)->where('id_bagian', Auth::user()->id_bagian)->first();
                if ($inventaris == null) {
                    return redirect()->route('rt.inventaris.index');
                }
                $inventaris->kode_buku = $request->get('kode_buku');
                $inventaris->judul = $request->get('judul_buku');
                $inventaris->pengarang = $request->get('pengarang_buku');
                $inventaris->penerbit = $request->get('penerbit_buku');
                $inventaris->tahun_terbit = $request->get('tahun_terbit_buku');
                $inventaris->tgl_dimiliki = $request->get('buku_tanggal_perolehan');
                $inventaris->kepemilikan_dokumen = $request->get('buku_kepemilikan_dokumen');
                $inventaris->asal = $request->get('buku_asal');
                $inventaris->jumlah_buku = $request->get('buku_kuantitas');
                $inventaris->kondisi_buku = $request->get('buku_kondisi');
                $inventaris->save();
                break;

            case 'tanah_bangunan':
                $validator = Validator::make(request()->all(), [
                    'kode_tanah' => 'required',
                    'tanah_tanggal_perolehan' => 'required|date',
                    'tanah_kelengkapan_dokumen' => 'required|in:Lengkap,Tidak',
                    'tanah_asal' => 'required|in:Beli,Hibah,Hadiah,Wakaf,Sumbangan',
                    'tanah_alamat' => 'required',
                    'tanah_luas' => 'required|numeric',
                ]);

                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator->errors())
                        ->withInput($request->input());
                }
                $inventaris = InventarisTanahBangunan::where('id', $id)->where('id_bagian', Auth::user()->id_bagian)->first();
                if ($inventaris == null) {
                    return redirect()->route('rt.inventaris.index');
                }
                $inventaris->kode_tanah = $request->get('kode_tanah');
                $inventaris->tgl_dimiliki = $request->get('tanah_tanggal_perolehan');
                $inventaris->asal = $request->get('tanah_asal');
                $inventaris->kelengkapan_dokumen = $request->get('tanah_kelengkapan_dokumen');
                $inventaris->alamat = $request->get('tanah_alamat');
                $inventaris->luas = $request->get('tanah_luas');
                $inventaris->save();
                break;


            case 'atk':
                $validator = Validator::make(request()->all(), [
                    'kode_atk' => 'required',
                    'nama_atk' => 'required',
                    'atk_tanggal_perolehan' => 'required|date',
                    'atk_kelengkapan_dokumen' => 'required|in:Lengkap,Tidak',
                    'atk_asal' => 'required|in:Beli,Hibah,Hadiah,Wakaf,Sumbangan',
                    'atk_kuantitas' => 'required|numeric',
                ]);

                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator->errors())
                        ->withInput($request->input());
                }
                $inventaris = InventarisATK::where('id', $id)->where('id_bagian', Auth::user()->id_bagian)->first();
                if ($inventaris == null) {
                    return redirect()->route('rt.inventaris.index');
                }
                $inventaris->kode_atk = $request->get('kode_atk');
                $inventaris->nama_atk = $request->get('nama_atk');
                $inventaris->tgl_dimiliki = $request->get('atk_tanggal_perolehan');
                $inventaris->kelengkapan_dokumen = $request->get('atk_kelengkapan_dokumen');
                $inventaris->asal = $request->get('atk_asal');
                $inventaris->jumlah = $request->get('atk_kuantitas');
                $inventaris->save();
                break;

            default:
                break;
        }
        return redirect()->route('rw.inventaris.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $jenis = $request->get('jenis');
        switch ($jenis) {
            case 'barang':
                InventarisBarang::where('id', $id)->delete();
                break;

            case 'perpustakaan':
                InventarisPerpustakaan::where('id', $id)->delete();
                break;

            case 'tanah_bangunan':
                InventarisTanahBangunan::where('id', $id)->delete();
                break;

            case 'atk':
                InventarisATK::where('id', $id)->delete();
                break;

            default:
                break;
        }
        return redirect()->route('rw.inventaris.index');
    }
}
