<!doctype html>
<html class="h-100" lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="sweetalert2.min.css">

    <title>Daftarkan Kegiatan</title>
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

    <section class="pt-md-11 px-md-5 mt-md-2 mx-4 mx-md-5">
        <div class="container">

            <h2 class="fw-bolder text-dark text-center col-md-12 mb-3">Daftarkan Kegiatanmu di UNJ Event</h2>    
            <div class="order-md-2 my-4" data-aos="fade-up">
                    <div class="border rounded px-5 py-4">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label"><b>Nama Kegiatan</b><span
                                        style="color:red;">*</span></label>
                                <input type="email" class="form-control" placeholder="Masukkan Kegiatan" id="exampleInputName">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label"><b>Penyelenggara Kegiatan</b><span
                                        style="color:red;">*</span></label>
                                <input type="email" class="form-control" placeholder="Masukkan Penyelenggara" id="exampleInputEmail">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputYourmessage" class="form-label"><b>Tanggal Pelaksanaan Kegiatan</b><span
                                        style="color:red;">*</span></label>
                                <input type="email" class="form-control form-control-flush" placeholder="17 Agustus 2021 - 24 Agustus 2021"
                                    id="exampleInputYourmessage">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputYourmessage" class="form-label"><b>Jenis Kegiatan</b><span
                                    style="color:red;">*</span></label>
                                <select class="form-select" placeholder="Seminar / Kegiatan" id="exampleInputJenisKegiatan">
                                    <option>Seminar/Talkshow</option>
                                    <option>Pelatihan/Workshop</option>
                                    <option>Kompetisi</option>
                                  </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputYourmessage" class="form-label"><b>Tempat Pelaksanaan</b><span
                                        style="color:red;">*</span></label>
                                <input type="email" class="form-control form-control-flush" placeholder="Masukkan Lokasi"
                                    id="exampleInputYourmessage">
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label"><b>Poster Kegiatan</b><span
                                        style="color:red;">*</span></label>
                                <input class="form-control" type="file" placeholder="Upload Poster" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputYourmessage" class="form-label"><b>Website / Link Registrasi</b><span
                                        style="color:red;">*</span></label>
                                <input type="email" class="form-control form-control-flush" placeholder="Masukkan Link Registrasi"
                                    id="exampleInputYourmessage">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputYourmessage" class="form-label"><b>No. WhatsApp Narahubung</b><span
                                        style="color:red;">*</span></label>
                                <input type="email" class="form-control form-control-flush" placeholder="Masukkan Narahubung"
                                    id="exampleInputYourmessage">
                            </div>
                            <div class="text-center text-md-start mt-4 mb-3">
                                <button onclick="sweetalertclick()" type="button" class="btn btn-primary shadow px-3 py-2">
                                    Send <em class="fas fa-paper-plane ms-2"></em>
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <script>
        function sweetalertclick(){
            Swal.fire({
                icon: 'success',
                title: 'Data Berhasil diinput',
                text: 'Kami akan segera memproses acara anda',
            })
        }
    </script>

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
    
    <!-- sweet alert js -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

    <script src="js/app.js"></script>

</body>

</html>