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
                    @if(session()->has('RegisterError'))
                    <div class="alert alert-danger alert-dismissible fade show">{{ session('LoginError') }}</div>
                    @endif
                    <form action="/register" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="email" class="fw-bold">Email</label>
                        <input type="email" id="email" class="form-control mb-3" name="email" placeholder="Email" required>
                        <label for="nama" class="fw-bold">Nama</label>
                        <input type="text" id="nama" class="form-control mb-3" name="name" placeholder="Nama" required>
                        <label for="hp" class="fw-bold">No. Handphone</label>
                        <input type="number" id="hp" class="form-control mb-3" name="no_hp" placeholder="Nomor Handphone" required>
                        <label for="passw" class="fw-bold">Kata Sandi</label>
                        <input type="password" id="passw" class="form-control mb-3" placeholder="Kata Sandi" required>
                        <label for="passs" class="fw-bold">Konfirmasi Kata Sandi</label>
                        <input type="password" id="passs" class="form-control" name="password" placeholder="Konfirmasi Kata Sandi" onkeyup='check();' required>
                        <span id='message'></span>
                        <div class="mt-3">
                            <button id="bsubmit" type="submit" class="btn btn-primary px-5 mt-3">Daftar</button>
                        </div>
                    </form>
                    <div>Anda sudah punya akun? <a href="/login">Login</a></div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script>
            var check = function() {
                if (document.getElementById('passw').value != document.getElementById('passs').value) {
                document.getElementById('bsubmit').disabled = true;
                document.getElementById("message").style.visibility = "visible";
                document.getElementById('message').style.color = 'red';
                document.getElementById('message').innerHTML = 'password not match';
                }else if (document.getElementById('passw').value == document.getElementById('passs').value) {
                    document.getElementById('bsubmit').disabled = false;
                    document.getElementById("message").style.visibility = "hidden";
                }
            }
        </script>
    </body>
</html>