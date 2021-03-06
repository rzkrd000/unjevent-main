<!doctype html>
<html class="h-100" lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/main.css" rel="stylesheet">

    <title>Home - UNJEvent</title>
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
    

    <!-- carousel -->
    <section>
        <div class="container">
                <div class="carousel">
                    <div id="carouselExampleIndicators" class="carousel slide mh-50" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner rounded-3">

                            <!-- Konten 1 (Aktif) -->
                            <div class="carousel-item active">
                                <a href="#" class="stretched-link"></a>
                                <img src="assets/images/banner1.png"
                                    class="d-block w-100" alt="thumbnail">
                            </div>

                            <!-- Konten 2 -->
                            <div class="carousel-item">
                                <a href="#" class="stretched-link"></a>
                                <img src="assets/images/banner2.png" class="d-block w-100" alt="thumbnail">
                            </div>

                            <!-- Konten 3 -->
                            <div class="carousel-item">
                                <a href="#" class="stretched-link"></a>
                                <img src="assets/images/banner3.png"
                                    class="d-block w-100" alt="thumbnail">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </a>
                    </div>
                </div>

        </div> <!-- / .container -->
    </section>

    <main class="container-fluid mb-5">
        <div class="container py-2" id="content">

            <!-- Card Lomba -->
            <div class="row row-cols-1 row-cols-md-3 mt-3 pt-3" data-aos="fade-up">
                <h2 class="fw-bolder text-dark text-center col-md-12 mb-3">Lomba Terbaru</h2>
                <div class="col my-2">
                    <div class="card">
                        <a href="kategori/lomba/Konten/lomba-1.php">
                            <img src="assets/images/event/lomba/Essay Competition.jpeg"
                                class="card-img-top" alt="thumbnail">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                Essay Competition Electrical Engineering Expo 2021
                            </h5>
                            <p class="card-text">
                                ?????????Essay Competition merupakan suatu ajang lomba menulis esai GRATIS mahasiswa/i tingkat nasional yang menjadi acara kedua dari rangkaian acara Electrical Engineering Expo 2021 dengan mengangkat tema "Kontribusi Generasi Muda Dalam Mewujudkan SDGs Tahun 2030"
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card">
                        <a href="kategori/lomba/Konten/lomba-2.php">
                            <img src="assets/images/event/lomba/G-Sastrasia.jpeg"
                                class="card-img-top" alt="thumbnail"> 
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                               G-SASTRASIA 2021
                            </h5>
                            <p class="card-text">
                                G-SASTRASIA (Gebyar Bahasa dan Sastra Indonesia)
                                Prodi Pendidikan Bahasa dan Sastra Indonesia mengadakan event dalam rangka merayakan bulan bahasa
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card">
                        <a href="kategori/lomba/Konten/lomba-3.php">
                            <img src="assets/images/event/lomba/Mechanical Engineering Expo.jpeg"
                            class="card-img-top" alt="thumbnail">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                Mechanical Engineering Expo 2021
                            </h5>
                            <p class="card-text">
                                Mengusung tema "Bersaing Unjuk Prestasi Untuk Bersiap Hadapi Era Revolusi" 
                                Untuk Siswa/i, Mahasiswa/i, dan Masyarakat Umum Seluruh Indonesia. Dengan berbagai perlombaan skala Nasional serta Seminar Nasional. ming ternama Razer yaitu ASRock Taichi Razer Edition.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Webinar -->
            <div class="row row-cols-1 row-cols-md-3 mt-3 pt-3" data-aos="fade-up">
                <h2 class="fw-bolder text-dark text-center col-md-12 mb-3">Webinar Terbaru</h2>
                <div class="col my-2">
                    <div class="card">
                        <a href="kategori/webinar/Konten/webinar-8.php">
                            <img src="assets/images/event/webinar/Webinar.jpeg"
                            class="card-img-top" alt="thumbnail">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                WEBINAR IT EXPO UNJ 2021
                            </h5>
                            <p class="card-text">
                                PROUDLY PRESENT:
                                ???IT EXPO UNJ 2021???
                                ???Digital Transformation in Pandemic Era???
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card">
                        <a href="kategori/webinar/Konten/webinar-1.php">
                            <img src="assets/images/event/webinar/Kalimah Akbar.jpeg"
                            class="card-img-top" alt="thumbnail">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                               KALIMAH AKBAR 2021
                            </h5>
                            <p class="card-text">
                                Assalamu'alaykum warahmatullah wabarakatuh ????????
                                Undangan Spesial untuk saudari ku dimanapun berada..
                                Kalimah hadir lagi dengan tema yang luar biasa,
                                ?????? Muslimah Berperan Membangun Peradaban ??????
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col my-2">
                    <div class="card">
                        <a href="kategori/webinar/Konten/webinar-2.php">
                            <img src="assets/images/event/webinar/Seminar K-Talks.jpeg"
                            class="card-img-top" alt="thumbnail">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                K-TALKS 2021
                            </h5>
                            <p class="card-text">
                                K-TALKS 2021 Is Coming. BMT KAMU FE UNJ mempersembahkan K-TALKS bertema "Peran BMT dalam Meningkatkan Inklusi Keuangan untuk Pemulihan Ekonomi Indonesia"
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Workshop -->
            <div class="row row-cols-1 row-cols-md-3 mt-3 pt-3" data-aos="fade-up">
                <h2 class="fw-bolder text-dark text-center col-md-12 mb-3">Workshop Terbaru</h2>
                <div class="col my-2">
                    <div class="card">
                        <a href="kategori/workshop/Konten/workshop-1.php">
                            <img src="assets/images/event/workshop/Workshop.jpeg"
                            class="card-img-top" alt="thumbnail">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                WORKSHOP IT EXPO UNJ 2021
                            </h5>
                            <p class="card-text">
                                PROUDLY PRESENT:
                                ???IT EXPO UNJ 2021???
                                ???Digital Transformation in Pandemic Era???
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- logo Fakultas slider otomatis -->
    <section>
        <h2 class="fw-bolder text-dark text-center col-md-12 mb-2">Fakultas Universitas Negeri Jakarta</h2>
        <div class="row">
            <div class="container my-2">
              <section class="logo-carousel slider" data-arrows="true">
                <div class="slide"><img src="assets/images/logo/Logo-BEM-FT-mini.png"></div>
                <div class="slide"><img src="assets/images/logo/logo-BEM-FBS.png"></div>
                <div class="slide"><img src="assets/images/logo/Logo-BEM-FE.png"></div>
                <div class="slide"><img src="assets/images/logo/Logo-BEM-FIP.png"></div>
                <div class="slide"><img src="assets/images/logo/Logo-BEM-FMIPA.png"></div>
                <div class="slide"><img src="assets/images/logo/Logo-BEM-FPSi.png"></div>
                <div class="slide"><img src="assets/images/logo/logo-BPM-FIS.png"></div>
                <div class="slide"><img src="assets/images/logo/logo-BEM-FIO.png"></div>
              </section>
            </div>
          </div>
    </section>

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