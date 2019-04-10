<!DOCTYPE html>
<html>
<head>
	<title>Tutorial membuat crud laravel</title>
	<!-- memasukan lin css -->
	<!-- <link rel="stylesheet" type="text/css" href="/css/style.css"> -->
	<!-- atau -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<!-- <style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style> -->
<div class="container">
	<div class="card">
		<div class="card-body">			
			<h3>Data Pegawai</h3>
			<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>
			<br>
			<div class="form-group">		
				</div>
					<form action="/pegawai/cari" method="GET" class="form-inline">
						<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
						<input class="btn btn-primary ml-3" type="submit" value="CARI">
					</form>
			<br/>
		<br>
		<table class="table table-bordered">
			<tr>
				<th>Nama</th>
				<th>Jabatan</th>
				<th>Umur</th>
				<th>Alamat</th>
				<th>Opsi</th>
			</tr>

			<!-- tampilkan semua data -->
			@foreach($pegawai as $p)
				<tr>
					<td>{{ $p->pegawai_nama }}</td>
					<td>{{ $p->pegawai_jabatan }}</td>
					<td>{{ $p->pegawai_umur }}</td>
					<td>{{ $p->pegawai_alamat }}</td>
					<td>
						<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{$p->pegawai_id}}">Edit</a>
						<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{$p->pegawai_id}}">Hapus</a>
					</td>
				</tr>
			@endforeach
		</table> <br>
		Halaman : {{$pegawai->currentPage()}} <br>
		Jumlah Data : {{$pegawai->total()}} <br>
		Data Per Halaman : {{$pegawai->perPage()}} <br>

		{{$pegawai->links()}}
		</div>
	</div>
</div>
</body>
</html>