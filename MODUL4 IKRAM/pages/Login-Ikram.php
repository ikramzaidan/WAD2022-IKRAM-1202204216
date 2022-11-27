<?php 
session_start();
if(isset($_COOKIE['loginid'])){
    require '../config/login.php';
    loginWithCookie($_COOKIE['loginid']);
}
if (!empty($_SESSION['auth'])){
    header('Location: ../pages/Home-Ikram.php');
    die();
}else{
    require '../config/login.php';
    if(isset($_POST['submit'])) {
        if(login($_POST['email'], $_POST['password']) == true) {
            if(isset($_POST['remember'])) {
                setcookie('loginid', $user_id, time()+3600);
            }
            header('Location: ../pages/Home-Ikram.php');
            die();
        }else{
            $_SESSION['msg'] = 'lf';
        }
    }
?>    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EAD Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link href="../assets/styles/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 bg-pages">
                </div>
                <div class="col-lg-6 px-5 py-5">
                <?php if(isset($_SESSION['msg'])){?>
                <div class="alert <?php if($_SESSION['msg'] == 'rs'){echo "alert-success";}elseif($_SESSION['msg']){echo "alert-danger";}?> alert-dismissible fade show" role="alert">
                    <?php if($_SESSION['msg'] == 'rs'){echo "Pendaftaran berhasil.";}elseif($_SESSION['msg'] == 'lf'){echo "Email atau password salah.";}?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php unset($_SESSION['msg']);}?>
                    <h2 class="mb-5">Login</h2>
                    <form method="post" action="">
                        <label for="mobil" class="fw-bold">Email</label>
                        <input type="email" id="email" class="form-control mb-3" name="email" placeholder="Email" required>
                        <label for="password" class="fw-bold">Kata Sandi</label>
                        <input type="password" id="password" class="form-control mb-3" name="password" placeholder="Kata Sandi" required>
                        <div class="mb-3">
                            <input type="checkbox" id="remember" class="form-check-input" name="remember"><label for="remember">Remember me</label>
                        </div>
                        <input type="submit" class="btn btn-primary px-5 mt-3" name="submit" value="Login">
                    </form>
                    <div>Anda belum punya akun? <a href="Register-Ikram.php">Daftar</a></div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
<?php }?>
