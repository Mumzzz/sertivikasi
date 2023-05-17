<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $jurusan;
    // membuat instance dari model artikel
    public function __construct()
    {
        $this->jurusan = new Jurusan();
    }
    public function index()
    {
        $data = Jurusan::all();
        return view('jurusan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Jurusan::all();
        return view('jurusan.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->jurusan->jurusan = $request->jurusan;
        $this->jurusan->save();
        return redirect()->route('jurusan')->with('status', 'Data Buku berhasil di tambahkan');
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
        $edit = Jurusan::findOrFail($id);
        return view('jurusan.edit', compact('edit'));
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
        $update = Jurusan::findOrFail($id);
        if ($update->jurusan == $request->jurusan) {
            return redirect()->route('jurusan');
        } else {


            $update->jurusan = $request->jurusan;
            $update->save();
            return redirect()->route('jurusan')->with('status', 'Data artikel berhasil di update');
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
        $destroy = Jurusan::findOrFail($id);
        $destroy->delete();
        return redirect()->route('jurusan')->with('status', 'Data artikel berhasil di hapus');
    }
}
