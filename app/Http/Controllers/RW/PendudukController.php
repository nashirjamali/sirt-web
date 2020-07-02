<?php

namespace App\Http\Controllers\RW;

use App\Http\Controllers\Controller;
use App\Models\Bagian;
use App\Models\MutasiWarga;
use App\Models\PendudukSementara;
use App\Models\Warga;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PendudukController extends Controller
{
    public function index()
    {
        $rt = Bagian::where('tipe_bagian', 'RT')->get();
        $data = [
            'rt' => $rt,
        ];
        return view('pages.rw.penduduk.index', $data);
    }

    public function getWarga()
    {
        $models = Warga::all();

        $warga = [];
        foreach ($models as $val) {
            $status = "Tetap";
            $mutasi = MutasiWarga::where('id_warga', $val->id)->where('status', ['Pindah'])->first();
            $sementara = PendudukSementara::where('id_warga', $val->id)->first();

            if ($mutasi) {
                $status = $mutasi->status;
            } else if ($sementara) {
                $status = "Sementara";
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

            array_push($warga, $x);
        }

        return DataTables::of($warga)->make(true);
    }
}
