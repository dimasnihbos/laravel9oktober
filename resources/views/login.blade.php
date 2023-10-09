@include('layout.navbar')

@section('content')

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <input type="checkbox" id="check">
        <div class="login form">
            <header>Sign Up</header>
            <form action="prosesregister.php" method="POST">
                <input type="text" name="nik" placeholder="nik">
                <input type="text" name="nama" placeholder="Nama">
                <input type="text" name="username" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <input type="text" name="telp" placeholder="no telp">
                <a href="#">Lupa Password?</a>
                <input type="submit" value="Daftar" class="button">
            </form>
            <div class="signup">
                <span class="signup">sudah punya akun?
                    <a href="login.php" style="color: springgreen; font-family: Poppins; font-weight: 500;">Login here</a>
                </span>
            </div>
        </div>
        
    </div>

</body>
</html>