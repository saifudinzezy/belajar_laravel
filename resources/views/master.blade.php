<!DOCTYPE html>
<html>
<head>
	<title>Belajar templating blade</title>
</head>
<body>
	<header>
		<h2>Blog Malasngoding</h2>
			<nav>
				<a href="/blog">Home</a>
				<a href="/blog/tentang">Tentang</a>
				<a href="/blog/kontak">Kontak</a>
			</nav>
	</header>
	<hr><br><br>
	<!-- bagian judul halaman blog -->
	<h3> @yield('judul_halaman')</h3>

	<!-- bagian part konten tempalting blade dengan fungsi yield-->
	@yield('konten')

	<br><br><hr>
	<footer>
		<p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
	</footer>
</body>
</html>