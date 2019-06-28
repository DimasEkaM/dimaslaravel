<!DOCTYPE html>
<html>
<head>
	<title>Validasi Form</title>

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<div class="row justify-content-center">
	<div class="col-lg-6">
	<div class="card mt-5">
	<div class="card-body">
		<h3 class="text-center">Dimas</h3>
		<br/>

		{{--menampilkan error validasi --}}
		@if (count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		
		<br/>

		<!--form validasi-->
		<form action="/proses" method="post">
			{{ csrf_field() }}

			<div class="form-group">
				<label for="nama">Nama</label>
				<input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
			</div>
			<div class="form-group">
				<label for="pekerjaan">Pekerjaan</label>
				<input class="form-control" type="text" name="pekerjaan" value=" {{ old('pekerjaan') }} ">
			</div>
			<div class="form-group">
				<label for="usia">Usia</label>
				<input class="form-control" type="text" name="usia" value="{{ old('usia') }}">
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="proses">
			</div>


		</form>

	</div>	
	</div>
	</div>
	</div>
	</div>
</body>
</html>