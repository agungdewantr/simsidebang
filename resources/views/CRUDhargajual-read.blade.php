@extends('layouts.layout')

@section('title','Daftar Harga Jual Terkini')

@section('namahalaman')
  <h4>Kelola Harga Jual</h4>
@endsection

@section('breadcrumb','Kelola Harga')
@section('linkBC','/kelolaharga')

@section('content')
<a href="/kelolahargajual/tambah" button type="btn btn-outline-success" class="btn btn-success my-2">+ Harga Terkini</button></a>
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
    <th scope="col col-center">Aksi</th>
  </tr>
</thead>

<tbody>
  <tr>
    @foreach($hargajual as $hrg)
    <th scope="row">{{ $loop->iteration }}</th>
    <td>{{ $hrg->jenis }}</td>
    <td>{{ $hrg->harga }}</td>
    <td scope="row row-center">
      <form class="d-inline" action="/kelolahargajual/{{ $hrg-> idHargajual }}/edit">
          <button type=submit class="badge badge-success">Edit</a>
      </form>
      <form class="d-inline" action="/kelolahargajual/{{ $hrg-> idHargajual }}" method="post">
        @method('delete')
        @csrf
        <button class="badge badge-danger">Hapus</button>
      </form>

    </td>
  </tr>
  @endforeach
</tbody>
</table>
@endsection
