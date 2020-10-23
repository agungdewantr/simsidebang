@extends('layouts.layout')

@section('title','Daftar Harga Beli Terkini')

@section('namahalaman')
  <h4>Kelola Harga</h4>
@endsection

@section('breadcrumb','Kelola Harga')
@section('linkBC','/kelolaharga')

@section('content')
@if(auth()->user()->role == 'pegawai')
<a href="/kelolahargabeli/tambah" button type="btn btn-outline-success" class="btn btn-success my-2">+ Harga Terkini</button></a>
@endif
<div class="form-group">
  @if (session('status'))
    <div class="alert alert-light" role="alert">
        {{ session('status') }}
    </div>
  @endif
</div>
<table class="table table-striped">
<thead>
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
    @foreach($hargabeli as $hrg)
    <th scope="row">{{ $loop->iteration }}</th>
    <td>{{ $hrg->jenis }}</td>
    <td>{{ $hrg->harga }}</td>
    @if(auth()->user()->role == 'pegawai')
    <td scope="row row-center">
      <form class="d-inline" action="/kelolahargabeli/{{ $hrg-> idHargabeli }}/edit">
          <button type=submit class="badge badge-success">Edit</a>
      </form>
      <form class="d-inline" action="/kelolahargabeli/{{ $hrg-> idHargabeli }}" method="post">
        @method('delete')
        @csrf
        <button class="badge badge-danger">Hapus</button>
        @endif
      </form>

    </td>
  </tr>
  @endforeach
</tbody>
</table>
@endsection
