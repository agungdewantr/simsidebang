<?php

namespace App\Http\Controllers;

use App\datasayurmasuk;
use App\harga;
use DB;
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
      $sayurmasuk = DB::table('data_sayur_masuk')
            ->join('hargabeli', 'hargabeli.idHargabeli', '=', 'data_sayur_masuk.idHargabeli')
            ->select('hargabeli.jenis','data_sayur_masuk.namaPenjual','data_sayur_masuk.jumlah',
            'data_sayur_masuk.totalHarga','data_sayur_masuk.idSayurMasuk')
            ->get();
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
      $request->validate([
        'jenis' => 'required',
        'namaPenjual' => 'required',
        'jumlah' => 'required'
      ]);
        datasayurmasuk::create($request->all());
        return redirect('/sayurmasuk')->with('status','Data Transaksi Sayur Masuk Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\datasayurmasuk  $datasayurmasuk
     * @return \Illuminate\Http\Response
     */
    public function show(datasayurmasuk $datasayurmasuk)
    {
      $id = $datasayurmasuk->idSayurMasuk;
      $sayurmasuk = DB::table('data_sayur_masuk')
            ->join('hargabeli', 'hargabeli.idHargabeli', '=', 'data_sayur_masuk.idHargabeli')
            ->select('hargabeli.jenis','data_sayur_masuk.namaPenjual','data_sayur_masuk.jumlah','data_sayur_masuk.hargabeli','data_sayur_masuk.totalHarga','data_sayur_masuk.idSayurMasuk','data_sayur_masuk.created_at')
            ->where('data_sayur_masuk.idSayurMasuk', '=', "$id")
            ->get();
      return view('transaksi.detailtransaksimasuk',compact('sayurmasuk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\datasayurmasuk  $datasayurmasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(datasayurmasuk $datasayurmasuk)
    {
      $id = $datasayurmasuk->idSayurMasuk;
      $sayurmasuk = DB::table('data_sayur_masuk')
            ->join('hargabeli', 'hargabeli.idHargabeli', '=', 'data_sayur_masuk.idHargabeli')
            ->select('hargabeli.jenis','data_sayur_masuk.namaPenjual','data_sayur_masuk.jumlah','data_sayur_masuk.hargabeli','data_sayur_masuk.totalHarga','data_sayur_masuk.idSayurMasuk','data_sayur_masuk.created_at')
            ->where('data_sayur_masuk.idSayurMasuk', '=', "$id")
            ->get();
      return view('transaksi.CRUDsayurmasuk-edit',compact('sayurmasuk'));
        // return view('transaksi.CRUDsayurmasuk-edit', compact('datasayurmasuk'));
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
          return redirect('/sayurmasuk')->with('status','Data Transaksi Sayur Masuk Berhasil Diubah');
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
