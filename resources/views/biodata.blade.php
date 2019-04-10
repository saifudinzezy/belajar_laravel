<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>

	<h1>Tutorial Laravel</h1>
	<a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>
	<br>
	<!-- panggil nilai kiriman dari dosencontroller -->
	<!-- tanpa membuka php krn dia sdh tempalting blade -->
	<p>Nama : {{$nama}}</p>
	<p>Mata Pelajaran</p>
	<ul>
		<!-- utk perulangan tanpa harus menulis tag php -->
		@foreach($matkul as $m)
			<li>{{ $m }}</li>
		@endforeach
	</ul>
</body>
</html>