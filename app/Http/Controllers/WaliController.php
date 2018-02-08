<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\walis;

class WaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $walis = walis::all();
        return view('wali.index', compact('walis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('wali.create');
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
            'nama'=>'required|max:255',
            'no_telp'=>'required|unique:walis|min:11'
        ]);

        $walis = new walis;
        $walis->nama = $request->nama;
        $walis->no_telp = $request->no_telp;
        $walis->save();
        return redirect()->route('wali.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $walis = walis::findOrFail($id);
        return view('wali.show', compact('walis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $walis = walis::findOrFail($id);
        return view('wali.edit', compact('walis'));
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
            'nama'=>'required|max:255',
            'no_telp'=>'required|min:11'
        ]);

        $walis = walis::findOrFail($id);
        $walis->nama = $request->nama;
        $walis->no_telp = $request->no_telp;
        $walis->save();
        return redirect()->route('wali.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $walis = walis::findOrFail($id);
        $walis->delete();
        return redirect()->route('wali.index');
    }
}
