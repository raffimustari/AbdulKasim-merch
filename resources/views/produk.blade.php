<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Home

    </title>
</head>

<body>
    @include('layout.nav')
    <div class="container mt-5">
        <div class="row justify-content-center">
            @foreach ($produk as $p)
            <div class="col-2">
                <div class="card">
                    <div><img class="card-img-top" style="height: 200px;object-fit: cover;" src="{{ asset($p->foto) }}" class="w-100" alt=""></div>
                    <div class="card-body">
                        <p class="card-title" style="font-weight: 500">{{ $p->nama }}</p>
                        <p style="text-align: right;">{{ $p->harga }}</p>
                    </div>
                    <a href="{{ route('detail', $p->id) }}" class="btn btn-success p-2">Beli</a>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</body>

</html>
