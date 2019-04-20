<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <title>relasi many to many</title>
</head>
<body>
        <div class="container">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h3>
                        <h5 class="text-center my-4">Eloquent Many To Many Relationship</h5>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Pengguna</th>
                                    <th>Hadiah</th>
                                    <th width="1%">Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- looping data pengguna --}}
                                @foreach ($anggota as $a)
                                    <tr>
                                        {{-- keluarkan nama anggota --}}
                                        <td> {{$a->nama}} </td>
                                        <td>
                                            <ul>
                                                {{-- lopping data hadiah --}}
                                                @foreach ($a->hadiah as $h)
                                                {{-- ambil nama hadiah --}}
                                                    <li> {{$h->nama_hadiah}} </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                        {{-- jumlah hadiah --}}
                                        <td class="text-center"> {{$a->hadiah->count()}} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</body>
</html>