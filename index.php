<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tubirit</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg py-2 sticky-top navbar-dark bg-black shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo w-25 m-2" src="./img/logonavbar.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/explore.php">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/contact.php">Contact</a>
                    </li>
                </ul>
                <a href='./pages/registrasi.php'><button class="btn btn-sm btn-primary ms-md-3 rounded-3">Join Us</button></a>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <div class="container col-xxl-10 px-3 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-md-8 col-lg-6">
                <img src="./img/hero.png" class="d-block mx-lg-auto img-fluid" alt="Website Responsive" width="700" height="500">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Halo, Kita adalah Tubirit</h1>
                <p class="lead">Platform membaca yang paling diminati di Indonesia</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-md px-4 me-md-2 rounded-pill">Mulai Membaca</button>
                </div>
            </div>
        </div>
    </div>
    <!-- //HERO -->

    <!-- FEATURES -->
    <section id="feature">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h1>Membaca Semakin Mudah</h1>
                    <p>Membaca semakin mudah. Baca buku, soft file buku, dan berbagi rekomendasi buku bacaan. Di mana pun, kapan pun dengan nyaman bersama setiap orang.</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect bounceInUp">
                        <div class="iconbox">
                            <i class='bx bx-signal-5'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Berbagi dan Bersosialisasi.</h5>
                        <p>Temukan dan jalin pertemanan. Dapatkan aktifitas kerabatmu.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-file-blank'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Syarat Pendaftaran Mudah.</h5>
                        <p>Cukup beberapa detik untuk bergabung dan merasakan website tubirit.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-bookmarks'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Buat dan Sebarkan Rekomendasimu</h5>
                        <p>Tambah dan bagikan rekomendasi untuk memotivasi yang lain untuk membaca.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURES -->

    <!-- CONTENT -->
    <section id="konten">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h1>Bagaimana cara kerja Tubirit</h1>
                    <p>Temukan rekomendasi anda melalui komunitas dan teknologi di Tubirit</p>
                </div>
            </div>
            <div class="accordion" id="accordionWorks">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <strong>Buat List Rekomendasimu sendiri</strong>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionWorks">
                        <div class="accordion-body">
                            Anda dapat membuat daftar rekomendasi Anda sendiri, dan Anda dapat membagikannya dengan orang lain sehingga mereka dapat melihat daftar Anda.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <strong>Mengajukan Rekomendasi</strong>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionWorks">
                        <div class="accordion-body">
                            Anda dapat mengajukan rekomendasi buku sesuai keinginan Anda agar orang lain dapat membaca rekomendasi yang Anda kirimkan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <strong>Pengurutan berdasarkan Genre</strong>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionWorks">
                        <div class="accordion-body">
                            Anda dapat mengurutkan buku berdasarkan genre atau buku baru yang telah diunggah.
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- CONTENT -->

    <!-- CONTACT -->
    <section id="contact">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">CONTACT</h6>
                    <h1>Get In Touch</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>

            <form action="$_POST" class="row g-3 justify-content-center">
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Full Name">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" placeholder="Enter E-mail">
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="Enter Subject">
                </div>
                <div class="col-md-10">
                    <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Enter Message"></textarea>
                </div>
                <div class="col-md-10 d-grid">
                    <button class="btn btn-primary">Contact</button>
                </div>
            </form>
        </div>
    </section>
    <!-- CONTACT -->
    <div class="container-fluid m-0 p-0">
        <footer class="footer footer-dark bg-black text-light">
            <div class="footer-top mt-20">
                <div class="container">
                    <div class="row gy-4">
                        <div class="col-lg-2">
                            <img class="logo w-75" src="./img/logofooter.png" alt="">
                        </div>
                        <div class="col-lg-3">
                            <h5 class="text-white">Brand</h5>
                            <ul class="list-unstyled">
                                <li><a href="./explore.php">Explore</a></li>
                                <li><a href="./contact.php">Contact</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <h5 class="text-white">More</h5>
                            <ul class="list-unstyled">
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#">Privacy & Policy</a></li>
                                <li><a href="#">Warranty</a></li>
                                <li><a href="#">Shipment</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h5 class="text-white">Contact</h5>
                            <ul class="list-unstyled">
                                <li>Address: Jl. TB Simatupang</li>
                                <li>Email: chiekal.mulia@students.esqbs.ac.id</li>
                                <li>Email: khaira.isyara@students.esqbs.ac.id</li>
                                <li>Email: mohamad.reyhand.f@students.esqbs.ac.id</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom py-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="mb-0">© 2022 copyright all right reserved | Designed with by TUBIRIT</p>
                        </div>
                        <div class="col-md-6">
                            <div class="social-icons">
                                <a href="#"><i class='bx bxl-facebook'></i></a>
                                <a href="#"><i class='bx bxl-twitter'></i></a>
                                <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>