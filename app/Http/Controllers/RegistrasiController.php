<?php

namespace App\Http\Controllers;

use App\Models\Jk;
use App\Models\Jurusan;
use App\Models\Registrasi;
use Illuminate\Http\Request;
use Monolog\Registry;

class RegistrasiController extends Controller
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
        $data = Registrasi::all();
        return view('registrasi.index', compact('data'));
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
        return view('registrasi.create', compact('data', 'data1', 'data2'));
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
        return redirect()->route('registrasi')->with('success','Berhasil Registrasi');
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
        $edit = Registrasi::findOrFail($id);
        $data = Jk::all();
        $data1 = Jurusan::all();
        return view('registrasi.edit', compact('edit', 'data', 'data1'));
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
        $update = Registrasi::findOrFail($id);
        if ($update->no_reg == $request->no_reg && $update->jurusan_id == $request->jurusan_id && $update->nama == $request->nama) {
            return redirect()->route('registrasi');
        } else {


            $update->jurusan_id = $request->jurusan_id;
            $update->jk_id = $request->jk_id;
            $update->no_reg = $request->no_reg;
            $update->nama = $request->nama;
            $update->alamat = $request->alamat;
            $update->agama = $request->agama;
            $update->asal_sekolah = $request->asal_sekolah;
            $update->save();
            return redirect()->route('registrasi')->with('status', 'Data artikel berhasil di update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Registrasi::findOrFail($id);
        $destroy->delete();
        return redirect()->route('registrasi')->with('status', 'Data artikel berhasil di hapus');
    }
}
