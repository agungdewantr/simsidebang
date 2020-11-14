@extends('layouts.layout')

@section('title','Detail Transaksi Masuk')

@section('namahalaman')
  <h4>Kelola Transaksi Sayur Masuk</h4>
@endsection

@section('content')
<div class="card card-primary">
  <div class="card-body">
    @foreach($sayurmasuk as $sm)
    <table border="0">
      <tbody>
      <tr><td><b>No Transaksi</b></td><td>:</td><td><b>{{$sm->idSayurMasuk}}</b><br></td></tr>
      <tr><td>Jenis</td><td>:</td><td>{{$sm->jenis}}<br></td></tr>
      <tr><td>Nama Penjual</td><td>:</td><td>{{$sm->namaPenjual}}</td></tr>
      <tr><td>Harga Satuan</td><td>:</td><td>@currency($sm->hargabeli)</td></tr>
      <tr><td>jumlah (Kg)</td><td>:</td><td>{{$sm->jumlah}}</td></tr>
      <tr><td>Total Harga</td><td>:</td><td>@currency($sm->totalHarga)</td></tr>
      <tr><td>Tgl Transaksi</td><td>:</td><td>{{$sm->created_at}}</td></tr>
      </tbody>
    </table>
    @endforeach
  </div>
  <div class="card-header">
    <div class="card-header-action">

    </div>
    <a href="/sayurmasuk" class="btn btn-primary">
      Kembali
    </a>
  </div>
</div>
@endsection
