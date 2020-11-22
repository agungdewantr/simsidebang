<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use DB;

class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $prediksi = DB::table('prediksi')
                  ->join('hargajual', 'hargajual.idHargajual', '=', 'prediksi.idJenisSayur')
                  ->select('hargajual.jenis','prediksi.dataBulanPertama','prediksi.dataBulanKedua','prediksi.dataBulanKetiga','bulanPrediksi','tahunPrediksi','hasilPrediksi')
                  ->orderBy('prediksi.created_at', 'DESC')
                  ->paginate(10);
      $jenissayur = \App\hargajual::all();
      $stokcabeK = DB::table('data_sayur_keluar')
                    ->select(DB::raw('SUM(jumlah) as cabeK'))
                    ->where('idHargajual', '=', "1")
                    ->whereMonth('created_at', date("m"))
                    ->whereYear('created_at', date("Y"))
                    ->first();
                    $stokcabeK = $stokcabeK->cabeK;
      $stoktomatK = DB::table('data_sayur_keluar')
                    ->select(DB::raw('SUM(jumlah) as tomatK'))
                    ->where('idHargajual', '=', "4")
                    ->whereMonth('created_at', date("m"))
                    ->whereYear('created_at', date("Y"))
                    ->first();
                    $stoktomatK = $stoktomatK->tomatK;
      $stokjagungK = DB::table('data_sayur_keluar')
                    ->select(DB::raw('SUM(jumlah) as jagungK'))
                    ->where('idHargajual', '=', "2")
                    ->whereMonth('created_at', date("m"))
                    ->whereYear('created_at', date("Y"))
                    ->first();
                    $stokjagungK = $stokjagungK->jagungK;
      $stokkolK = DB::table('data_sayur_keluar')
                    ->select(DB::raw('SUM(jumlah) as kolK'))
                    ->where('idHargajual', '=', "3")
                    ->whereMonth('created_at', date("m"))
                    ->whereYear('created_at', date("Y"))
                    ->first();
                    $stokkolK = $stokkolK->kolK;
      $stokcabeM = DB::table('data_sayur_masuk')
                    ->select(DB::raw('SUM(jumlah) as cabeM'))
                    ->where('idHargabeli', '=', "1")
                    ->whereMonth('created_at', date("m"))
                    ->whereYear('created_at', date("Y"))
                    ->first();
                    $stokcabeM = $stokcabeM->cabeM;
      $stoktomatM = DB::table('data_sayur_masuk')
                    ->select(DB::raw('SUM(jumlah) as tomatM'))
                    ->where('idHargabeli', '=', "4")
                    ->whereMonth('created_at', date("m"))
                    ->whereYear('created_at', date("Y"))
                    ->first();
                    $stoktomatM = $stoktomatM->tomatM;
      $stokjagungM = DB::table('data_sayur_masuk')
                    ->select(DB::raw('SUM(jumlah) as jagungM'))
                    ->where('idHargabeli', '=', "2")
                    ->whereMonth('created_at', date("m"))
                    ->whereYear('created_at', date("Y"))
                    ->first();
                    $stokjagungM = $stokjagungM->jagungM;
      $stokkolM = DB::table('data_sayur_masuk')
                    ->select(DB::raw('SUM(jumlah) as kolM'))
                    ->where('idHargabeli', '=', "3")
                    ->whereMonth('created_at', date("m"))
                    ->whereYear('created_at', date("Y"))
                    ->first();
      $stokkolM = $stokkolM->kolM;

        return view('dashboard', compact('jenissayur','prediksi','stokcabeK','stoktomatK','stokjagungK','stokkolK','stokcabeM','stoktomatM','stokjagungM','stokkolM'));
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
      $bulan1 = $request->bulan-3;
        $databulan1 = DB::table('data_sayur_keluar')
                      ->select(DB::raw('SUM(jumlah) as jumlahbulan1'))
                      ->where('idHargajual', '=', "$request->jenis")
                      ->whereMonth('created_at', "$bulan1")
                      ->whereYear('created_at', "$request->tahun")
                      ->first();
        $databulan1 = $databulan1->jumlahbulan1;

        $bulan2 = $request->bulan-2;
          $databulan2 = DB::table('data_sayur_keluar')
                        ->select(DB::raw('SUM(jumlah) as jumlahbulan2'))
                        ->where('idHargajual', '=', "$request->jenis")
                        ->whereMonth('created_at', "$bulan2")
                        ->whereYear('created_at', "$request->tahun")
                        ->first();
          $databulan2 = $databulan2->jumlahbulan2;
          $bulan3 = $request->bulan-1;
            $databulan3 = DB::table('data_sayur_keluar')
                          ->select(DB::raw('SUM(jumlah) as jumlahbulan3'))
                          ->where('idHargajual', '=', "$request->jenis")
                          ->whereMonth('created_at', "$bulan3")
                          ->whereYear('created_at', "$request->tahun")
                          ->first();
            $databulan3 = $databulan3->jumlahbulan3;

            $datahasilprediksi = (($databulan1*1)+($databulan2*2)+($databulan3*3))/6;

            if ($databulan1 != null AND $databulan2 != null AND $databulan3 != null) {
              DB::table('prediksi')->insert(
                  ['idJenisSayur' =>"$request->jenis",
                  'dataBulanPertama' =>"$databulan1",
                  'dataBulanKedua' =>"$databulan2",
                  'dataBulanKetiga' =>"$databulan3",
                  'bulanPrediksi' => "$request->bulan",
                  'tahunPrediksi' => "$request->tahun",
                  'hasilPrediksi' => "$datahasilprediksi",
                  'created_at' => date('Y-m-d h:i:s')]
              );

              $jenissayur = DB::table('hargajual')
                            ->select('jenis')
                            ->where('idHargajual', '=', "$request->jenis")
                            ->first();

              return redirect('/')->with('bulan',"$request->bulan")
                                  ->with('tahun',"$request->tahun")
                                  ->with('jenissayur',"$jenissayur->jenis")
                                  ->with('databulan1'," $databulan1")
                                  ->with('databulan2'," $databulan2")
                                  ->with('databulan3'," $databulan3")
                                  ->with('hasilPrediksi',"$datahasilprediksi");

            }elseif($databulan1 == null OR $databulan2 == null OR $databulan3 == null) {
              return redirect('/')->with('status','Maaf Prediksi tidak dapat dilakukan karena tidak ada data bulan sebelumnya');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
