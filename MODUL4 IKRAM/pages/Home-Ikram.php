<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EAD Rental</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary  navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../pages/ListCar-Ikram.php">Mycar</a>
                        </li>
                    </ul>
                    <?php if (!empty($_SESSION) and $_SESSION['auth'] == 1){?>
                    <a href="/pages/Add-Ikram.php" class="btn btn-light bg-white me-3">Add Car</a>
                    <li class="nav-item dropdown btn btn-light bg-white">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?=$_SESSION['user_name']?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../pages/Profile-Ikram.php">Profile</a></li>
                            <li><a class="dropdown-item" href="../config/logout.php">Log Out</a></li>
                        </ul>
                    </li>
                    <?php } else {?>
                    <a href="/pages/Login-Ikram.php" class="btn btn-light bg-white me-3">Login</a>
                    <?php }?>
                </div>
            </div>
        </nav>
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <h1>Selamat Datang  Di Showroom Ikram</h1>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia magni aliquid totam tempore, eum fuga saepe repellendus? Fugiat, consequuntur quaerat.</p>
                    <a href="/pages/ListCar-Ikram.php" class="btn btn-primary p-2 px-4 mb-5">MyCar</a>
                    <div>
                        <img src="../assets/images/logo-ead.png" alt="Logo" height="32" width="auto">
                        <span class="px-3">IKRAM ZAIDAN WICAKSONO_1202204216</span>
                    </div>
                </div>
                <div class="col">
                    <img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/4-avanza-silver-mica-metallic.png" class="img-fluid">
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>