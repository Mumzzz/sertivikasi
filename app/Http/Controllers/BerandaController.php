<?php

namespace App\Http\Controllers;

use App\Models\Jk;
use App\Models\Jurusan;
use App\Models\Registrasi;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $registrasi;
    // membuat instance dari model artikel
    public function __construct()
    {
        $this->registrasi = new Registrasi();
    }
    public function index()
    {
        return view('beranda.beranda');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Registrasi::all();
        $data1 = Jk::all();
        $data2 = Jurusan::all();
        return view('beranda.create', compact('data', 'data1', 'data2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->registrasi->no_reg = $request->no_reg;
        $this->registrasi->jk_id = $request->jk_id;
        $this->registrasi->nama = $request->nama;
        $this->registrasi->alamat = $request->alamat;
        $this->registrasi->asal_sekolah = $request->asal_sekolah;
        $this->registrasi->agama = $request->agama;
        $this->registrasi->jurusan_id = $request->jurusan_id;
        $this->registrasi->save();
        return redirect()->route('beranda')->with('success', 'Berhasil Registrasi');
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
