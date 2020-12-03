@extends('layouts.layout')

@section('title','Tambah Data Sayur Keluar')

@section('namahalaman')
  <h4>Kelola Transaksi Sayur Keluar</h4>
@endsection

@section('content')
<form method="post" action="/sayurkeluar">
  @csrf
    <div class="form-group">
    <div class="row">
      <div class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <label for="jenis">Jenis sayur</label>
            <input type="text" id="jenis" name="jenis" value="{{old('jenis')}}" class="form-control @error('jenis') is-invalid @enderror" autocomplete="off" placeholder="Masukkan Jenis">
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
      <input type="text" class="form-control @error('namaPenerima') is-invalid @enderror" id="namaPenerima" autocomplete="off" value="{{old('namaPenerima')}}" name="namaPenerima" placeholder="Masukkan Nama penerima">
      @error('namaPenerima')
        <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="namaSopir">Nama Sopir</label>
      <input type="text" class="form-control @error('namaSopir') is-invalid @enderror" id="namaSopir" value="{{old('namaSopir')}}" autocomplete="off" name="namaSopir" placeholder="Masukkan Nama sopir">
      @error('namaSopir')
        <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="kotaTujuan">Kota Tujuan</label>
      <input type="text" class="form-control @error('kotaTujuan') is-invalid @enderror" value="{{old('kotaTujuan')}}" id="kotaTujuan" autocomplete="off" name="kotaTujuan" placeholder="Masukkan Kota Tujuan">
      @error('kotaTujuan')
        <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="notelpSopir">No.telp Sopir</label>
      <input type="text" class="form-control @error('notelpSopir') is-invalid @enderror" value="{{old('notelpSopir')}}" id="notelpSopir" autocomplete="off" name="notelpSopir" placeholder="Masukkan No Telp Sopir">
      @error('notelpSopir')
        <div class="invalid-feedback">{{$message}}</div>
      @enderror
    </div>
    <input type="hidden" name="idHargajual" id="idHargajual" value="{{old('idHargajualjenis')}}">
    <div class="form-group">
      <label for="hargajual">Harga Satuan</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">Rp.</div>
        </div>
        <input type="text" class="form-control" id="hargajual" name="hargajual" value="{{old('hargajual')}}" placeholder="Harga satuan" readonly="">
      </div>
    </div>
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <div class="input-group">
      <input type="text" class="form-control @error('jumlah') is-invalid @enderror" value="{{old('jumlah')}}" autocomplete="off" id="jumlah" name="jumlah" placeholder="Masukkan Jumlah (Kg)">
      <div class="input-group-prepend">
        <div class="input-group-text">Kg</div>
      </div>
    </div>
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
        <input type="text" value="{{old('totalHarga')}}" class="form-control"  id="totalHarga" name="totalHarga" placeholder="Total harga" readonly="">
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
        url:'{!!URL::to('carihargajual')!!}',
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
              $('#hargajual').val(dataharga2[reqdata]['harga']);
              $('#idHargajual').val(dataharga2[reqdata]['idHargajual']);
            }
          });
          //end
        }
      })
    });
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
