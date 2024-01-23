<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Keranjang</title>
</head>

<body>
    <div class="container mt-5 w-75">
        <div class="d-flex justify-content-between">
            <div class="d-flex" style="gap: 20px">
                <h5>Pilih semua</h5>
                <input type="checkbox" name="allcheckout" onchange="pilihSemua()" id="allcheckout"
                    style="transform: scale(2)">
            </div>
            <button onclick="checkout()" style="border-radius: 2px" class="btn btn-primary">Checkout</button>
        </div>

        @foreach ($pesanan as $pesan)
            <div class="row mt-5">
                <div class="col-1 d-flex align-items-center">
                    <div class="justify-content-center">
                        <form id="formCheckbox" action="{{ route('pembayaran') }}"> 
                            <input type="checkbox" value="{{ $pesan->produk->id }}" name="checkout[]" id="checkout"
                                style="transform: scale(2)">
                        </form>
                    </div>
                </div>

                <div class="col-3">
                    <div class="card">
                        <img src="{{ $pesan->produk->foto }}" class="card-img-top" alt="foto" class="card-img-top">
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between" style="height: 50px">
                                <h2>{{ $pesan->produk->nama }}</h2>
                                @if ($pesan->detailtransaksi->status === 'Pending')
                                    <span class="alert alert-warning" style="margin-top: -10px;">Pending</span>
                                @endif
                                @if ($pesan->detailtransaksi->status == 'Dibayar')
                                    <span class="alert alert-success" style="margin-top: -10px;">Dibayar</span>
                                @endif
                            </div>
                            <ul style="list-style-type: none;">
                                <div class="d-flex justify-content-between">
                                    <li>Harga barang : <span style="font-weight: 500">Rp.
                                            {{ $pesan->produk->harga }}</span></li>
                                    <p><span style="font-weight: 500">Jumlah barang :</span>
                                        {{ $pesan->detailtransaksi->jumlah }}</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <li>Total bayar : <span style="font-weight: 500">Rp.
                                            {{ $pesan->detailtransaksi->total_harga }}</span></li>
                                    <p>Keterangan : <span
                                            style="font-weight: 500">{{ $pesan->detailtransaksi->keterangan }}</span>
                                    </p>

                                </div>

                            </ul>
                            <hr>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>

<script>
    function pilihSemua() {
        var checkboxAll = document.getElementById('allcheckout');
        var checkboxes = document.querySelectorAll('[id="checkout"]');

        checkboxes.forEach(function(checkbox) {
            checkbox.checked = checkboxAll.checked;
        });
    }

    function checkout() {
        var checkboxes = document.querySelectorAll('[id="checkout"]');
        var selectedValues = [];
    
            checkboxes.forEach(function (checkbox) {
                if (checkbox.checked) {
                    selectedValues.push(checkbox.value);
                }
            });

        var form = document.getElementById('formCheckbox');
        form.submit();
    }

</script>

</html>
