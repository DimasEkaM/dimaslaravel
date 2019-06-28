<!DOCTYPE HTML>
<html>
	<head>
		<title>Sistem template blade laravel</title>
	</head>
	<body>
		<header>
			<h2>Blog Dimas</h2>
			<nav>
				<a href="/blog">Home</a>
				<a href="/blog/tentang">Tentang</a>
				<a href="/blog/kontak">Kontak</a>
			</nav>
		</header>

		<hr/>
		<br/>
		<br/>

		<!-- bagian judul -->
		<h3> @yield('judul_halaman')</h3>

		<!-- bagian konten -->
		@yield('konten')

		<br/>
		<br/>
		<hr/>
		<footer>
			<p>&copy; <a href="http://www.dimas.com">dimas</a>. 2019 </p>
		</footer>
	</body>
</html>