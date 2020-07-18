<?php

namespace App\Http\Controllers\RW;

use App\Http\Controllers\Controller;
use App\Models\Bagian;
use App\Models\MutasiWarga;
use App\Models\PendudukSementara;
use App\Models\Warga;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $bagian = Bagian::all()->where('tipe_bagian', 'RT');

        $id_bagian = $request->get('rts');

        if ($id_bagian) {
            $warga = Warga::whereIn('id_bagian', $id_bagian)->orderBy('created_at', 'DESC')->get();
            $jmlh_kk = Warga::whereIn('id_bagian', $id_bagian)->distinct('no_kk')->count('no_kk');
            $jmlh_warga = 0;
            $jmlh_sementara = 0;
            $list_warga = [];
            foreach ($warga as $val) {
                $status = "Tetap";
                $mutasi = MutasiWarga::where('id_warga', $val->id)->where('status', ['Pindah'])->first();
                $sementara = PendudukSementara::where('id_warga', $val->id)->first();

                if ($mutasi) {
                    $status = $mutasi->status;
                } else if ($sementara) {
                    $status = "Sementara";
                }

                if ($status == "Sementara" || $status == "Tetap") {
                    $jmlh_warga++;
                }

                if ($status == "Sementara") {
                    $jmlh_sementara++;
                }

                $x = [
                    "nik" => $val->nik,
                    "nama" => $val->nama,
                    "jkel" => $val->jkel === "P" ? "Perempuan" : "Laki-laki",
                    "alamat" => $val->alamat,
                    "status" => $status,
                    "wilayah" => $val->bagian->nama_bagian,
                    "id" => $val->id
                ];

                array_push($list_warga, $x);
            }

            $jkel = Warga::whereIn('id_bagian', $id_bagian)->groupBy('jkel')->select('jkel', DB::raw('count(*) as total'))->get()->toArray();
            $pekerjaan = Warga::whereIn('id_bagian', $id_bagian)->groupBy('pekerjaan')->select('pekerjaan', DB::raw('count(*) as total'))->get()->toArray();

            $persebaran = [];
            foreach ($id_bagian as $val) {
                $bagian_x = Bagian::where('id', $val)->first();
                $count = Warga::where('id_bagian', $val)
                    ->whereDoesntHave('mutasi', function (Builder $query) {
                        $query->where('mutasi_warga.status', '=', 'Meninggal');
                    })
                    ->count();
                array_push($persebaran, ["nama_bagian" => $bagian_x->nama_bagian, "jmlh_warga" => $count]);
            }
        } else {
            $warga = Warga::orderBy('created_at', 'DESC')->get();
            $jmlh_kk = Warga::distinct('no_kk')->count('no_kk');
            $jmlh_warga = 0;
            $jmlh_sementara = 0;
            $list_warga = [];
            foreach ($warga as $val) {
                $status = "Tetap";
                $mutasi = MutasiWarga::where('id_warga', $val->id)->where('status', ['Pindah'])->first();
                $sementara = PendudukSementara::where('id_warga', $val->id)->first();

                if ($mutasi) {
                    $status = $mutasi->status;
                } else if ($sementara) {
                    $status = "Sementara";
                }

                if ($status == "Sementara" || $status == "Tetap") {
                    $jmlh_warga++;
                }

                if ($status == "Sementara") {
                    $jmlh_sementara++;
                }

                $x = [
                    "nik" => $val->nik,
                    "nama" => $val->nama,
                    "jkel" => $val->jkel === "P" ? "Perempuan" : "Laki-laki",
                    "alamat" => $val->alamat,
                    "status" => $status,
                    "wilayah" => $val->bagian->nama_bagian,
                    "id" => $val->id
                ];

                array_push($list_warga, $x);
            }

            $jkel = Warga::groupBy('jkel')->select('jkel', DB::raw('count(*) as total'))->get()->toArray();
            $pekerjaan = Warga::groupBy('pekerjaan')->select('pekerjaan', DB::raw('count(*) as total'))->get()->toArray();

            $persebaran = [];
            foreach ($bagian as $val) {
                $count = Warga::where('id_bagian', $val->id)
                    ->whereDoesntHave('mutasi', function (Builder $query) {
                        $query->where('mutasi_warga.status', '=', 'Meninggal');
                    })
                    ->count();
                array_push($persebaran, ["nama_bagian" => $val->nama_bagian, "jmlh_warga" => $count]);
            }
        }

        $data = [
            'bagian' => $bagian,
            'jmlh_warga' => $jmlh_warga,
            'jmlh_kk' => $jmlh_kk,
            'jmlh_sementara' => $jmlh_sementara,
            'list_warga' => $list_warga,
            'jkel' => $jkel,
            'pekerjaan' => $pekerjaan,
            'persebaran' => $persebaran,
            'id_bagian' => $id_bagian,
        ];

        return view('pages.rw.penduduk.index', $data);
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
        $warga = Warga::where('id', $id)->first();
        $data = [
            'warga' => $warga,
        ];
        return view('pages.rw.penduduk.detail', $data);
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
