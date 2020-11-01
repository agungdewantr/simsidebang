@extends('layouts.layout')

@section('title','Tambah Data Sayur Masuk')

@section('namahalaman')
  <h4>Data Sayur Masuk</h4>
@endsection

@section('content')
<form method="post" action="/sayurmasuk/{{$datasayurmasuk->idSayurMasuk}}">
  @method('patch')
  @csrf
    <div class="form-group">
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <label for="jenis">Jenis sayur</label>
            <input type="text" id="jenis" name="jenis" value="{{$datasayurmasuk->jenis}}" class="form-control" placeholder="Masukkan Jenis" readonly="">
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="form-group">
      <label for="namaPenjual">Nama Penjual</label>
      <input type="text" class="form-control @error('namaPenjual') is-invalid @enderror" id="namaPenjual" value="{{$datasayurmasuk->namaPenjual}}" name="namaPenjual" placeholder="Masukkan Nama Penjual">
      @error('namaPenjual')
      <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="hargabeli">Harga Satuan</label>
      <input type="number" class="form-control" id="hargabeli" value="{{$datasayurmasuk->hargabeli}}" name="hargabeli" placeholder="Masukkan Harga Satuan" readonly="">
    </div>
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" value="{{$datasayurmasuk->jumlah}}" name="jumlah" placeholder="Masukkan Jumlah (Kg)">
      @error('jumlah')
      <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="totalHarga">Total Harga</label>
      <input type="number" class="form-control" id="totalHarga" value="{{$datasayurmasuk->totalHarga}}" name="totalHarga" placeholder="Masukkan harga dalam" readonly="">
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
  @endsection
