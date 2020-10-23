<?php

namespace App\Http\Controllers;

use App\hargajual;
use Illuminate\Http\Request;

class hargajualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $hargajual = \App\hargajual::all();
      return view('CRUDhargajual-read', compact('hargajual'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $hargajual = \App\hargajual::all();
      return view('CRUDhargajual-tambah', compact('hargajual'));
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
        'jenis' => 'required',
        'harga' => 'required'
      ]);
      hargajual::create($request->all());
      return redirect('/kelolahargajual')->with('status','Data Harga Sayur Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hargajual  $hargajual
     * @return \Illuminate\Http\Response
     */
    public function show(hargajual $hargajual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hargajual  $hargajual
     * @return \Illuminate\Http\Response
     */
    public function edit(hargajual $hargajual)
    {
        return view('CRUDhargajual-edit', compact('hargajual'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hargajual  $hargajual
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hargajual $hargajual)
    {
      $request->validate([
        'jenis' => 'required',
        'harga' => 'required'
      ]);
        hargajual::where('idHargajual', $hargajual->idHargajual )
              ->update([
                'jenis' => $request->jenis,
                'harga' => $request->harga
              ]);
        return redirect('/kelolahargajual')->with('status','Data Harga beli Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hargajual  $hargajual
     * @return \Illuminate\Http\Response
     */
    public function destroy(hargajual $hargajual)
    {
      hargajual::destroy($hargajual->idHargajual);
      return redirect('/kelolahargajual')->with('status','Data Harga Sayur Berhasil Dihapus');
    }
}
