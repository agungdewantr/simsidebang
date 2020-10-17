@extends('layouts.layout')

@section('title','Tambah Harga')

@section('namahalaman')
  <h4>Kelola Harga</h4>
@endsection

@section('content')
<form method="post" action="/kelolaharga">
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
    <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
