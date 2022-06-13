<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tubirit</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include './pages/include/header.php';
    ?>
    <!-- SLIDER -->
    <div class="showcase">
        <div class="container-fluid" style="margin: 0px; padding: 0px;">
            <div class="img-area">
                <div class="img-slide">
                    <div class="single-img">
                        <img src="img/slider/1.png" alt="Dunia Maya">
                    </div>
                    <div class="single-img">
                        <img src="img/slider/2.png" alt="Laskar Pelangi">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER -->

    <!-- NAME -->
    <section id="name">
        <div class="container">
            <h1>Welcome home, Name</h1>
            <hr class="divider">
        </div>
    </section>
    <!-- NAME -->

    <!-- CONTENT -->
    <section id="konten-1">
        <div class="container">
            <h3>Editor Picks</h3>
            <hr class="divider">
        </div>
    </section>
    <section id="konten-2">
        <div class="container">
            <h3>Action</h3>
            <hr class="divider">
        </div>
    </section>
    <section id="konten-3">
        <div class="container">
            <h3>Adventure</h3>
            <hr class="divider">
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
                    <textarea name="" id="" cols="30" rows="5" class="form-control" placeholder="Enter Message"></textarea>
                </div>
                <div class="col-md-10 d-grid">
                    <button class="btn btn-primary">Contact</button>
                </div>
            </form>
        </div>
    </section>
    <!-- CONTACT -->
    <?php
    include './pages/include/footer.php';
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/showcase.js"></script>
</body>

</html>