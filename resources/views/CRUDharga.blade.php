@extends('layouts.layout')

@section('title','Daftar Harga Terkini')

@section('namahalaman')
  <h4>Kelola Harga</h4>
@endsection

@section('content')
<a href="/kelolaharga/tambah" button type="btn btn-outline-success" class="btn btn-success my-2">+ Harga Terkini</button></a>
<table class="table table-striped">
<thead>
  <tr class="table-success">
    <th scope="col">No</th>
    <th scope="col">Jenis</th>
    <th scope="col">Harga</th>
  </tr>
</thead>
<tbody>
  <tr>
    @foreach($harga as $hrg)
    <th scope="row">{{ $loop->iteration }}</th>
    <td>{{ $hrg->jenis }}</td>
    <td>{{ $hrg->harga }}</td>
  </tr>
  @endforeach
</tbody>
</table>
@endsection
