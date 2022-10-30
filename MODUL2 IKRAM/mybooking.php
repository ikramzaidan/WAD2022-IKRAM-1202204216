<?php
$duration = $_POST['duration'];
$checkout = strtotime("+$duration days", strtotime($_POST['date']));
$car = $_POST['car'];

if($car == 'Avanza'){
    $price = 250000;
}elseif($car == 'Innova'){
    $price = 350000;
}elseif($car == 'Alphard'){
    $price = 1100000;
}elseif($car == 'Camry'){
    $price = 600000;
}elseif($car == 'Hiace'){
    $price = 800000;
}elseif($car == 'Fortuner'){
    $price = 600000;
}

$ttlPrice = $price*$duration;
if(isset($_POST['driver'])){
    $ttlPrice += 100000;
}
if(isset($_POST['insurance'])){
    $ttlPrice += 50000;
}
if(isset($_POST['gasoline'])){
    $ttlPrice += 250000;
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
    <style>
        @media (min-width: 768px) {
            .w-100 {
                width: 50% !important;
            }
            .vh-50 {
                height: 50vh !important;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">
                <img src="img/logo-ead.png" alt="Logo" height="32" width="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Thank You</h2>
            <table class="table">
                <tr>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Check In</th>
                    <th scope="col">Check Out</th>
                    <th scope="col">Car Type</th>
                    <th scope="col">Service(s)</th>
                    <th scope="col">Total Price</th>
                </tr>
                <tr class="table-secondary">
                    <td><?= rand(1111111111,9999999999)?></td>
                    <td><?= $_POST['name']?></td>
                    <td><?= $_POST['phone']?></td>
                    <td><?= $_POST['date'].' '.$_POST['time']?></td>
                    <td><?= date("Y-m-d", $checkout).' '.$_POST['time']?></td>
                    <td><?= $car?></td>
                    <td>
                        <ul>
                        <?php if(isset($_POST['driver'])):?><li>Driver</li><?php endif?>
                        <?php if(isset($_POST['insurance'])):?><li>Trip Insurance</li><?php endif?>
                        <?php if(isset($_POST['gasoline'])):?><li>Full Filled</li><?php endif?>
                        </ul>
                        <?php if(!isset($_POST['driver']) and !isset($_POST['insurance']) and !isset($_POST['gasoline'])):?>-<?php endif?>
                    </td>
                    <td><?= $ttlPrice?></td>
                </tr>
            </table>    
        </div>
    </section>
    <footer class="py-3 text-center fixed-bottom" style="background-color: #e9ecef;">
        <a data-bs-toggle="modal" data-bs-target="#exampleModal">Copyright 2022 Ikram_1202204216_SI4406</a>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Copyright</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                Nama: Ikram Zaidan Wicaksono<br/>
                NIM: 1202204216<br/>
                Kelas: SI4406
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>