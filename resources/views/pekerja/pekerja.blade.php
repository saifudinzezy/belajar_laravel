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
				<h3>CRUD Data Pekerja</h3>
			</div>
			<div class="card-body">
				<a href="/pekerja/tambah" class="btn btn-primary">+ Input Pekerja Baru</a>
				<br><br>
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Alamat</th>
							<th>OPSI</th>
						</tr>
					</thead>
					<tbody>
						@foreach($pekerja as $p)
							<tr>
								<td>{{$p->nama}}</td>
								<td>{{$p->alamat}}</td>
								<td>
									<a href="/pekerja/edit/{{$p->id}}" class="btn btn-warning">Edit</a>
									<a href="/pekerja/hapus/{{$p->id}}" class="btn btn-danger">Hapus</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>