{{-- <!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/form.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #4070f4;
        }
    </style>


    <div class="wrapper">
        @if (session()->has('loginerror') == true)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username / Password Salah
            </div>
        @endif
        <h2>Login Account</h2>
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="input-box">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-box button" align="center">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
            <p class="text-center"><a href="{{ url('registrasi/create') }}">Registrasi</a></p>
        </form>
    </div>

    <br><br><br><br>
    <div class="container mt-5">
        <div class="login-form ">
            @if (session()->has('loginerror') == true)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Username / Password Salah
                </div>
            @endif
            <form action="{{ route('login') }}" method="post">
                @csrf
                <h2 class="text-center">Log in</h2><hr>
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username"
                        required="required">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password"
                        required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Log in</button>
                </div>
                <p class="text-center"><a href="{{ url('registrasi/create') }}">Registrasi</a></p>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
</body>
</html> --}}



<!DOCTYPE html>
<!-- === Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="/css/login.css">

    <!--<title>Login & Registration Form</title>-->
</head>
<body>

    <div class="container">
        @if (session()->has('loginerror') == true)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username / Password Salah
            </div>
        @endif
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="input-field">
                        <input type="text" placeholder="Username" name="username" required>
                        <i class="uil uil-user icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Passowrd" name="password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="input-field button" align="center">
                        <button type="submit" >Login </button>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Belum Punya Akun?
                        <a href="#" class="text signup-link">Register</a>
                    </span>
                </div>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="{{ url('Akun') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-field">
                        <input type="text" placeholder="Nama Lengkap" name="nama" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Username" name="username" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" placeholder="Password" name="password" required>
                        <i class="uil uil-lock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Jabatan" name="jabatan" required>
                        <i class="uil uil-user-square"></i>
                    </div>
                    <div class="input-field button" align="center">
                        <button type="submit">Sign Up</button>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Sudah Memiliki Akun?
                        <a href="#" class="text login-link">Login</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/login.js"></script>
</body>
</html>

