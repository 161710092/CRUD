<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gurus;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gurus = gurus::all();
        return view('guru.index', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guru.create');
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
            'nip'=>'required|unique:gurus|max:255',
            'nama'=>'required|min:2'
        ]);

        $gurus = new gurus;
        $gurus->nip = $request->nip;
        $gurus->nama = $request->nama;
        $gurus->save();
        return redirect()->route('guru.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gurus = gurus::findOrFail($id);
        return view('guru.show', compact('gurus'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gurus = gurus::findOrFail($id);
        return view('guru.edit', compact('gurus'));
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
            'nip'=>'required|max:255',
            'nama'=>'required|min:2'
        ]);

        $gurus = gurus::findOrFail($id);
        $gurus->nip = $request->nip;
        $gurus->nama = $request->nama;
        $gurus->save();
        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gurus = gurus::findOrFail($id);
        $gurus->delete();
        return redirect()->route('guru.index');
    }
}
