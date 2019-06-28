<!DOCTYPE html>
<html>
<head>
	<title>Edit Pegawai</title>
</head>
<body>
		<h3>Edit Data Pegawai</h3>
		<br/>
		<br/>

		@foreach($pegawai as $p)
		<form action="/pegawai/update" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
			Nama<input type="text" name="nama"  value="{{ $p->pegawai_nama }}"> <br/>
			Jabatan<input type="text" name="jabatan" value="{{ $p->pegawai_jabatan }}" ><br/>
			Umur<input type="text" name="umur" value=" {{ $p->pegawai_umur }}"> <br/>
			Alamat<textarea name="alamat" value="{{ $p->pegawai_alamat}}"></textarea><br/>
			<input type="submit" value="update data">
		</form>
		@endforeach	
</body>
</html>