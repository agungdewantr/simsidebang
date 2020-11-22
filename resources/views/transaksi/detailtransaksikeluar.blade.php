@extends('layouts.layout')

@section('title','Detail Transaksi Keluar')

@section('namahalaman')
  <h4>Kelola Transaksi Sayur Keluar</h4>
@endsection

@section('content')
<div class="card card-primary">
  <div class="card-body">
    @foreach($sayurkeluar as $sk)
    <table border="0">
      <tbody>
      <tr><td><b>No Transaksi</b></td><td>:</td><td><b>{{$sk->idSayurKeluar}}</b><br></td></tr>
      <tr><td>Jenis</td><td>:</td><td>{{$sk->jenis}}<br></td></tr>
      <tr><td>Nama Penerima</td><td>:</td><td>{{$sk->namaPenerima}}</td></tr>
      <tr><td>Nama Sopir</td><td>:</td><td>{{$sk->namaSopir}}</td></tr>
      <tr><td>Kota Tujuan</td><td>:</td><td>{{$sk->kotaTujuan}}</td></tr>
      <tr><td>No.telp Sopir</td><td>:</td><td> {{$sk->notelpSopir}}</td></tr>
      <tr><td>Harga Satuan</td><td>:</td><td>@currency($sk->hargajual)</td></tr>
      <tr><td>jumlah (Kg)</td><td>:</td><td>{{$sk->jumlah}}</td></tr>
      <tr><td>Total Harga</td><td>:</td><td>@currency($sk->totalHarga)</td></tr>
      <tr><td>Tgl Transaksi</td><td>:</td><td>{{$sk->created_at}}</td></tr>
      </tbody>
    </table>
    @endforeach
  </div>
  <div class="card-header">
    <div class="card-header-action">

    </div>
    <a href="/sayurkeluar" class="btn btn-primary">
      Kembali
    </a>
  </div>
</div>
@endsection
