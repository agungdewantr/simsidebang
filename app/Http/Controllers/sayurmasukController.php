<?php

namespace App\Http\Controllers;

use App\datasayurmasuk;
use App\harga;
use Illuminate\Http\Request;

class sayurmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sayurmasuk = \App\datasayurmasuk::all();
      return view('transaksi.CRUDsayurmasuk-read', compact('sayurmasuk'));
    }

    public function getharga()
    {
      $harga = \App\hargabeli::all();
      return response()->json($harga);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      return view('transaksi.CRUDsayurmasuk-tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        datasayurmasuk::create($request->all());
        return redirect('/sayurmasuk')->with('status','Data Harga Sayur Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\datasayurmasuk  $datasayurmasuk
     * @return \Illuminate\Http\Response
     */
    public function show(datasayurmasuk $datasayurmasuk)
    {
      return view('transaksi.detailtransaksimasuk',compact('datasayurmasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\datasayurmasuk  $datasayurmasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(datasayurmasuk $datasayurmasuk)
    {
        return view('transaksi.CRUDsayurmasuk-edit', compact('datasayurmasuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\datasayurmasuk  $datasayurmasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datasayurmasuk $datasayurmasuk)
    {
        $request->validate([
          'namaPenjual'=> 'required',
          'jumlah' => 'required'
        ]);

        datasayurmasuk::where('idSayurMasuk', $datasayurmasuk->idSayurMasuk)
          -> update([
            'namaPenjual' => $request->namaPenjual,
            'jumlah' => $request->jumlah,
            'totalHarga' => $request->totalHarga
          ]);
          return redirect('/sayurmasuk')->with('status','Data Transaksi Sayur Masuk Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\datasayurmasuk  $datasayurmasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(datasayurmasuk $datasayurmasuk)
    {
        datasayurmasuk::destroy($datasayurmasuk->idSayurMasuk);
        return redirect('/sayurmasuk')->with('status','Data Transaksi Sayur Masuk Berhasil Dihapus');
    }


}
