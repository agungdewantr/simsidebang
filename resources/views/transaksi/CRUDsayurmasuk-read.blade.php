@extends('layouts.layout')

@section('title','Transaksi Sayur Masuk')

@section('namahalaman')
  <h4>Kelola Transaksi Sayur Masuk</h4>
@endsection

@section('breadcrumb','Kelola Harga')
@section('linkBC','/kelolaharga')

@section('content')
@if(auth()->user()->role == 'pegawai')
<a href="/sayurmasuk/tambah" button type="btn btn-outline-success" class="btn btn-success my-2">+ Transaksi Sayur Masuk</a>
@endif
<div class="form-group">
  @if (session('status'))
    <div class="alert alert-light" role="alert">
        {{ session('status') }}
    </div>
  @endif
</div>

<table class="table table-striped">
<thead align="center">
  <tr class="table-success">
    <th scope="col" align="center">No</th>
    <th scope="col" align="center">Jenis</th>
    <th scope="col" align="center">Nama Penjual</th>
    <th scope="col" align="center">Jumlah (Kg)</th>
    @if(auth()->user()->role == 'pegawai')
      <th scope="col" align="center">Aksi</th>
    @endif
  </tr>
</thead>

<tbody>
  <tr>
    @foreach($sayurmasuk as $sm)
    <td scope="row" align="center">{{ $loop->iteration }}</th>
    <td align="center">{{ $sm->jenis }}</td>
    <td align="center">{{ $sm->namaPenjual }}</td>
    <td align="center">{{ $sm->jumlah }}</td>
    @if(auth()->user()->role == 'pegawai')
    <td scope="row row-center" align="center">


      <form class="d-inline" action="/sayurmasuk/{{ $sm-> idSayurMasuk }}/edit">
          <button type=submit class="btn btn-sm btn-info"><i class="far fa-edit"></i> Edit</a>
      </form>
      <form class="d-inline" action="/sayurmasuk/{{ $sm-> idSayurMasuk }}/detail">
          <button type=submit class="btn btn-sm btn-outline-info"><i class="fas fa-info-circle"></i> Detail</a>
      </form>
        @endif
    </td>
  </tr>
  @endforeach
</tbody>
</table>
@endsection
