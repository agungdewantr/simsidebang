@extends('layouts.layout')

@section('title','Tambah Data Sayur Masuk')

@section('namahalaman')
  <h4>Data Sayur Masuk</h4>
@endsection

@section('content')
<form method="post" action="/sayurmasuk">
  @csrf
    <div class="form-group">
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <label for="jenis">Jenis sayur</label>
            <input type="text" id="jenis" name="jenis" class="form-control" placeholder="Masukkan Jenis">
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="form-group">
      <label for="namaPenjual">Nama Penjual</label>
      <input type="text" class="form-control" id="namaPenjual" name="namaPenjual" placeholder="Masukkan Nama Penjual">
    </div>
    <div class="form-group">
      <label for="hargabeli">Harga Satuan</label>
      <input type="text" value="" class="form-control" id="hargabeli" name="hargabeli" placeholder="Masukkan Harga Satuan"  readonly="">
    </div>
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah (Kg)">
    </div>
    <div class="form-group">
      <label for="totalHarga">Total Harga</label>
      <input type="text" value="" class="form-control" id="totalHarga" name="totalHarga" placeholder="Masukkan harga dalam" readonly="">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
  @endsection
