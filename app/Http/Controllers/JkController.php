<?php

namespace App\Http\Controllers;

use App\Models\Jk;
use Illuminate\Http\Request;

class JkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $jk;
    // membuat instance dari model artikel
    public function __construct()
    {
        $this->jk = new Jk();
    }

    public function index()
    {
        $data = Jk::all();
        return view('jk.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Jk::all();
        return view('jk.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->jk->jk = $request->jk;
        $this->jk->save();
        return redirect()->route('jk')->with('status', 'Data Buku berhasil di tambahkan');
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
        $edit = Jk::findOrFail($id);
        return view('jk.edit', compact('edit'));
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
        $update = Jk::findOrFail($id);
        if ($update->jk == $request->jk) {
            return redirect()->route('jk');
        } else {


            $update->jk = $request->jk;
            $update->save();
            return redirect()->route('jk')->with('status', 'Data artikel berhasil di update');
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
        $destroy = Jk::findOrFail($id);
        $destroy->delete();
        return redirect()->route('jk')->with('status', 'Data artikel berhasil di hapus');
    }
}
