<?php

namespace App\Http\Controllers\RW;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumumanLast = Pengumuman::where('id_bagian', Auth::user()->id_bagian)->take(3)->get();

        $last = [];

        foreach ($pengumumanLast as $val) {
            $x = [
                'id' => $val->id,
                'judul_pengumuman' => $val->judul_pengumuman,
                'isi_pengumuman' => $this->character_limiter($val->isi_pengumuman, 50),
                'tgl_pengumuman' => $val->tgl_pengumuman
            ];

            array_push($last, $x);
        }


        $pengumuman = Pengumuman::where('id_bagian', Auth::user()->id_bagian)->get();
        $data = [
            "last" => $last,
            "pengumuman_last" => $pengumumanLast,
            "pengumuman" => $pengumuman,
        ];
        return view('pages.rw.pengumuman.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.rw.pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'judul' => 'required',
            'isi' => 'required',
            'tgl' => 'required|date'
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator->errors())
                ->withInput($request->input());
        }

        Pengumuman::create([
            'id_bagian' => Auth::user()->id_bagian,
            'judul_pengumuman' => $request->get('judul'),
            'isi_pengumuman' => $request->get('isi'),
            'tgl_pengumuman' => $request->get('tgl'),
        ]);

        return redirect()->route('rw.pengumuman.index');
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

    function character_limiter($str, $n = 500, $end_char = '....')
    {
        if (strlen($str) < $n) {
            return $str;
        }

        $str = preg_replace("/\s+/", ' ', str_replace(array("\r\n", "\r", "\n"), ' ', $str));

        if (strlen($str) <= $n) {
            return $str;
        }

        $out = "";
        foreach (explode(' ', trim($str)) as $val) {
            $out .= $val . ' ';

            if (strlen($out) >= $n) {
                $out = trim($out);
                return (strlen($out) == strlen($str)) ? $out : $out . $end_char;
            }
        }
    }
}
