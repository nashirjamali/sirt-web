<?php

namespace App\Http\Controllers\RT;

use App\Http\Controllers\Controller;
use App\Models\MutasiWarga;
use App\Models\Warga;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MutasiWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warga = Warga::where('id_bagian', Auth::user()->id_bagian)->pluck('id')->toArray();
        $mutasi = MutasiWarga::whereIn('id_warga', $warga)->get();

        $year = date('Y');

        // Stats Datang
        $stats_datang = [];
        for ($i = 1; $i <= 12; $i++) {
            $get_month = MutasiWarga::whereIn('id_warga', $warga)
                ->whereYear('tgl_mutasi', $year)
                ->whereMonth('tgl_mutasi', $i)
                ->where('status', 'Datang')
                ->groupBy('id')
                ->select(DB::raw('MONTHNAME(tgl_mutasi) as month'), DB::raw('count(id) as total'))
                ->get()
                ->toArray();

            if (!$get_month) {
                array_push($stats_datang, [
                    [
                        'month' => date('F', mktime(0, 0, 0, $i, 10)),
                        'total' => 0
                    ]
                ]);
            } else {
                array_push($stats_datang, $get_month);
            }
        }

        // Stats Pindah
        $stats_pindah = [];
        for ($i = 1; $i <= 12; $i++) {
            $get_month = MutasiWarga::whereIn('id_warga', $warga)
                ->whereYear('tgl_mutasi', $year)
                ->whereMonth('tgl_mutasi', $i)
                ->where('status', 'Pindah')
                ->groupBy('id')
                ->select(DB::raw('MONTHNAME(tgl_mutasi) as month'), DB::raw('count(id) as total'))
                ->get()
                ->toArray();

            if (!$get_month) {
                array_push($stats_pindah, [
                    [
                        'month' => date('F', mktime(0, 0, 0, $i, 10)),
                        'total' => 0
                    ]
                ]);
            } else {
                array_push($stats_pindah, $get_month);
            }
        }

        // Stats Meninggal
        $stats_meninggal = [];
        for ($i = 1; $i <= 12; $i++) {
            $get_month = MutasiWarga::whereIn('id_warga', $warga)
                ->whereYear('tgl_mutasi', $year)
                ->whereMonth('tgl_mutasi', $i)
                ->where('status', 'Meninggal')
                ->groupBy('id')
                ->select(DB::raw('MONTHNAME(tgl_mutasi) as month'), DB::raw('count(id) as total'))
                ->get()
                ->toArray();

            if (!$get_month) {
                array_push($stats_meninggal, [
                    [
                        'month' => date('F', mktime(0, 0, 0, $i, 10)),
                        'total' => 0
                    ]
                ]);
            } else {
                array_push($stats_meninggal, $get_month);
            }
        }


        $data = [
            'mutasi' => $mutasi,
            'stats_datang' => $stats_datang,
            'stats_pindah' => $stats_pindah,
            'stats_meninggal' => $stats_meninggal,
        ];
        return view('pages.rt.penduduk.mutasi_warga.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $warga = Warga::where('id_bagian', Auth::user()->id_bagian)->get();

        $warga = Warga::where('id_bagian', Auth::user()->id_bagian)
            ->whereDoesntHave('mutasi', function (Builder $query) {
                $query->whereIn('mutasi_warga.status', ['Meninggal', 'Pindah']);
            })
            ->get();

        $data = [
            "warga" => $warga
        ];

        return view('pages.rt.penduduk.mutasi_warga.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_warga = $request->get('id_warga');
        foreach ($id_warga as $val) {
            MutasiWarga::create([
                'id_warga' => $val,
                'tgl_mutasi' => $request->get('tgl_mutasi'),
                'status' => $request->get('status'),
            ]);
        }

        return redirect()->route('rt.mutasi.index');
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
            "warga" => $warga
        ];
        return view('pages.rt.penduduk.mutasi_warga.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $warga = Warga::where('id', $id)->first();
        $data = [
            "warga" => $warga,
        ];
        return view('pages.rt.penduduk.mutasi_warga.edit', $data);
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
        $warga = Warga::where('id', $id)->first();

        $mutasi_warga = MutasiWarga::where('id_warga', $warga->id);
        $mutasi_warga->update([
            'tgl_mutasi' => $request->get('tgl_mutasi'),
            'status' => $request->get('status')
        ]);
        return redirect()->route('rt.mutasi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $warga = Warga::where('id', $id)->first();
        MutasiWarga::where('id_warga', $warga->id)->delete();
        return redirect()->route('rt.mutasi.index');
    }
}
