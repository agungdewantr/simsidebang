@extends('layouts.layout')

@section('title','Tambah Data Sayur Masuk')

@section('namahalaman')
  <h4>Kelola Transaksi Sayur Masuk</h4>
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
            <input type="text" id="jenis" name="jenis" class="form-control @error('jenis') is-invalid @enderror" value="{{ old('jenis') }}" autocomplete="off" placeholder="Masukkan Jenis">
            @error('jenis')
              <div class="invalid-feedback">{{$message}}</div>
            @enderror
          </div>
        </div>
      </div>
    </div>
  </div>
  <input type="hidden" id="idHargabeli" name="idHargabeli" value="{{ old('idHargabeli') }}">
    <div class="form-group">
      <label for="namaPenjual">Nama Penjual</label>
      <input type="text" class="form-control @error('namaPenjual') is-invalid @enderror" id="namaPenjual" autocomplete="off" value="{{ old('namaPenjual') }}" name="namaPenjual" placeholder="Masukkan Nama Penjual">
      @error('namaPenjual')
        <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="hargabeli">Harga Satuan</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">Rp.</div>
        </div>
        <input type="text" value="{{ old('hargabeli') }}" class="form-control" id="hargabeli" name="hargabeli" placeholder="Harga satuan" readonly="">
      </div>
    </div>
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <div class="input-group">
      <input type="text" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}" autocomplete="off" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah (Kg)">
      <div class="input-group-prepend">
        <div class="input-group-text">Kg</div>
      </div>
      </div>
      @error('jumlah')
        <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="totalHarga">Total Harga</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">Rp.</div>
        </div>
        <input type="text" value="{{ old('totalHarga') }}" class="form-control" id="totalHarga" name="totalHarga" placeholder="Total harga" readonly="">
      </div>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
  @endsection

  @section('autocomplete')
  <script type="text/javascript">
    $(document).ready(function(){
      $.ajax({
        type:'get',
        url:'{!!URL::to('carihargabeli')!!}',
        success:function(response){
          console.log(response);
          //material css
          //convert array to object
          var hargaArray = response;
          var dataharga = {};
          var dataharga2 = {};
          for (var i = 0; i < hargaArray.length; i++) {
            dataharga[hargaArray[i].jenis] =null;
            dataharga2[hargaArray[i].jenis] =hargaArray[i];
          }

          console.log("dataharga2");
          console.log(dataharga2);

          $('input#jenis').autocomplete({
            data: dataharga,
            onAutocomplete:function(reqdata){
              console.log(reqdata);
              $('#hargabeli').val(dataharga2[reqdata]['harga']);
              $('#idHargabeli').val(dataharga2[reqdata]['idHargabeli']);
            }
          });
          //end
        }
      })
    });
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
