<!doctype html>
<html class="h-100" lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../../css/main.css" rel="stylesheet" type="text/css">

    <title>MECHANICAL ENGINEERING EXPO 2021</title>
</head>

<body class="d-flex flex-column h-100">

<!-- Header -->
<?php
        session_start();
    ?>

    <?php 

    if (isset($_SESSION['username'])){ ?>
        <header>
            <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-transparent py-3" aria-label="header">
                <div class="container">
                    <a class="navbar-brand" href="../../../index.php">
                        <img src="..\..\..\assets\images\logo\Logo UNJ Event.png" width="190" class="d-inline-block"
                            alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="../../../index.php">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px-3 mx-2" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kegiatan</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="..\..\lomba\lomba.php">Lomba</a></li>
                                    <li><a class="dropdown-item" href="..\..\webinar\webinar.php">Webinar</a></li>
                                    <li><a class="dropdown-item" href="..\..\workshop\workshop.php">Workshop</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="../../../registrasi-acara.php">Daftarkan Kegiatan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="../../../about-us.php">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="../../../admin/logout.php">Log out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

    <?php } else { ?>
        <header>
            <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-transparent py-3" aria-label="header">
                <div class="container">
                    <a class="navbar-brand" href="../../../index.php">
                        <img src="../../../assets\images\logo\Logo UNJ Event.png" width="190" class="d-inline-block"
                            alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="../../../index.php">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px-3 mx-2" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acara</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="../../lomba/lomba.php">Lomba</a></li>
                                    <li><a class="dropdown-item" href="../../webinar/webinar.php">Webinar</a></li>
                                    <li><a class="dropdown-item" href="../../workshop/workshop.php">Workshop</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="../../../registrasi-acara.php">Daftarkan Acara</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="../../../about-us.php">Tentang Kami</a>
                            </li>
                        </ul>
                        <a class="btn btn-sm btn-outline-primary px-3 py-2" href="../../../login.php" role="button">
                            Masuk
                        </a>
                    </div>
                </div>
            </nav>
        </header>
    <?php } ?>
    
    <main class="container">
        <div class="row my-5">

            <!-- event photo -->
            <div class="col-lg-6 col-ms-12">
                <div class="event-photo text-center">
                    <img src="../../../assets/images/event/lomba/Mechanical Engineering Expo.jpeg">
                </div>
            </div>

            <!-- event title -->
            <div class="col-lg-6 col-ms-12">
                <div class="event-title">
                    <div class="event-categories text-center">
                        <a href="" class="btn btn-primary btn-sm px-4 py-0">Lomba</a>
                    </div>
                    <div class="mt-2 mb-3 text-center">
                        <small><a href="#" class="text-decoration-none text-muted">1 Oktober 2021</a></small>
                    </div>
                    <h4><b>MECHANICAL ENGINEERING EXPO 2021</b></h4>
                    <h6>Bersaing unjuk prestasi untuk bersiap hadapi era revolusi</h6>
                </div>
                <div class="event-price my-4">
                    <h2>GRATIS</h2>
                </div>

                <!-- pembuat event -->
                <div class="event-author mb-4">
                    <h6><i class="fa-lg fas fa-user-circle"></i> Penyelenggara Kegiatan</h6>
                    <p>Prodi Teknik Mesin</p>
                </div>

                <!-- deadline event -->
                <div class="event-limit mb-4">
                    <h6><i class="fa-lg fas fa-clock"></i> Batas Pemesanan</h6>
                    <p>09 - 23 Oktober 2021</p>
                </div>

                <!-- event dimulai -->
                <div class="event-start mb-4">
                    <h6><i class="fa-lg fas fa-calendar-week"></i> Waktu Pelaksanaan Kegiatan</h6>
                    <p>09 - 23 Oktober 2021</p>
                </div>

                <!-- lokasi event -->
                <div class="event-location mb-4">
                    <h6><i class="fa-lg fas fa-map-marker-alt"></i> Lokasi Kegiatan</h6>
                    <p>Online via Zoom</p>
                </div>

                <div class="registrasi-button">
                    <a class="btn btn-lg btn-primary px-3 py-2" href="https://bit.ly/LKTIN-MEEUNJ2021" role="button">
                        Daftar
                    </a>
                </div>
            </div>
        </div>

    </main>

    <!-- Footer -->
    <footer class="footer mt-auto pt-4 pb-2 text-center text-white">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-5 px-3">
                <div class="col">
                    <h5>
                        <a href="../../../about-us.php" class="text-white text-decoration-none">
                            <i class="fas fa-users me-2 me-md-1"></i>
                            About Us
                        </a>
                    </h5>
                </div>

                <div class="col">
                    <h5>
                        <a href="../../../contact-us.php" class="text-white text-decoration-none">
                            <i class="fas fa-headset me-2 me-md-1"></i>
                            Contact Us
                        </a>
                    </h5>
                </div>

                <div class="col">
                    <h5>
                        <a href="#" class="text-white text-decoration-none">
                            <i class="fab fa-facebook-square me-2 me-md-1"></i>
                            UNJEvent
                        </a>
                    </h5>
                </div>
                <div class="col">
                    <h5>
                        <a href="#" class="text-white text-decoration-none">
                            <i class="fab fa-instagram me-2 me-md-1"></i>
                            unjevent
                        </a>
                    </h5>
                </div>
                <div class="col">
                    <h5>
                        <a href="#" class="text-white text-decoration-none">
                            <i class="fab fa-twitter-square me-2 me-md-1"></i>
                            unjevent
                        </a>
                    </h5>
                </div>
            </div>
            <div class="row mt-3 text-white">
                <h6 class="text-center "><i class="fas fa-copyright small me-1"></i>2021 UNJ Event</h6>
            </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
        crossorigin="anonymous"></script>
    
    <!-- slick slider JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    
    <script src="js/app.js"></script>

</body>

</html>