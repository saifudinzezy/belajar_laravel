<!DOCTYPE html>
<html>
<head>
	<title>Tutorial membuat CRUD </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>
	<div class="container">
		<div class="card">
			<div class="card-body">		
				<h3>Data Pegawai</h3>
					<a class="btn btn-danger btn-sm" href="/pegawai"><< Kembali</a>
						<br><br>
						<div class="form-group">
							<form action="/pegawai/store" method="post">
								{{ csrf_field() }}
								<input class="form-control" type="text" name="nama" required="required" placeholder="Nama"> <br/>
								<input class="form-control" type="text" name="jabatan" required="required" placeholder="Jabatan"> <br/>
								<input class="form-control" type="number" name="umur" required="required" placeholder="Umur"> <br/>
								<textarea class="form-control" name="alamat" required="required" placeholder="Alamat"></textarea> <br/>
								<input class="btn btn-success" type="submit" value="Simpan Data">
							</form>
						</div>
			</div>
		</div>
	</div>
</body>
</html>