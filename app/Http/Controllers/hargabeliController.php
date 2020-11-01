<?php

namespace App\Http\Controllers;

use App\hargabeli;
use Illuminate\Http\Request;

class hargabeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hargabeli = \App\hargabeli::all();
        return view('harga.CRUDhargabeli-read', compact('hargabeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $hargabeli = \App\hargabeli::all();
      return view('harga.CRUDhargabeli-tambah', compact('hargabeli'));
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
        hargabeli::create($request->all());
        return redirect('/kelolahargabeli')->with('status','Data Harga Sayur Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hargabeli  $hargabeli
     * @return \Illuminate\Http\Response
     */
    public function show(hargabeli $hargabeli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hargabeli  $hargabeli
     * @return \Illuminate\Http\Response
     */
    public function edit(hargabeli $hargabeli)
    {
        return view('harga.CRUDhargabeli-edit', compact('hargabeli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hargabeli  $hargabeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hargabeli $hargabeli)
    {
      $request->validate([
        'jenis' => 'required',
        'harga' => 'required'
      ]);
        hargabeli::where('idHargabeli', $hargabeli->idHargabeli )
              ->update([
                'jenis' => $request->jenis,
                'harga' => $request->harga
              ]);
        return redirect('/kelolahargabeli')->with('status','Data Harga beli Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hargabeli  $hargabeli
     * @return \Illuminate\Http\Response
     */
    public function destroy(hargabeli $hargabeli)
    {
        hargabeli::destroy($hargabeli->idHargabeli);
        return redirect('/kelolahargabeli')->with('status','Data Harga Sayur Berhasil Dihapus');
    }
}
