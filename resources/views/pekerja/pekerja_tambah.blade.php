<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
	<title>Crud dengan eloquent</title>
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header text-center">
				<h3>CRUD Data Pekerja - <strong>TAMBAH DATA</strong></h3>
			</div>
			<div class="card-body">
				<a href="/pekerja" class="btn btn-primary"><< Kembali</a>
				<br><br>
				<form method="post" action="/pekerja/store">
					{{ csrf_field() }}
					<div class="form-group">
						<label>Nama</label>
						<input type="text" name="nama" class="form-control" placeholder="Nama Pekerja">

						@if($errors->has('nama'))
							<div class="text-danger">
								{{$errors->first('nama')}}
							</div>
						@endif
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<textarea name="alamat" class="form-control" placeholder="Alamat Pekerja"></textarea>

						@if($errors->has('alamat'))
							<div class="text-danger">
								{{$errors->first('alamat')}}
							</div>
						@endif
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>