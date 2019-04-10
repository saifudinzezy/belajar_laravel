<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Crud Laravel dengan eloquent</title>
</head>
<body>
	<h1>Data Pegawai</h1>
	<ul>
		@foreach($karyawan as $k)
			<li>{{ "Nama : ".$k->nama." | Alamat : ".$k->alamat }}</li>
		@endforeach
	</ul>
</body>
</html>