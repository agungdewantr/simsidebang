@extends('layouts.layout')

@section('title','Detail Transaksi Masuk')

@section('namahalaman')
  <h4>Detail Transaksi Masuk</h4>
@endsection

@section('content')
<div class="card card-primary">
  <div class="card-body">
    <p>Jenis &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$datasayurmasuk->jenis}}</p>
    <p>Nama Penjual &nbsp;&nbsp;: {{$datasayurmasuk->namaPenjual}}</p>
    <p>harga Satuan &nbsp;&nbsp;&nbsp;: {{$datasayurmasuk->hargabeli}}</p>
    <p>jumlah (Kg)  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$datasayurmasuk->jumlah}}</p>
    <p>Total Harga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{$datasayurmasuk->totalHarga}}</p>
    <p>Tgl Transaksi &nbsp;&nbsp;&nbsp;&nbsp;: {{$datasayurmasuk->created_at}}</p>
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
