@extends('layouts.layout')

@section('title','Kelola Keuangan')

@section('namahalaman')
  <h4>Keuangan</h4>
@endsection

@section('breadcrumb','Kelola Harga')
@section('linkBC','/kelolaharga')

@section('content')
<div class="form-group">
  @if (session('status'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
      <strong>{{ session('status') }}</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif
</div>
<form class="form-inline mr-auto" method="get" action="/keuangan/rangebulan">
  <div class="search-element">
    <label for="bulan1" class="d-inline">Pilih Bulan Awal :</label>
    <input name="bulan1" id="bulan1" class="shadow-sm p-3 mb-0 bg-white rounded form-control" type="month" value="{{ date('Y-m-d') }}" placeholder="" aria-label="Search" data-width="260" data-height="35">
    <label for="bulan2" class="d-inline">Pilih Bulan Akhir :</label>
    <input name="bulan2" id="bulan2" class="shadow-sm p-3 mb-0 bg-white rounded form-control" type="month" value="{{ date('Y-m-d') }}" placeholder="" aria-label="Search" data-width="260" data-height="35">
    <button class="btn btn-primary" type="submit"><i class="fas fa-print"></i> Print</button>
  </div>
</form>
@if ($keuangan != "Tidak ada data keuangan untuk range bulan tersebut!") {
<div class="table-responsive">
<table class="table table-striped">
<thead align="center">
  <tr class="table-success">
    <th scope="col" align="center">No</th>
    <th scope="col" align="center">Bulan / Tahun</th>
    <th scope="col" align="center">Omzett</th>
    <th scope="col" align="center">Keuntungan</th>
  </tr>
</thead>

<tbody>
  <tr>
    @foreach($keuangan as $k)
    <td scope="row" align="center">{{ $loop->iteration }}</th>
    <td align="center">{{ Carbon\Carbon::parse($k->waktu)->format("m")  }}/{{ Carbon\Carbon::parse($k->waktu)->format("Y")  }}</td>
    <td align="center">@currency($k->omzet)</td>
    <td align="center">@currency($k->keuntungan)</td>
  </tr>
  @endforeach
</tbody>
</table>
</div>
@else
<br>
<h4 class="text-primary"><center>{{$keuangan}}</center></h4>
@endif
@endsection

@section('autocomplete')
@endsection
