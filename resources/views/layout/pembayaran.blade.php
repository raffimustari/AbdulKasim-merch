<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <title>Pembayaran</title>
</head>

<body>
    <div class="container mt-5">
        <div class="col-7 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <h3>Checkout</h3>
                        <hr>
                        <div>
                            <ul style="list-style-type: none;">
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex">
                                            <img style="width: 50px" src="img/zakishirt.jpeg" alt=""><span
                                                style="font-weight: 500; margin-top: 10px; margin-left: 10px;"> Nama Merch </span>
                                        </div>
                                        <h5 style="margin-top: 10px;">Rp. 200000</h5>
                                    </div>
                                </li>
                            </ul>
                            <input type="text" class="form-control" placeholder="Uang dibayarkan">
                            <hr>
                            <div class="mt-3">
                                <div class="d-flex justify-content-between">
                                    <p>Total : </p>
                                    <p style="font-weight: 500;">Rp. 500.000</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Kembali : </p>
                                    <p style="font-weight: 500;">Rp. 20.000</p>
                                </div>
                            </div>
                            <div class="mt-3">
                                <a href="#" class="btn btn-success w-100">Bayar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
