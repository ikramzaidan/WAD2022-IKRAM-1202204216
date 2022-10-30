<?php
if(isset($_GET['name']) and isset($_GET['car'])){
    $name = $_GET['name'];
    $car = $_GET['car'];
    
    if($car == 'Avanza'){
        $img = 'https://www.toyota.astra.co.id/sites/default/files/2021-11/4-avanza-silver-mica-metallic.png';
    }elseif($car == 'Innova'){
        $img = 'https://www.toyota.astra.co.id/sites/default/files/2020-10/1_innova-super-white-2_0.png';
    }elseif($car == 'Alphard'){
        $img = 'https://www.toyota.astra.co.id/sites/default/files/2021-06/4.%20alphard%20colors%20black.png';
    }elseif($car == 'Camry'){
        $img = 'https://www.toyota.astra.co.id/sites/default/files/2021-11/05_silver-metallic_0.png';
    }elseif($car == 'Hiace'){
        $img = 'https://www.toyota.astra.co.id/sites/default/files/2022-04/1%20hiace%20commuter%20white.png';
    }elseif($car == 'Fortuner'){
        $img = 'https://www.toyota.astra.co.id/sites/default/files/2022-08/2%20fortuner%20gr%202022%20super%20white.png';
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
    <nav class="navbar navbar-dark bg-dark  navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
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
    <header id="home" class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">Reservasi Kendaraan EAD</h2>
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <?php if(isset($car)):?>
                    <img class="img-fluid" src="<?=$img?>">
                    <?php else:?>
                    <img class="img-fluid" src="https://www.toyota.astra.co.id/sites/default/files/2021-11/4-avanza-silver-mica-metallic.png">
                    <?php endif?>
                </div>
                <div class="col-lg-6">
                    <form method="post" action="mybooking.php">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control mb-3" name="name" placeholder="Name" <?php if(isset($name)){echo 'value="'.$name.'" readonly';}?> required>
                        <label for="phone">Phone Number</label>
                        <input type="text" id="phone" class="form-control mb-3" name="phone" placeholder="Phone Number" required>
                        <label for="date">Book Date</label>
                        <input type="date" id="date" class="form-control mb-3" name="date" required>
                        <label for="time">Start Time</label>
                        <input type="time" id="time" class="form-control mb-3" name="time" required>
                        <label for="duration">Duration (Days)</label>
                        <input type="number" id="duration" class="form-control mb-3" name="duration" placeholder="Duration" required>
                        <label for="email">Car Type</label>
                        <?php if(isset($car)):?>
                        <input type="text" class="form-select mb-3" name="car" value="<?=$car?>"?>
                        <?php else:?>
                        <select id="mobil" class="form-select mb-3" name="car">
                            <option value="Avanza">Avanza</option>
                            <option value="Innova">Innova</option>
                            <option value="Alphard">Alphard</option>
                            <option value="Camry">Camry</option>
                            <option value="Hiace">Hiace</option>
                            <option value="Fortuner">Fortuner</option>
                        </select>
                        <?php endif?>
                        <div class="mb-3">
                            <div>Add Extra Services</div>
                            <input id="driver" type="checkbox" name="driver"><label for="driver">Driver / Rp100.000</label><br>
                            <input id="insurance" type="checkbox" name="insurance"><label for="insurance">Trip Insurance / Rp50.000</label><br>
                            <input id="gasoline" type="checkbox" name="gasoline"><label for="gasoline">Full Filled / Rp250.000</label>
                        </div>
                        <button type="submit" class="form-control btn btn-danger">Pesan</button>
                    </form>
                </div>                
            </div>
        </div>
    </header>
    <footer class="py-3 text-center" style="background-color: #e9ecef;">
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