<!DOCTYPE html>
<html>
<head>
	<title>Hasil Form</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row justify-content-center">
	<div class="col-lg-6">
	<div class="card mt-5">
	<div class="card-body">
		<h3>Dimas</h3>
		<h3 class="my-4">Data yang di input : </h3>
		<table class="table table-bordered table-striped">
			<tr>
				<td style="width: 150px">Nama</td>
				<td>{{ $data->nama }}</td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>{{ $data->pekerjaan }}</td>
			</tr>
			<tr>
				<td>Usia</td>
				<td>{{ $data->usia }}</td>
			</tr>
		</table>
		<a href="/input" class="btn btn-primary">kembali</a>
	</div>
	</div>	
	</div>	
	</div>	
	</div>
</body>
</html>