@extends('layouts.layout')

@section('title','Prediksi')

@section('namahalaman')
  <h4>Dashboard</h4>
@endsection

@section('datastok')
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <img src="{!! asset('assets/img/chili.svg')!!}" alt="cabe" width="60%">
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4 style="padding-right:0%;">Stok Cabe Masuk</h4>
        </div>
        <div class="card-body" style="padding-right:none;">
          {{$stokcabeM}} <h6 class="d-inline">kg</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <img src="{!! asset('assets/img/cabbage.svg')!!}" alt="cabe" width="60%">
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Stok Kol Masuk</h4>
        </div>
        <div class="card-body" style="padding-right:none;">
          {{$stokkolM}} <h6 class="d-inline">kg</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-warning">
        <img src="{!! asset('assets/img/corn.svg')!!}" alt="cabe" width="60%">
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4 style="padding-right:-10%;">Stok Jagung Masuk</h4>
        </div>
        <div class="card-body" style="padding-right:none;">
          {{$stokjagungM}} <h6 class="d-inline">kg</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <img src="{!! asset('assets/img/tomato.svg')!!}" alt="cabe" width="60%">
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Stok Tomat Masuk</h4>
        </div>
        <div class="card-body" style="padding-right:none;">
          {{$stoktomatM}} <h6 class="d-inline">kg</h6>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <img src="{!! asset('assets/img/chili.svg')!!}" alt="cabe" width="60%">
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Stok Cabe Keluar</h4>
        </div>
        <div class="card-body" style="padding-right:none;">
          {{$stokcabeK}} <h6 class="d-inline">kg</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <img src="{!! asset('assets/img/cabbage.svg')!!}" alt="cabe" width="60%">
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4 style="padding-right:50px;">Stok Kol Keluar</h4>
        </div>
        <div class="card-body" style="padding-right:none;">
          {{$stokkolK}} <h6 class="d-inline">kg</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-warning">
        <img src="{!! asset('assets/img/corn.svg')!!}" alt="cabe" width="60%">
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Stok Jagung Keluar</h4>
        </div>
        <div class="card-body" style="padding-right:none;">
          {{$stokjagungK}} <h6 class="d-inline">kg</h6>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <img src="{!! asset('assets/img/tomato.svg')!!}" alt="cabe" width="60%">
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Stok Tomat Keluar</h4>
        </div>
        <div class="card-body" style="padding-right:none;">
          {{$stoktomatK}} <h6 class="d-inline">kg</h6>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('content')

<div class="table-responsive">
<form class="form-inline mr-auto" method="post" action="/prediksi">
  @csrf
  &nbsp;&nbsp;&nbsp;
<div class="form-group">
  <label>Pilih Jenis Sayur :</label>
  <select class="d-inline form-control" style="width:200%;" id="jenis" name="jenis">
    @foreach($jenissayur as $js)
    <option value="{{$js->idHargajual}}">{{$js->jenis}}</option>
    @endforeach
  </select>
</div>&nbsp;&nbsp;&nbsp;
<?php $bulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');  ?>
<div class="form-group" >
  <label>Pilih Bulan Transaksi</label>
  <select class="form-control" style="width:100%;" id="bulan" name="bulan">
    @for ($i = 0; $i < count($bulan); $i++)
    <option value="{{$i+1}}">{{$bulan[$i]}}</option>
    @endfor
  </select>
</div>&nbsp;&nbsp;&nbsp;
<?php $tahun = array('2018','2019','2020','2021','2022');  ?>
<div class="form-group">
  <label>Pilih Tahun Transaksi</label>
  <select class="form-control" style="width:230%;" id="tahun" name="tahun">
    @for ($i = 0; $i < count($tahun); $i++)
    <option value="{{$tahun[$i]}}">{{$tahun[$i]}}</option>
    @endfor
  </select>
</div>&nbsp;&nbsp;
<div class="col" style="margin-top :2%; margin-right:0;">
  <button class="btn btn-primary" style="height:70%" type="submit"><i class="fas fa-search"></i> Prediksi</button>
</div>
</form>

</div>
<br>
  @if (session('bulan'))
<div class="row">
<div class="col-12 col-md-6 col-lg-10">
<div class="card card-warning">
  <div class="card-header">
    <p class="text-warning"><b>Hasil Prediksi</b></p>
  </div>
  <div class="card-body">
    <table border="0">
      <tbody>

      <tr><td>Jenis Sayur</td><td>:</td><td>{{ session('jenissayur') }}<br></td></tr>
      <tr><td>Bulan Prediksi</td><td>:</td><td>{{ session('bulan') }}<br></td></tr>
      <tr><td>Tahun Prediksi</td><td>:</td><td>{{ session('tahun') }}</td></tr>
      <tr><td>Data Stok Bulan Pertama</td><td>:</td><td>{{ session('databulan1') }} Kg</td></tr>
      <tr><td>Data Stok Bulan Kedua</td><td>:</td><td>{{ session('databulan2') }} Kg</td></tr>
      <tr><td>Data Stok Bulan Ketiga</td><td>:</td><td>{{ session('databulan3') }} Kg</td></tr>
      <tr><td><b>Hasil Prediksi</b></td><td>:</td><td><b>{{ session('hasilPrediksi') }} Kg</b></td></tr>
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
@endif
@if (session('status'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ session('status') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<br><p class="text-primary"><b>Tabel Hasil Prediksi Terbaru</b></p>
<div class="table-responsive">
<table class="table table-striped">
<thead align="center">
  <tr class="table-success">
    <th scope="col" align="center">No</th>
    <th scope="col" align="center">Jenis Sayur</th>
    <th scope="col" align="center">Bulan/Tahun Prediksi</th>
    <th scope="col" align="center">Data bulan Pertama</th>
    <th scope="col" align="center">Data Bulan Kedua</th>
    <th scope="col" align="center">Data Bulan Ketiga</th>
    <th scope="col" align="center">Hasil Prediksi</th>
  </tr>
</thead>
<tbody>
  <tr>
    @foreach($prediksi as $p)
    <td scope="row" align="center">{{ $loop->iteration }}</th>
    <td align="center">{{ $p->jenis }}</td>
    <td align="center">{{ $p->bulanPrediksi }} / {{ $p->tahunPrediksi }}</td>
    <td align="center">{{ $p->dataBulanPertama }}</td>
    <td align="center">{{ $p->dataBulanKedua }}</td>
    <td align="center">{{ $p->dataBulanKetiga }}</td>
    <td align="center">{{$p->hasilPrediksi}}</td>
  </tr>
  @endforeach
</tbody>
</table>
</div>
@endsection
