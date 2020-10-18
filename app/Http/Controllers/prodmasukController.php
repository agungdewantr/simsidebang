<?php

namespace App\Http\Controllers;

use App\produkmasuk;
use App\harga;
use Illuminate\Http\Request;

class prodmasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // $harga = \App\harga::pluck('jenis','harga');
      // return view('CRUDprodukmasuk-tambah',compact('harga'));
      $harga = \App\harga::all();
      return view('CRUDprodukmasuk-tambah',compact('harga'));
    }

    public function buang()
    {
      $harga = \App\harga::where('idHarga','1')->get();
      return view('CRUDprodukmasuk-tambah',['harga' => $harga]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $harga = \App\harga::all();
      return view('CRUDprodukmasuk-tambah',compact('harga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\produkmasuk  $produkmasuk
     * @return \Illuminate\Http\Response
     */
    public function show(produkmasuk $produkmasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\produkmasuk  $produkmasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(produkmasuk $produkmasuk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\produkmasuk  $produkmasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, produkmasuk $produkmasuk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\produkmasuk  $produkmasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(produkmasuk $produkmasuk)
    {
        //
    }
}
