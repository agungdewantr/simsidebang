@extends('layouts.layout')

@section('title','Update Data Sayur Masuk')

@section('namahalaman')
  <h4>Kelola Transaksi Sayur Keluar</h4>
@endsection

@section('content')
@foreach($sayurkeluar as $sk)
<form method="post" action="/sayurkeluar/{{$sk->idSayurKeluar}}">
  @method('patch')
  @csrf
    <div class="form-group">
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <label for="jenis">Jenis sayur</label>
            <input type="text" id="jenis" name="jenis" value="{{$sk->jenis}}" readonly="" class="form-control @error('jenis') is-invalid @enderror" autocomplete="off" placeholder="Masukkan Jenis">
            @error('jenis')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="form-group">
      <label for="namaPenerima">Nama Penerima</label>
      <input type="text" class="form-control @error('namaPenerima') is-invalid @enderror" id="namaPenerima" autocomplete="off" value="{{$sk->namaPenerima}}" name="namaPenerima" placeholder="Masukkan Nama penerima">
      @error('namaPenerima')
        <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="namaSopir">Nama Sopir</label>
      <input type="text" class="form-control @error('namaSopir') is-invalid @enderror" id="namaSopir" value="{{$sk->namaSopir}}" autocomplete="off" name="namaSopir" placeholder="Masukkan Nama sopir">
      @error('namaSopir')
        <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="kotaTujuan">Kota Tujuan</label>
      <input type="text" class="form-control @error('kotaTujuan') is-invalid @enderror" value="{{$sk->kotaTujuan}}" id="kotaTujuan" autocomplete="off" name="kotaTujuan" placeholder="Masukkan Kota Tujuan">
      @error('kotaTujuan')
        <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="notelpSopir">No.telp Sopir</label>
      <input type="text" class="form-control @error('notelpSopir') is-invalid @enderror" value="{{$sk->notelpSopir}}" id="notelpSopir" autocomplete="off" name="notelpSopir" placeholder="Masukkan No Telp Sopir">
      @error('notelpSopir')
        <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <input type="hidden" name="idHargajual" id="idHargajual" value="{{$sk->idHargajual}}">
    <div class="form-group">
      <label for="hargajual">Harga Satuan</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">Rp.</div>
        </div>
        <input type="text" class="form-control" id="hargajual" name="hargajual" value="{{$sk->hargajual}}" placeholder="Harga satuan" readonly="">
      </div>
    </div>
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <input type="text" class="form-control @error('jumlah') is-invalid @enderror" value="{{$sk->jumlah}}" autocomplete="off" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah (Kg)">
      @error('jumlah')
        <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
    <label for="totalHarga">Total Harga</label><br>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">Rp.</div>
        </div>
        <input type="text" value="{{$sk->totalHarga}}" class="form-control"  id="totalHarga" name="totalHarga" placeholder="Total harga" readonly="">
      </div>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
  @endforeach
  @endsection

  @section('autocomplete')
  <script type="text/javascript">
  $(document).ready(function() {
      $("#jumlah, #hargajual").keyup(function() {
          var harga  = $("#hargajual").val();
          var jumlah = $("#jumlah").val();

          var totalharga = parseInt(harga) * parseInt(jumlah);
          $("#totalHarga").val(totalharga);
      });
  });
  </script>
  @endsection
