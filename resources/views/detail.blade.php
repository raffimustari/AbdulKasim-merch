<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>

<body>
    <div class="container mt-5">
        <div class="">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img-top" src="{{ asset($produk->foto) }}" alt="forto">
                            <h1>{{ $produk->nama }}</h1>
                            <p>{{ $produk->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h3>Harga</h3>
                            <p style="font-weight: 600">Rp. {{ $produk->harga }}</p>
                            <form action=" {{ route('payment', $produk->id) }}" method="POST">
                                @csrf
                                <input type="number" name="jumlah" placeholder="0" id="jumlah"
                                    class="form-control mb-2">
                                <button class="btn btn-success w-100">Bayar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
