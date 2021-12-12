<!doctype html>
<html class="h-100" lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../../css/main.css" rel="stylesheet">

    <title>Webinar - UNJEvent</title>
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
                    <a class="navbar-brand" href="../../index.php">
                        <img src="..\..\assetsimages\logo\Logo UNJ Event.png" width="190" class="d-inline-block"
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
                                <a class="nav-link px-3 mx-2" href="../../index.php">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px-3 mx-2" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kegiatan</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="..\lomba\lomba.php">Lomba</a></li>
                                    <li><a class="dropdown-item" href="webinar.php">Webinar</a></li>
                                    <li><a class="dropdown-item" href="..\workshop\workshop.php">Workshop</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="../../registrasi-acara.php">Daftarkan Kegiatan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="../../about-us.php">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="../../admin/logout.php">Log out</a>
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
                    <a class="navbar-brand" href="../../index.php">
                        <img src="../../assets\images\logo\Logo UNJ Event.png" width="190" class="d-inline-block"
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
                                <a class="nav-link px-3 mx-2" href="../../index.php">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle px-3 mx-2" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acara</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="../lomba/lomba.php">Lomba</a></li>
                                    <li><a class="dropdown-item" href="webinar.php">Webinar</a></li>
                                    <li><a class="dropdown-item" href="../workshop/workshop.php">Workshop</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="../../registrasi-acara.php">Daftarkan Acara</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3 mx-2" href="../../about-us.php">Tentang Kami</a>
                            </li>
                        </ul>
                        <a class="btn btn-sm btn-outline-primary px-3 py-2" href="../../login.php" role="button">
                            Masuk
                        </a>
                    </div>
                </div>
            </nav>
        </header>
    <?php } ?>

     <!-- Buttons -->
     <!-- <div class="text-center text-md-start"> -->
        <!-- <a href="#content" class="btn btn-primary shadow px-3 py-2">
            View all news <i class="fas fa-arrow-down ms-2"></i>
        </a>
    </div> -->

 
    <main class="container-fluid mb-5">
        <div class="container py-2" id="content">

            <!-- Baris 1 -->
            <div class="row row-cols-1 row-cols-md-3 mt-3 pt-3">
                <h2 class="fw-bolder text-dark text-center col-md-12 mb-3">Webinar</h2>
                <div class="col my-2">
                    <div class="card">
                        <a href="Konten/webinar-1.php">
                            <img src="../../assets/images/event/webinar/Kalimah Akbar.jpeg"
                                class="card-img-top" alt="thumbnail">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                Kalimah Akbar 2021
                            </h5>
                            <p class="card-text">
                                Assalamu'alaykum warahmatullah wabarakatuh
                                Undangan Spesial untuk saudari ku dimanapun berada..
                                Kalimah hadir lagi dengan tema yang luar biasa,
                                Muslimah Berperan Membangun Peradaban
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card">
                        <a href="Konten/webinar-2.php">
                            <img src="../../assets/images/event/webinar/Seminar K-Talks.jpeg"
                                class="card-img-top" alt="thumbnail"> 
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                               K-TALKS
                            </h5>
                            <p class="card-text">
                                Assalamualaikum Warahmatullah Wabarakatuh
                                Halo, Ekonom Rabbani!
                                BMT KAMU FE UNJ
                                Mempersembahkan
                                K-TALKS (KAMU TALKS)
                                Tema : "Peran BMT dalam Meningkatkan Inklusi Keuangan untuk Pemulihan Ekonomi Indonesia"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card">
                        <a href="Konten/webinar-3.php">
                            <img src="../../assets/images/event/webinar/Seminar Nasional.jpeg"
                            class="card-img-top" alt="thumbnail">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                Seminar Nasional
                            </h5>
                            <p class="card-text">
                                Program Studi
                                Pendidikan Biologi dan Biologi
                                Universitas Negeri Jakarta

                                Proudly present 

                                Hai Sobat Bioleaf!
                                Seminar Nasional BIOLEAF 2021 hadir kembali di bulan Oktober dengan tema:
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- baris 2 -->
            <div class="row row-cols-1 row-cols-md-3 mt-3 pt-3">
                <div class="col my-2">
                    <div class="card">
                        <a href="Konten/webinar-4.php">
                            <img src="../../assets/images/event/webinar/Seminar PKM.jpeg"
                                class="card-img-top" alt="thumbnail">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                Seminar Sosialisasi Sukses PKM dan MAWAPRES Tata Busana 2021
                            </h5>
                            <p class="card-text">
                                Hallo,Fashion People
                                Ada informasi penting nih untuk kita para mahasiswa berprestasi,apakah itu?
                                Informasi penting tersebut adalah :
                                
                                SEMINAR SOSIALIASI SUKSES PKM DAN MAWAPRES TATA BUSANA 2021
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card">
                        <a href="Konten/webinar-5.php">
                            <img src="../../assets/images/event/webinar/Seminar2.jpeg"
                                class="card-img-top" alt="thumbnail"> 
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                Seminar Trend Forecasting 2022-2023
                            </h5>
                            <p class="card-text">
                                Trend Forecasting menjadi salah satu hal yang ditunggu-tunggu oleh sebagian besar pelaku industri kreatif di dunia tak terkecuali di Indonesia. Dan Tahukah kamu bahwa industri mode adalah penghasil limbah terbesar nomor dua? Kira kira hal apa saja sih yang dapat mengurangi limbah pakaian dan gimana caranya sih pengaplikasiannya ke bidang fashion
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card">
                        <a href="Konten/webinar-6.php">
                            <img src="../../assets/images/event/webinar/Webinar Nasional.jpeg"
                            class="card-img-top" alt="thumbnail">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                Webinar Nasional G-Sastrasia 2021
                            </h5>
                            <p class="card-text">
                                WEBINAR NASIONAL G-SASTRASIA 2021
                                Yuk manfaatkan waktumu di tengah pandemi dengan cara mengikuti webinar nasional G-Sastrasia 2021 dengan tema "Menulis Fiksi sebagai Wujud Cinta Sastra dan Produktif Berkarya" 
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- baris 3 -->
            <div class="row row-cols-1 row-cols-md-3 mt-3 pt-3">
                <div class="col my-2">
                    <div class="card">
                        <a href="Konten/webinar-7.php">
                            <img src="../../assets/images/event/webinar/webinar pkm.jpeg"
                                class="card-img-top" alt="thumbnail">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                Webinar PKM Biologi 2021
                            </h5>
                            <p class="card-text">
                                Mahasiswa perlu menggali potensi dengan mengasah kreativitas, menuangkan ide, meningkatkan kemampuan  menulis, mendapatkan pengalaman berkompetisi, mendapat pengakuan, serta mendapatkan koneksi, agar menjadi lulusan yang unggul, adaptif, produktif, dan berdaya saing tinggi.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card">
                        <a href="Konten/webinar-8.php">
                            <img src="../../assets/images/event/webinar/Webinar.jpeg"
                                class="card-img-top" alt="thumbnail"> 
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                               Webinar IT EXPO 2021
                            </h5>
                            <p class="card-text">
                                PROUDLY PRESENT:
                                IT EXPO UNJ 2021
                                “Digital Transformation in Pandemic Era”
                                Rangkaian IT EXPO UNJ 2021
                                Lomba
                                Workshop
                                Webinar
                                Expo
                            </p>
                        </div>
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
                        <a href="../../about-us.php" class="text-white text-decoration-none">
                            <i class="fas fa-users me-2 me-md-1"></i>
                            About Us
                        </a>
                    </h5>
                </div>

                <div class="col">
                    <h5>
                        <a href="../../contact-us.php" class="text-white text-decoration-none">
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