<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>

    <div class="login-card">
        <h1>Selamat Datang</h1>
        <p>Silahkan login untuk melanjutkan</p>

        <form action="{{ route('login.process') }}" method="POST">
        @csrf
            
            <div class="input-group">
                <i class="fa-solid fa-user"></i>
                <input type="email" name="email" placeholder="Masukkan email">
            </div>

            <div class="input-group">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Masukkan Password">
            </div>
        
            <button class="login-btn">LOGIN</button>
        
            <div class="forgot">Lupa Password?</div>
        </form>
    </div>

</body>
</html>