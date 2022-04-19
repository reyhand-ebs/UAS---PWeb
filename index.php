<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70">
    <?php
        include './pages/header.php';
    ?>
    <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <h1 class="display-4 text-white">Halo, kita adalah Tubirit</h1>
                    <p class="text-white my-3">Memberikan kalian sensasi membaca buku lebih mudah dan rekomendasi yang diberikan</p>
                    <a href="#" class="btn me-2 btn-primary">Mulai membaca</a>
                </div>
            </div>
        </div>
    </div>
    <!-- //HERO -->

    <!-- SERVICES -->
    <section id="services">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">SERIVCES</h6>
                    <h1>Our Services</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect bounceInUp">
                        <div class="iconbox">
                            <i class='bx bxs-check-shield'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Service</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores
                            perferendis </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-comment-detail'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Service</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores
                            perferendis </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-cog'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Service</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores
                            perferendis </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-heart'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Service</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores
                            perferendis </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-rocket'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Service</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores
                            perferendis </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service card-effect">
                        <div class="iconbox">
                            <i class='bx bxs-doughnut-chart'></i>
                        </div>
                        <h5 class="mt-4 mb-2">Service</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo asperiores
                            perferendis </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SERVICES -->

    <!-- FEATURES -->
    <section class="row w-100 py-0 bg-light" id="features">
        <div class="col-lg-6 col-img"></div>
        <div class="col-lg-6 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h6 class="text-primary">WHY TO CHOOES US</h6>
                        <h1>Best solution for your business</h1>
                        <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque
                            fuga
                            in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>

                        <div class="feature d-flex mt-5">
                            <div class="iconbox me-3">
                                <i class='bx bxs-comment-edit'></i>
                            </div>
                            <div>
                                <h5>Feature</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo </p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i class='bx bxs-user-circle'></i>
                            </div>
                            <div>
                                <h5>Feature</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo </p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i class='bx bxs-download'></i>
                            </div>
                            <div>
                                <h5>Feature</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FEATURES -->

    <!-- PROJECTS -->
    <section id="portfolio">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">PROJECTS</h6>
                    <h1>Our Recent Work</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="img/pro1.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Project Title</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="img/pro2.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Project Title</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="img/pro3.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Project Title</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="img/pro4.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Project Title</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="img/pro5.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Project Title</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="project">
                        <img src="img/pro6.jpg" alt="">
                        <div class="overlay">
                            <div>
                                <h4 class="text-white">Project Title</h4>
                                <h6 class="text-white">Website Design</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PROJECTS -->

    <!-- PRICING -->
    <section id="pricing" class="bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">PRICING</h6>
                    <h1>Our Fair & Simple Pricing</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>STARTER</h6>
                        <h1>$99</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Premium support</li>
                            <li><i class='bx bxs-check-circle'></i>
                                30+ Webmaster Tools</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Drag & Drop Builder</li>
                            <li><i class='bx bxs-check-circle'></i>
                                eCommerce Store</li>
                            <li><i class='bx bxs-check-circle'></i>Wordpress plugins</li>
                        </ul>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>STARTER</h6>
                        <h1>$199</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Premium support</li>
                            <li><i class='bx bxs-check-circle'></i>
                                30+ Webmaster Tools</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Drag & Drop Builder</li>
                            <li><i class='bx bxs-check-circle'></i>
                                eCommerce Store</li>
                            <li><i class='bx bxs-check-circle'></i>Wordpress plugins</li>
                        </ul>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>STARTER</h6>
                        <h1>$299</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Premium support</li>
                            <li><i class='bx bxs-check-circle'></i>
                                30+ Webmaster Tools</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Drag & Drop Builder</li>
                            <li><i class='bx bxs-check-circle'></i>
                                eCommerce Store</li>
                            <li><i class='bx bxs-check-circle'></i>Wordpress plugins</li>
                        </ul>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="pricing card-effect text-center">
                        <h6>STARTER</h6>
                        <h1>$399</h1>
                        <hr>
                        <ul class="list-unstyled mb-4">
                            <li><i class='bx bxs-check-circle'></i>
                                Premium support</li>
                            <li><i class='bx bxs-check-circle'></i>
                                30+ Webmaster Tools</li>
                            <li><i class='bx bxs-check-circle'></i>
                                Drag & Drop Builder</li>
                            <li><i class='bx bxs-check-circle'></i>
                                eCommerce Store</li>
                            <li><i class='bx bxs-check-circle'></i>Wordpress plugins</li>
                        </ul>
                        <button class="btn btn-primary">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PRICING -->

    <!-- TEAM -->
    <section id="team">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">TEAM</h6>
                    <h1>Meet Our Crew Members</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row text-center g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/team1.jpg" alt="">
                        <h5 class="mb-0 mt-4">Sharbat Khan</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/team2.jpg" alt="">
                        <h5 class="mb-0 mt-4">Sharbat Khan</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/team3.jpg" alt="">
                        <h5 class="mb-0 mt-4">Sharbat Khan</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-member card-effect">
                        <img src="img/team4.jpg" alt="">
                        <h5 class="mb-0 mt-4">Sharbat Khan</h5>
                        <p>Web Developer</p>
                        <div class="social-icons">
                            <a href="#"><i class='bx bxl-facebook'></i></a>
                            <a href="#"><i class='bx bxl-twitter'></i></a>
                            <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TEAM -->

    <!-- BLOG -->
    <section id="blog" class="bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-primary">BLOG</h6>
                    <h1>Latest News From The Blog</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="blog-post card-effect">
                        <img src="img/blog1.jpg" alt="">
                        <h5 class="mt-4"><a href="#">harum vitae debitis sapiente praesentium aperiam au</a></h5>
                        <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post card-effect">
                        <img src="img/blog2.jpg" alt="">
                        <h5 class="mt-4"><a href="#">harum vitae debitis sapiente praesentium aperiam au</a></h5>
                        <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-post card-effect">
                        <img src="img/blog3.jpg" alt="">
                        <h5 class="mt-4"><a href="#">harum vitae debitis sapiente praesentium aperiam au</a></h5>
                        <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- BLOG -->

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

            <form action="" class="row g-3 justify-content-center">
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
                    <textarea name="" id="" cols="30" rows="5" class="form-control"
                        placeholder="Enter Message"></textarea>
                </div>
                <div class="col-md-10 d-grid">
                    <button class="btn btn-primary">Contact</button>
                </div>
            </form>
        </div>
    </section>
    <!-- CONTACT -->
    <?php
        include './pages/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>