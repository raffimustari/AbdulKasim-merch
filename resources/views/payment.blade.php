<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <title>Payment</title>
</head>

<body>
    <div class="container mt-5">
        <div class="col-5 mx-auto">
            <div class="card">
                <div class="card-body">
                   <form action="{{ route('submit-payment', [$produk->id, $jumlah]) }}" method="POST">
                    @csrf
                    <h3>Masukan keranjang</h3>
                    <div>
                        <ul style="list-style-type: none; text-align: right;">
                            <li><img style="width: 100px" src="{{ asset($produk->foto) }}" alt=""></li>
                            <li>Nama Produk : <span style="font-weight: 500">{{ $produk->nama }}</span></li>
                            <li>Harga Produk : <span style="font-weight: 500">Rp. {{ number_format($produk->harga, 2, ',','.') }}</span></li>
                            <li>Jumlah Produk : <span style="font-weight: 500">{{ $jumlah }}</span></li>
                            <li>Biaya admin : <span style="font-weight: 500">Rp. {{ number_format(2000, 2, ',','.') }}</span></li>
                            <li>Total bayar : <span style="font-weight: 500">Rp. {{ number_format($produk->harga * $jumlah + 2000, 2,',','.') }}</span></li>
                        </ul>
                        <hr>
                        <input type="text" class="form-control" placeholder="Keterangann tambahan" name="keterangan">
                        <div class="mt-3">
                            <button class="btn btn-primary w-100">Masukan keranjang</button>

                        </div>
                    </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
