<!doctype html>
<html class="h-100" lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/main.css" rel="stylesheet">

    <title>About Us - UNJEvent</title>
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
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/images/logo/Logo UNJ Event.png" width="190" class="d-inline-block"
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
                                <a class="nav-link px-3 mx-2" href="index.php">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px-3 mx-2" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kegiatan</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="kategori\lomba\lomba.php">Lomba</a></li>
                                    <li><a class="dropdown-item" href="kategori\webinar\webinar.php">Webinar</a></li>
                                    <li><a class="dropdown-item" href="kategori\workshop\workshop.php">Workshop</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="registrasi-acara.php">Daftarkan Kegiatan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="about-us.php">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="admin/logout.php">Log out</a>
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
                    <a class="navbar-brand" href="index.php">
                        <img src="assets\images\logo\Logo UNJ Event.png" width="190" class="d-inline-block"
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
                                <a class="nav-link px-3 mx-2" href="index.php">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px-3 mx-2" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acara</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="kategori/lomba/lomba.php">Lomba</a></li>
                                    <li><a class="dropdown-item" href="kategori/webinar/webinar.php">Webinar</a></li>
                                    <li><a class="dropdown-item" href="kategori/workshop/workshop.php">Workshop</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="registrasi-acara.php">Daftarkan Acara</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="about-us.php">Tentang Kami</a>
                            </li>
                        </ul>
                        <a class="btn btn-sm btn-outline-primary px-3 py-2" href="login.php" role="button">
                            Masuk
                        </a>
                    </div>
                </div>
            </nav>
        </header>
    <?php } ?>

<!-- landing page -->
    <div class="page-banner home-banner">
        <div class="container h-100">
            <div class="row my-4">
                <h2 class="display-1 text-truncate weight-bold text-center"><b>About Us</b></h2>
                <!-- gambar -->
                <div class="col-lg-4 image">
                    <img src="assets/images/about.jpg" width="300px">
                </div>

                <!-- deskripsi -->
                <div class="col-lg-8">
                    
                        <div class="desc mt-4">
                            <p>UNJEvent adalah website yang berfungsi sebagai media penyebaran informasi seputar event di UNJ dari setiap Fakultas dan Program Studi seperti Lomba, Webinar, dan Workshop. </p>
                            <p>Didirikan oleh sebuah kelompok belajar yang sedang berkuliah di S1 Pendidikan Teknik Informatika dan Komputer.</p>
                            <p>Website ini dibangun untuk lebih memudahkan para mahasiswa dan masyarakat umum dalam mengikuti maupun mendaftarkan event.</p>
                        </div>
                </div>

            </div>
        </div>
    </div>

  <div class="container mt-5">
    <div class="row">
        <h1 class="display-5 text-truncate weight-bold text-center"><b>Our Teams</b></h1>

        <!-- person 1 -->
        <div class="col-md-4">
            <div class="our-team p-4 my-4 text-center rounded box">
                <div class="pic">
                    <img class="img-responsive rounded-circle" src="assets/images/team/Joshua Kurniawan_UNJ.jpeg"
                    width="100px">
                </div>
                <div class="team-content">
                    <h3 class="title">Joshua Kurniawan</h3>
                    <h5>1512619039</h5>
                    <span class="post">Back-end</span>
                </div>
                <ul class="list-inline" style="list-style-type:none">
                    <li class="list-inline-item"><a href="https://www.instagram.com/joshuakurniawan_/" class="fa-lg fab fa-facebook-f"></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/joshuakurniawan_/" class="fa-lg fab fa-instagram"></a></li>
                </ul>
            </div>
        </div>
        
        <!-- person 2 -->
        <div class="col-md-4">
            <div class="our-team p-4 my-4 text-center rounded box">
                <div class="pic">
                    <img class="img-responsive rounded-circle" src="assets/images/team/Rizka Rahmawati Dewi_UNJ.jpg"
                    width="100px">
                </div>
                <div class="team-content">
                    <h3 class="title">Rizka Rahmawati D.</h3>
                    <h5>1512619042</h5>
                    <span class="post">Front-end</span>
                </div>
                <ul class="list-inline" style="list-style-type:none">
                    <li class="list-inline-item"><a href="https://www.instagram.com/rzkrd0.0/" class="fa-lg fab fa-facebook-f"></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/rzkrd0.0/" class="fa-lg fab fa-instagram"></a></li>
                </ul>
            </div>
        </div>

        <!-- person 3 -->
        <div class="col-md-4">
            <div class="our-team p-4 my-4 text-center rounded box">
                <div class="pic">
                    <img class="img-responsive rounded-circle" src="assets/images/team/Selvina Alya Putri_UNJ.jpeg"
                    width="100px">
                </div>
                <div class="team-content">
                    <h3 class="title">Selvina Alya Putri</h3>
                    <h5>1512619051</h5>
                    <span class="post">Front-end</span>
                </div>
                <ul class="list-inline" style="list-style-type:none">
                    <li class="list-inline-item"><a href="https://www.instagram.com/selvinalya/" class="fa-lg fab fa-facebook-f"></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/selvinalya/" class="fa-lg fab fa-instagram"></a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    
    <!-- Footer -->
    <footer class="footer mt-auto pt-4 pb-2 text-center text-white">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-5 px-3">
                <div class="col">
                    <h5>
                        <a href="about-us.php" class="text-white text-decoration-none">
                            <i class="fas fa-users me-2 me-md-1"></i>
                            About Us
                        </a>
                    </h5>
                </div>

                <div class="col">
                    <h5>
                        <a href="contact-us.php" class="text-white text-decoration-none">
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