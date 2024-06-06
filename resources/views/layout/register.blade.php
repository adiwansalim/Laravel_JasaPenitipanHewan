<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/Style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins: wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/5.15.3/css/all.min.css" />
</head>
<body>
<div class="container">
    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('assets/logo.png') }}" alt="" width="200" height="100" />
            </div>
            <input type="checkbox" id="click" />
            <label for="click" class="menu-btn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="tambahtransaksi">Transaksi</a></li>
                <li><a href="/" class="btn_login">Login</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="center">
            <div class="form-login">
                <h3>Register</h3>
                <form action="process" method="post">
                    @csrf
                    <input class="input" type="email" name="email" placeholder="Email" />
                    <input class="input" type="text" name="username" placeholder="Username" />
                    <input class="input" type="password" name="password" placeholder="Password" />
                    <button type="submit" class="btn_login">Register</button>
                </form>
            </div>
        </div>
    </main>
</div>
</body>
</html>
