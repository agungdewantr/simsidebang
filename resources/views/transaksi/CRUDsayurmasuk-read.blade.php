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
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <strong>{{ session('status') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
</div>
<div class="table-responsive">
<table class="table table-striped">
<thead align="center">
  <tr class="table-success">
    <th scope="col" align="center">No</th>
    <th scope="col" align="center">Jenis</th>
    <th scope="col" align="center">Nama Penjual</th>
    <th scope="col" align="center">Jumlah (Kg)</th>
    <th scope="col" align="center">Total harga</th>
    <th scope="col" align="center">Aksi</th>
  </tr>
</thead>

<tbody>
  <tr>
    @foreach($sayurmasuk as $sm)
    <td scope="row" align="center">{{ $loop->iteration }}</th>
    <td align="center">{{ $sm->jenis }}</td>
    <td align="center">{{ $sm->namaPenjual }}</td>
    <td align="center">{{ $sm->jumlah }}</td>
    <td align="center">@currency($sm->totalHarga)</td>
    <td scope="row row-center" align="center">
      @if(auth()->user()->role == 'pegawai')
      <form class="d-inline" action="/sayurmasuk/{{ $sm-> idSayurMasuk }}/edit">
          <button type=submit class="d-inline badge badge-info" style="border-style : none;"><i class="far fa-edit"></i> Edit</a>
      </form>
      @endif
      <form class="d-inline" action="/sayurmasuk/{{ $sm-> idSayurMasuk }}/detail">
          <button type=submit class="badge badge-warning" style="border-style : none;"><i class="fas fa-info-circle"></i> Detail</a>
      </form>
    </td>
  </tr>
  @endforeach
</tbody>
</table>
</div>
@endsection
