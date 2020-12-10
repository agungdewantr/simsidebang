<!DOCTYPE html>
<html>
<head>
	<title>Preview Cetak PDF</title>
  <style type="text/css">
  h1{
  font-family: sans-serif;
}

table {
  margin: auto;
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #ffffff;
  border: #ccc 1px solid;
}

table th {
  padding: 5px 5px;
  width: auto;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}

table th:first-child{
  border-left:none;
}

table tr {
  text-align: center;
  padding-left: 20px;
}

table td:first-child {
  text-align: center;
  padding-left: 20px;
  border-left: 0;
}

table td {
  padding: 2px 2px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}


</style>
</head>
<body>
	<p>Tanggal Cetak : <?= date("d-m-Y") ?></p>
   <center><img src="{{public_path('storage/img/logo.png')}}" style="width:10%;"  alt=""></center>
	<center><h3>Data Keuangan UD. Sidebang</h3>
	<table cellspacing='0' width="100%">
		<?php
		$bulan = array(
			'01' => 'Januari',
			'02' => 'Februari',
			'03' => 'Maret',
			'04' => 'April',
			'05' => 'Mei',
			'06' => 'Juni',
			'07' => 'Juli',
			'08' => 'Agustus',
			'09' => 'September',
			'10' => 'Oktober',
			'11' => 'November',
			'12' => 'Desember',
		)
		?>
		<thead>
			<tr>
				<th width="10px">No</th>
				<th>Bulan</th>
				<th>Tahun</th>
				<th>Omzet</th>
				@if(auth()->user()->role == 'pemilik')
				<th>Keuntungan</th>
				@endif
			</tr>
		</thead>
		<tbody>
			@foreach($keuangan as $k)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{$bulan[Carbon\Carbon::parse($k->waktu)->format("m")]}}</td>
				<td>{{ Carbon\Carbon::parse($k->waktu)->format("Y")  }}</td>
				<td>@currency($k->omzet)</td>
				@if(auth()->user()->role == 'pemilik')
				<td>@currency($k->keuntungan)</td>
				@endif
			</tr>
			@endforeach
		</tbody>
	</table>
  </center>
</body>
</html>
