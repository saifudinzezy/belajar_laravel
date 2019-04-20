<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <title>relasi many to one</title>
</head>
<body>
        <div class="container">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h3>
                        <h5 class="text-center my-4">Eloquent One To Many Relationship</h5>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Judul Article</th>
                                    <th>Tag</th>
                                    <th width="15%" class="text-center">Jumlah Tag</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($artikel as $a)
                                    <tr>
                                        {{-- ambil data artikel(judulnya) --}}
                                        <td>{{$a->judul}}</td>
                                        <td>
                                            {{-- looping data tags yang many --}}
                                            @foreach ($a->tags as $t)
                                                {{$t->tag}}
                                            @endforeach
                                        </td>
                                        {{-- brp byk data tags --}}
                                        <td class="text-center"> {{ $a->tags->count() }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
</body>
</html>