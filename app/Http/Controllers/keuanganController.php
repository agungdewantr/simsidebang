<?php

namespace App\Http\Controllers;
use PDF;
use App\keuangan;
use DB;
use Carbon;
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
                                ['waktu' =>date("Y-m-d"),
                                'omzet' => $omzet->omzet,
                                'keuntungan' => $keuntungan]
                            );
                          }
      }
      $keuangan = keuangan::paginate(10);
      return view('CRUDkeuangan-read', compact('keuangan'));
    }

    public function cetakpdf(Request $request){
      $keuangan = DB::table('keuangan')
                  ->where('waktu', '>=' , $request->bulan1."-31")
                  ->where('waktu', '<=' , $request->bulan2."-31")
                  ->get();
                  if (count($keuangan) == 0) {
                    $keuangan = "Tidak ada data keuangan untuk range bulan tersebut!";
                    return view('CRUDkeuangan-read', compact('keuangan'));
                  } else {
                    $pdf = PDF::loadview('keuanganPdf',compact('keuangan'));
                    return $pdf->stream();
                  }
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
