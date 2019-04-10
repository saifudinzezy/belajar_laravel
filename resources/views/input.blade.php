<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Form Validasi</title>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card mt-5">
					<div class="card-body">
						{{-- menampilkan error validasi --}}
						@if (count($errors) > 0)
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{$error}}</li>
									@endforeach
								</ul>
							</div>
						@endif <br>
						<!-- form validasi -->
						<form action="/proses" method="post">
							{{ csrf_field() }}
							<div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                            </div>
							<div class="form-group">
								<label for="pekerjaan">Pekerjaan</label>
								<input type="text" class="form-control" name="pekerjaan" value="{{ old('pekerjaan') }}">
								<!--fungsi old() fungsi utk menampilkan data sebelumnya yang di input -->
							</div>
							<div class="form-group">
								<label for="usia">Usia</label>
								<input type="text" class="form-control" name="usia" value="{{ old('usia') }}">
							</div>
							<div class="form-group">
                                    <input class="btn btn-primary" type="submit" value="Proses">
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>