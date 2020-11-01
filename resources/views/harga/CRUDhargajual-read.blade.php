@extends('layouts.layout')

@section('title','Daftar Harga Jual Terkini')

@section('namahalaman')
  <h4>Kelola Harga Jual Sayur</h4>
@endsection

@section('breadcrumb','Kelola Harga')
@section('linkBC','/kelolaharga')

@section('content')
@if(auth()->user()->role == 'pegawai')
<a href="/kelolahargajual/tambah" button type="btn btn-outline-success" class="btn btn-success my-2">+ Harga Terkini</button></a>
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
    <th scope="col center">No</th>
    <th scope="col">Jenis</th>
    <th scope="col">Harga</th>
    @if(auth()->user()->role == 'pegawai')
    <th scope="col col-center">Aksi</th>
    @endif
  </tr>
</thead>

<tbody>
  <tr>
    @foreach($hargajual as $hrg)
    <td scope="row" align="center">{{ $loop->iteration }}</th>
    <td align="center">{{ $hrg->jenis }}</td>
    <td align="center">{{ $hrg->harga }}</td>
    @if(auth()->user()->role == 'pegawai')
    <td scope="row row-center" align="center">
      <form class="d-inline" action="/kelolahargajual/{{ $hrg-> idHargajual }}/edit">
          <button type=submit class="btn btn-sm btn-info"><i class="far fa-edit"></i> Edit </a>
      </form>

      <form class="" action="/kelolahargajual/{{ $hrg-> idHargajual }}" method="post">
        @method('delete')
        @csrf
        <button class="btn btn-sm btn-outline-danger"><i class="fas fa-times"></i> Hapus</button>
      </form>
      @endif

    </td>
  </tr>
  @endforeach
</tbody>
</table>
@endsection
