<?php
session_start();
if(isset($_SESSION['user_id'])) {
    $id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $db = mysqli_connect('localhost', 'root', '', 'wad_modul4');
    $query = mysqli_query($db, $sql);
    $user = mysqli_fetch_assoc($query);
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
            <h2 class="text-center">Profile</h2>
            <form method="post" action="../config/update.php">
                <input type="hidden" name="id" value="<?=$_SESSION['user_id']?>">
                <label for="mobil" class="fw-bold">Email</label>
                <input type="email" id="email" class="form-control mb-3" name="email" value="<?=$user['email']?>" disabled>
                <label for="nama" class="fw-bold">Nama</label>
                <input type="text" id="nama" class="form-control mb-3" name="name" value="<?=$user['nama']?>" required>
                <label for="hp" class="fw-bold">No. Handphone</label>
                <input type="number" id="hp" class="form-control mb-3" name="phone" value="<?=$user['no_hp']?>" required>
                <hr>
                <label for="passw" class="fw-bold">Kata Sandi</label>
                <input type="password" id="passw" class="form-control mb-3" placeholder="Kata Sandi" value="<?=$user['no_hp']?>" required>
                <label for="passs" class="fw-bold">Konfirmasi Kata Sandi</label>
                <input type="password" id="passs" class="form-control mb-3" name="password" placeholder="Konfirmasi Kata Sandi" value="<?=$user['no_hp']?>" required>
                <button type="submit" class="btn btn-primary px-5 mt-3">Update</button>
            </form>
        </div>
        <?php
        if (!empty($_SESSION['msg'])) {
        ?>
        <div aria-live="polite" aria-atomic="true" class="position-relative">
            <div class="toast show align-items-center <?php if($_SESSION['msg']=='ps'):echo"text-bg-success";
                    elseif($_SESSION['msg']=='pf'):echo"text-bg-danger";endif;?>" border-0" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                    <?php if($_SESSION['msg']=='ps'):echo"Profil berhasil diperbarui.";elseif($_SESSION['msg']=='pf'):echo"Profil gagal diperbarui.";
                    endif;
                    ?>
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <?php
        unset($_SESSION['msg']);
        }
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>