<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>

	<h1>Tutorial Laravel</h1>
	<p>Tutorial passing data ke view</p>
	<br>
	<p>Nama : {{ $nama }} </p><br>
	<p>Mata Pelajaran</p>
	<ul>
		@foreach($matkul as $m)
		<li>{{ $m }}</li>	
		@endforeach
	</ul>
</body>
</html>