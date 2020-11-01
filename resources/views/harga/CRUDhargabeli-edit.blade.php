@extends('layouts.layout')

@section('title','Update Harga Beli Terkini')

@section('namahalaman')
  <h4>Kelola Harga</h4>
@endsection

@section('content')
<form method="post" action="/kelolahargabeli/{{$hargabeli->idHargabeli}}">
  @method('patch')
  @csrf
  <div class="form-group">
    <label for="jenis">Jenis</label>
    <input type="text" class="form-control @error('jenis') is-invalid @enderror" id="jenis" name="jenis" value="{{$hargabeli->jenis}}" placeholder="Masukkan jenis">
    @error('jenis')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{$hargabeli->harga}}" placeholder="Masukkan harga">
    @error('harga')
    <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
