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
  <img src="{{ public_path('public/assets/img/logo.png') }}" alt="">
	<center><h3>Data Keuangan UD. Sidebang</h3>
	<table cellspacing='0' width="100%">
		<thead>
			<tr>
				<th width="10px">No</th>
				<th>Bulan / Tahun</th>
				<th>Omzet</th>
				<th>Keuntungan</th>
			</tr>
		</thead>
		<tbody>
			@foreach($keuangan as $k)
			<tr>
				<td>{{ $loop->iteration }}</td>
				<td>{{ Carbon\Carbon::parse($k->waktu)->format("m")  }}/{{ Carbon\Carbon::parse($k->waktu)->format("Y")  }}</td>
				<td>@currency($k->omzet)</td>
				<td>@currency($k->keuntungan)</td>
			</tr>
			@endforeach
		</tbody>
	</table>
  </center>
</body>
</html>
