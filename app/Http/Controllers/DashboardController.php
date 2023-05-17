<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Registrasi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cari = $request->search;

        $data = DB::table('registrasi')
        ->join('jk', 'registrasi.jk_id', '=', 'jk.id')
        ->join('jurusan', 'registrasi.jurusan_id', '=', 'jurusan.id')
        ->select('registrasi.*', 'jk.*', 'jurusan.*')
        ->where([
            // kondisi beda, search sama data yang kurang dari 45000
            ['registrasi.nama', 'LIKE', "%$cari%"],
        ])
        ->orwhere('registrasi.nama', 'LIKE', "%$cari%")
        ->orwhere('jk.jk', 'LIKE', "%$cari%")
        ->orwhere('registrasi.agama', 'LIKE', "%$cari%")
        ->get();

        return view('dashboard.index', compact('data', 'cari'));
    }
    public function cetakpdf()
    {
        $data = Registrasi::all();
        return view('dashboard.cetakpdf', compact('data'));
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
