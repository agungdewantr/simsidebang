@extends('layouts.layout')

@section('title','Update Data Sayur Masuk')

@section('namahalaman')
  <h4>Data Sayur Masuk</h4>
@endsection

@section('content')
@foreach($sayurmasuk as $sm)
<form method="post" action="/sayurmasuk/{{$sm->idSayurMasuk}}">
  @method('patch')
  @csrf
    <div class="form-group">
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <label for="jenis">Jenis sayur</label>
            <input type="text" id="jenis" name="jenis" value="{{$sm->jenis}}" class="form-control" placeholder="Masukkan Jenis" readonly="">
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="form-group">
      <label for="namaPenjual">Nama Penjual</label>
      <input type="text" class="form-control @error('namaPenjual') is-invalid @enderror" id="namaPenjual" autocomplete="off" value="{{$sm->namaPenjual}}" name="namaPenjual" placeholder="Masukkan Nama Penjual">
      @error('namaPenjual')
      <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="hargabeli">Harga Satuan</label>
      <input type="number" class="form-control" id="hargabeli" value="{{$sm->hargabeli}}" name="hargabeli" placeholder="Masukkan Harga Satuan" readonly="">
    </div>
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" value="{{$sm->jumlah}}" name="jumlah" autocomplete="off" placeholder="Masukkan Jumlah (Kg)">
      @error('jumlah')
      <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="totalHarga">Total Harga</label>
      <input type="number" class="form-control" id="totalHarga" value="{{$sm->totalHarga}}" name="totalHarga" placeholder="Masukkan harga dalam" readonly="">
    </div>
    @endforeach
    <button type="submit" class="btn btn-primary">Simpan</button><a href="/sayurmasuk" class="btn btn-outline-primary">Kembali</a>
  </form>
  @endsection

  @section('autocomplete')
  <script type="text/javascript">
  $(document).ready(function() {
      $("#jumlah, #hargabeli").keyup(function() {
          var harga  = $("#hargabeli").val();
          var jumlah = $("#jumlah").val();

          var totalharga = parseInt(harga) * parseInt(jumlah);
          $("#totalHarga").val(totalharga);
      });
  });
  </script>
  @endsection
