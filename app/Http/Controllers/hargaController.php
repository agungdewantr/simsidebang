<?php

namespace App\Http\Controllers;

use App\harga;
use Illuminate\Http\Request;

class hargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $harga = \App\harga::all();
        return view('CRUDharga', compact('harga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $harga = \App\harga::all();
      return view('CRUDharga-tambah', compact('harga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        harga::create($request->all());
        return redirect('/kelolaharga');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function show(harga $harga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function edit(harga $harga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, harga $harga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\harga  $harga
     * @return \Illuminate\Http\Response
     */
    public function destroy(harga $harga)
    {
        //
    }
}
