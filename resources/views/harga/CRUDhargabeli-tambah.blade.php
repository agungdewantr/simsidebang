@extends('layouts.layout')

@section('title','Tambah Harga Beli')

@section('namahalaman')
  <h4>Kelola Harga Beli</h4>
@endsection

@section('content')
<form method="post" action="/kelolahargabeli">
  @csrf
  <?php $array = array('Cabe','Jagung','Kol','Tomat');  ?>
    <div class="form-group">
      <label for="jenis">Pilih Jenis Produk</label>
      <select class="form-control" id=jenis name="jenis">
        @for ($i = 0; $i < count($array); $i++)
        <option value="{{$array[$i]}}">{{$array[$i]}}</option>
        @endfor
      </select>
    </div>
  <div class="form-group">
    <label for="harga">Harga</label>
    <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="" placeholder="Masukkan harga">
    @error('harga')
      <div class="invalid-feedback">{{$message}}</div>
    @enderror
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
</form>
@endsection
