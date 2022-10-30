<?php
$name = "IKRAM%20ZAIDAN%20WICAKSONO_1202204216";
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
        .img-fluid {
            height: 182px !important;
            width: auto;
        }
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
                        <a class="nav-link active" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header id="home" class="py-5">
        <div class="container text-center">
            <h2 class="mb-4">Reservasi Kendaraan EAD</h2>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/4-avanza-silver-mica-metallic.png" class="img-fluid">
                            <h4>Avanza</h4>
                            <div>IDR 250.000,00/Hari</div>
                            <hr>
                            <div class="fw-bold text-primary">7 Kursi</div>
                            <div class="fw-bold text-primary">1,496 CC</div>
                            <div class="fw-bold text-primary">Manual</div>
                        </div>
                        <div class="card-footer">
                            <a href="/booking.php?name=<?=$name?>&car=Avanza" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://www.toyota.astra.co.id/sites/default/files/2020-10/1_innova-super-white-2_0.png" class="img-fluid">
                            <h4>Innova</h4>
                            <div>IDR 350.000,00/Hari</div>
                            <hr>
                            <div class="fw-bold text-primary">7 Kursi</div>
                            <div class="fw-bold text-primary">1,998 CC</div>
                            <div class="fw-bold text-primary">Manual</div>
                        </div>
                        <div class="card-footer">
                            <a href="/booking.php?name=<?=$name?>&car=Innova" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://www.toyota.astra.co.id/sites/default/files/2021-06/4.%20alphard%20colors%20black.png" class="img-fluid">
                            <h4>Alphard</h4>
                            <div>IDR 1.100.000,00/Hari</div>
                            <hr>
                            <div class="fw-bold text-primary">6 Kursi</div>
                            <div class="fw-bold text-primary">3,456 CC</div>
                            <div class="fw-bold text-primary">Automatic</div>
                        </div>
                        <div class="card-footer">
                            <a href="/booking.php?name=<?=$name?>&car=Alphard" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://www.toyota.astra.co.id/sites/default/files/2021-11/05_silver-metallic_0.png" class="img-fluid">
                            <h4>Camry</h4>
                            <div>IDR 600.000,00/Hari</div>
                            <hr>
                            <div class="fw-bold text-primary">7 Kursi</div>
                            <div class="fw-bold text-primary">2,487 CC</div>
                            <div class="fw-bold text-primary">Automatic</div>
                        </div>
                        <div class="card-footer">
                            <a href="/booking.php?name=<?=$name?>&car=Camry" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://www.toyota.astra.co.id/sites/default/files/2022-04/1%20hiace%20commuter%20white.png" class="img-fluid">
                            <h4>Hiace</h4>
                            <div>IDR 800.000,00/Hari</div>
                            <hr>
                            <div class="fw-bold text-primary">15 Kursi</div>
                            <div class="fw-bold text-primary">2,982 CC</div>
                            <div class="fw-bold text-primary">Manual</div>
                        </div>
                        <div class="card-footer">
                            <a href="/booking.php?name=<?=$name?>&car=Hiace" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="https://www.toyota.astra.co.id/sites/default/files/2022-08/2%20fortuner%20gr%202022%20super%20white.png" class="img-fluid">
                            <h4>Fortuner</h4>
                            <div>IDR 600.000,00/Hari</div>
                            <hr>
                            <div class="fw-bold text-primary">7 Kursi</div>
                            <div class="fw-bold text-primary">2,755 CC</div>
                            <div class="fw-bold text-primary">Matic</div>
                        </div>
                        <div class="card-footer">
                            <a href="/booking.php?name=<?=$name?>&car=Fortuner" class="btn btn-primary">Book Now</a>
                        </div>
                    </div>
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