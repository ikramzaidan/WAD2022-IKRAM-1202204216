<?php
include('../config/connector.php');
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
        <style>
        .toast {
            position: absolute;
            bottom: 3rem;
            right: 3rem;
        }
        </style>
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
                            <a class="nav-link" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/pages/ListCar-Ikram.php">Mycar</a>
                        </li>
                    </ul>
                    <?php if (!empty($_SESSION) and $_SESSION['auth'] == 1){?>
                    <a href="/pages/Add-Ikram.php" class="btn btn-light bg-white me-3">Add Car</a>
                    <li class="nav-item dropdown btn btn-light bg-white">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?=$_SESSION['user_name']?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="Profile-Ikram.php">Profile</a></li>
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
            <h1>My Show Room</h1>
            <p>List Show Room Ikram - 1202204216</p>
            <div class="row mb-5">
                <?php 
                $sql = "SELECT * FROM showroom_ikram_table";
                $query = mysqli_query($db, $sql);
                $count_row = mysqli_num_rows($query);
        
                while($item = mysqli_fetch_array($query)){
                ?>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="../assets/images/<?=$item['foto_mobil']?>" class="img-thumbnail">
                            <h4 class="mt-3"><?=$item['merk_mobil'].' '.$item['nama_mobil']?></h4>
                            <div class="mb-4"><?=$item['deskripsi']?></div>
                            <a href="/pages/Detail-Ikram.php?id=<?=$item['id_mobil']?>" class="btn btn-primary px-5 rounded-pill">Detail</a>
                            <a href="/config/delete.php?id=<?=$item['id_mobil']?>" class="btn btn-danger px-5 rounded-pill">Delete</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
            <p class="fw-bold">Jumlah Mobil: <?=$count_row?></p>
        </div>

        <?php
        if (!empty($_SESSION['msg'])) {
        ?>
        <div class="toast show align-items-center <?php if($_SESSION['msg']=='ds'):echo"text-bg-danger";else:echo"text-bg-success";endif;?> border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                <?php if($_SESSION['msg']=='is'):echo"Data berhasil ditambahkan.";elseif($_SESSION['msg']=='us'):echo"Data berhasil diperbarui.";
                elseif($_SESSION['msg']=='ds'):echo"Data berhasil dihapus.";endif;
                ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        <?php
        unset($_SESSION['msg']);
        }
        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>