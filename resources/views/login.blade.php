<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
<div class="container mt-4">
    <div class="card col-4 shadow mx-auto">
        <h3 class="text-center">Login</h3>
        <form action="{{route('postlogin')}}" class="form-group p-3" method="POST">
            @csrf
            <label for="">Email :</label>
            <input type="text" name="email" required class="form-control">
            <label for="">password :</label>
            <input type="password" name="password" required class="form-control">
            <button class="btn btn-primary mt-4 w-100">login</button>
        </form>
    </div>
</div>    

</body>
</html>