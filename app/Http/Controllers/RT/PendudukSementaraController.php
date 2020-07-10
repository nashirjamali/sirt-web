<?php

namespace App\Http\Controllers\RT;

use App\Http\Controllers\Controller;
use App\Models\PendudukSementara;
use App\Models\Warga;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PendudukSementaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warga = Warga::where('id_bagian', Auth::user()->id_bagian)->pluck('id')->toArray();
        $penduduk_sementara = PendudukSementara::whereIn('id_warga', $warga)->get();

        $year = date('Y');
        $stats = [];
        for ($i = 1; $i <= 12; $i++) {
            $get_month = PendudukSementara::whereIn('id_warga', $warga)
                ->whereYear('created_at', $year)
                ->whereMonth('created_at', $i)
                ->groupBy('id')
                ->select(DB::raw('MONTHNAME(created_at) as month'), DB::raw('count(id) as total'))
                ->get()
                ->toArray();

            if (!$get_month) {
                array_push($stats, [
                    [
                        'month' => date('F', mktime(0, 0, 0, $i, 10)),
                        'total' => 0
                    ]
                ]);
            } else {
                array_push($stats, $get_month);
            }
        }

        $data = [
            'penduduk_sementara' => $penduduk_sementara,
            'stats' => $stats,
        ];

        return view('pages.rt.penduduk.penduduk_sementara.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $warga = Warga::where('id_bagian', Auth::user()->id_bagian)
            ->whereDoesntHave('pendudukSementara')
            ->whereDoesntHave('mutasi', function (Builder $query) {
                $query->where('mutasi_warga.status', '=', 'Meninggal');
            })
            ->get();

        $daftar_pemilik = Warga::where('id_bagian', Auth::user()->id_bagian)
            ->whereDoesntHave('pendudukSementara')
            ->get();

        $data = [
            "warga" => $warga,
            "daftar_pemilik" => $daftar_pemilik
        ];
        return view('pages.rt.penduduk.penduduk_sementara.create', $data);
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
            PendudukSementara::create([
                'id_warga' => $val,
                'id_pemilik_rumah' => $request->get('id_pemilik'),
                'status' => $request->get('status')
            ]);
        }
        return redirect()->route('rt.penduduk-sementara.index');
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
        return view('pages.rt.penduduk.penduduk_sementara.detail', $data);
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
        $daftar_pemilik = Warga::where('id_bagian', Auth::user()->id_bagian)
            ->whereDoesntHave('pendudukSementara')
            ->get();
        $data = [
            "warga" => $warga,
            "daftar_pemilik" => $daftar_pemilik
        ];
        return view('pages.rt.penduduk.penduduk_sementara.edit', $data);
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

        $penduduk_sementara = PendudukSementara::where('id_warga', $warga->id);
        $penduduk_sementara->update([
            'id_pemilik_rumah' => $request->get('id_pemilik'),
            'status' => $request->get('status')
        ]);
        return redirect()->route('rt.penduduk-sementara.index');
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
        PendudukSementara::where('id_warga', $warga->id)->delete();
        return redirect()->route('rt.penduduk-sementara.index');
    }
}
