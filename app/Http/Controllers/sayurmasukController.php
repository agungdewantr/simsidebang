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

      return view('CRUDprodukmasuk-tambah');
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

      return view('CRUDprodukmasuk-tambah');
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
        return redirect('/produkmasuk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\datasayurmasuk  $datasayurmasuk
     * @return \Illuminate\Http\Response
     */
    public function show(datasayurmasuk $datasayurmasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\datasayurmasuk  $datasayurmasuk
     * @return \Illuminate\Http\Response
     */
    public function edit(datasayurmasuk $datasayurmasuk)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\datasayurmasuk  $datasayurmasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy(datasayurmasuk $datasayurmasuk)
    {
        //
    }


}
