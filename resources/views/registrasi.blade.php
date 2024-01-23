    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Buat akun</title>
    </head>
    <body>
        <div class="container-mt-5">
            <form action="" method="POST">
                @csrf
                <h3 class="Text-center">Silahkan isi data</h3>
                <hr>
                <div class="mb-3">
                    <label class="form-label">Nama costumer</label>
                    <input type="text" class="form-control" required name="nama">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="emai;" class="form-control" id="exampleimputemail1" required name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleimputpassword1" required name="password">
                </div>
                <button type="submit" class="btn btn-success">Kirim</button>
            </form>
        </div>
        
    </body>
    </html>