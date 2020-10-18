@extends('layouts.layout')

@section('title','Tambah Produk Masuk')

@section('namahalaman')
  <h4>Produk Masuk</h4>
@endsection

@section('content')
<form method="post" action="/kelolaharga">
  @csrf
  <?php $array = array('Cabe','Jagung','Kol','Tomat');  ?>
    <div class="form-group">
      <label for="jenis">Pilih Jenis Produk</label>
      <select class="form-control" id=jenis name="jenis">

        @foreach($harga as $hr)
        <option value="{{$hr->jenis}}">{{$hr->jenis}}</option>
        @endforeach

      </select>
    </div>
    <div class="form-group">
      <label for="namapenjual">Nama Penjual</label>
      <input type="text" class="form-control" id="namapenjual" name="namapenjual" placeholder="Masukkan Nama Penjual">
    </div>
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah">
    </div>
    <div class="form-group">
      <label for="hargasatuan">Harga Satuan</label>
      <?php $a = array($harga) ; ?>

      @foreach($harga as $hr)
        <li>{{$hr->jenis}}</li>
        <li>{{$hr->harga}}</li>
      @endforeach
      <input type="text" value="" class="form-control" id="hargasatuan" name="hargasatuan" placeholder="Masukkan Harga Satuan">
    </div>
    <div class="form-group">
      <label for="totalharga">Total Harga</label>
      <input type="text" value="" class="form-control" id="totalharga" name="totalharga" placeholder="Masukkan harga">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
  </form>
  @endsection
