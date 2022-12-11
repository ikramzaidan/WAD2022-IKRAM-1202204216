<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EAD Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="/assets/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 bg-pages">
                </div>
                <div class="col-lg-6 px-5 align-self-center">
                    <h2 class="mb-5">Login</h2>
                    @if(session()->has('RegisterSuccess'))
                    <div class="alert alert-success alert-dismissible fade show">{{ session('RegisterSuccess') }}</div>
                    @endif
                    @if(session()->has('LoginError'))
                    <div class="alert alert-danger alert-dismissible fade show">{{ session('LoginError') }}</div>
                    @endif
                    <form method="post" action="/login" enctype="multipart/form-data">
                        @csrf
                        <label for="mobil" class="fw-bold">Email</label>
                        <input type="email" id="email" class="form-control mb-3" name="email" placeholder="Email" required>
                        <label for="password" class="fw-bold">Kata Sandi</label>
                        <input type="password" id="password" class="form-control mb-3" name="password" placeholder="Kata Sandi" required>
                        <div class="mb-3">
                            <input type="checkbox" id="remember" class="form-check-input" name="remember"><label for="remember">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary px-5 mt-3">Login</button>
                    </form>
                    <div>Anda belum punya akun? <a href="/register">Daftar</a></div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>