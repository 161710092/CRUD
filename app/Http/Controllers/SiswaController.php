<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswas = siswas::all();
        return view('siswa.index', compact('siswas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis'=>'required|unique:siswas|max:255',
            'nama'=>'required|min:2'
        ]);

        $siswas = new siswas;
        $siswas->nis = $request->nis;
        $siswas->nama = $request->nama;
        $siswas->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswas = siswas::findOrFail($id);
        return view('siswa.show', compact('siswas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswas = siswas::findOrFail($id);
        return view('siswa.edit', compact('siswas'));
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
        $this->validate($request, [
            'nis'=>'required|max:255',
            'nama'=>'required|min:2'
        ]);

        $siswas = siswas::findOrFail($id);
        $siswas->nis = $request->nis;
        $siswas->nama = $request->nama;
        $siswas->save();
        return redirect()->route('siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswas = siswas::findOrFail($id);
        $siswas->delete();
        return redirect()->route('siswa.index');
    }
}
