<?php

namespace App\Http\Controllers;
use PDF;
use App\keuangan;
use DB;
use Illuminate\Http\Request;

class keuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function keuangan()
    {

      if (date('Y-m-d') == date("Y-m-t", strtotime(date('Y-m-d')))) {
        $omzet = DB::table('data_sayur_keluar')
                      ->select(DB::raw('SUM(totalHarga) as omzet'))
                      ->whereMonth('created_at', date("m"))
                      ->whereYear('created_at', date("Y"))
                      ->first();
        $modal = DB::table('data_sayur_masuk')
                      ->select(DB::raw('SUM(totalHarga) as modal'))
                      ->whereMonth('created_at', date("m"))
                      ->whereYear('created_at', date("Y"))
                      ->first();
        $keuntungan = ($omzet->omzet)-($modal->modal);
        $keuanganbulanini = DB::table('keuangan')
                          ->where('bulan', date("m"))
                          ->where('tahun', date("Y"))
                          ->get();
                          if (count($keuanganbulanini) == 0) {
                            DB::table('keuangan')->insert(
                                ['bulan' =>date("m"),
                                'tahun' =>date("Y"),
                                'omzet' => $omzet->omzet,
                                'keuntungan' => $keuntungan]
                            );
                          }
      }
      $keuangan = keuangan::paginate(10);
        return view('CRUDkeuangan-read', compact('keuangan'));
    }

    public function cetakpdf()
      {
      	$keuangan = keuangan::all();
      	$pdf = PDF::loadview('keuanganPdf',['keuangan'=>$keuangan]);
      	return $pdf->download('laporan-pegawai-pdf');
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function show(keuangan $keuangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function edit(keuangan $keuangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, keuangan $keuangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\keuangan  $keuangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(keuangan $keuangan)
    {
        //
    }
}
