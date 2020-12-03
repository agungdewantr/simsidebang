<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\datasayurkeluar;
use App\harga;
use DB;

class sayurkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sayurkeluar = DB::table('data_sayur_keluar')
            ->join('hargajual', 'hargajual.idHargajual', '=', 'data_sayur_keluar.idHargajual')
            ->select('hargajual.jenis','data_sayur_keluar.namaPenerima','data_sayur_keluar.jumlah','data_sayur_keluar.totalHarga','data_sayur_keluar.idSayurKeluar','data_sayur_keluar.kotaTujuan')
            ->orderby('data_sayur_keluar.created_at', 'desc')
            ->get();
      return view('transaksi.CRUDsayurkeluar-read', compact('sayurkeluar'));
    }

    public function getharga()
    {
      $harga = \App\hargajual::all();
      return response()->json($harga);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transaksi.CRUDsayurkeluar-tambah');
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
        'jenis' => 'required|exists:hargajual,jenis',
        'namaPenerima' => 'required',
        'namaSopir' => 'required',
        'kotaTujuan' => 'required',
        'jumlah' => 'required'
      ]);
        datasayurkeluar::create($request->all());
        return redirect('/sayurkeluar')->with('status','Data Transaksi Sayur Keluar Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(datasayurkeluar $datasayurkeluar)
    {
      $id = $datasayurkeluar->idSayurKeluar;
      $sayurkeluar = DB::table('data_sayur_keluar')
            ->join('hargajual', 'hargajual.idHargajual', '=', 'data_sayur_keluar.idHargajual')
            ->select('hargajual.jenis','data_sayur_keluar.namaPenerima','data_sayur_keluar.jumlah','data_sayur_keluar.hargajual',
            'data_sayur_keluar.totalHarga','data_sayur_keluar.idSayurKeluar','data_sayur_keluar.created_at',
            'data_sayur_keluar.kotaTujuan','data_sayur_keluar.notelpSopir','data_sayur_keluar.namaSopir','data_sayur_keluar.idHargajual')
            ->where('data_sayur_keluar.idSayurkeluar', '=', "$id")
            ->get();
      return view('transaksi.detailtransaksikeluar',compact('sayurkeluar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(datasayurkeluar $datasayurkeluar)
    {
      $id = $datasayurkeluar->idSayurKeluar;
      $sayurkeluar = DB::table('data_sayur_keluar')
            ->join('hargajual', 'hargajual.idHargajual', '=', 'data_sayur_keluar.idHargajual')
            ->select('hargajual.jenis','data_sayur_keluar.namaPenerima','data_sayur_keluar.jumlah','data_sayur_keluar.hargajual',
            'data_sayur_keluar.totalHarga','data_sayur_keluar.idSayurKeluar','data_sayur_keluar.created_at',
            'data_sayur_keluar.kotaTujuan','data_sayur_keluar.notelpSopir','data_sayur_keluar.namaSopir','data_sayur_keluar.idHargajual')
            ->where('data_sayur_keluar.idSayurkeluar', '=', "$id")
            ->get();
      return view('transaksi.CRUDsayurkeluar-edit',compact('sayurkeluar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datasayurkeluar $datasayurkeluar)
    {
      $request->validate([
        'namaPenerima'=> 'required',
        'kotaTujuan'=> 'required',
        'namaSopir'=> 'required',
        'jumlah' => 'required'
      ]);

      datasayurkeluar::where('idSayurKeluar', $datasayurkeluar->idSayurKeluar)
        -> update([
          'namaPenerima' => $request->namaPenerima,
          'jumlah' => $request->jumlah,
          'kotaTujuan' => $request->kotaTujuan,
          'namaSopir' => $request->namaSopir,
          'notelpSopir' => $request->notelpSopir,
          'totalHarga' => $request->totalHarga
        ]);
        return redirect('/sayurkeluar')->with('status','Data Transaksi Sayur Keluar Berhasil Diubah');
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
