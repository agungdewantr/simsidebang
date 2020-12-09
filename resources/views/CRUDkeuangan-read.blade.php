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
<a href="/cetakkeuanganpdf" style="margin-bottom:2%; float:right;" class="btn btn-primary btn-icon icon-left"><i class="fas fa-print"></i> Print</a>
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
    <td align="center">{{$k->bulan}}/{{$k->tahun}}</td>
    <td align="center">@currency($k->omzet)</td>
    <td align="center">@currency($k->keuntungan)</td>
  </tr>
  @endforeach
</tbody>
</table>
</div>
<div class="container" style="margin-left: 40%" >
  <div class="box">
    {{$keuangan->links()}}
  </div>
</div>
@endsection
