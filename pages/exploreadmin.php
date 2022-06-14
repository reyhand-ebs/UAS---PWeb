<!DOCTYPE html>

<head>
    <title>Explore</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <?php
    include 'include/header-admin.php';
    ?>
    <div class="container-fluid py-5">
        <div class="container text-start">
            <h1>What book do you want to read today?</h1>
            <div class="btn-group p-4">
                <button id="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
                    Sort/ Group by
                </button>
                <ul class="dropdown-menu" role="menu">
                    <li><a class="dropdown-item" href="#">A-Z</a></li>
                    <li><a class="dropdown-item" href="#">Rating</a></li>
                    <li><a class="dropdown-item" href="#">History</a></li>
                    <li><a class="dropdown-item" href="#">Adventure</a></li>
                    <li><a class="dropdown-item" href="#">Fantasy</a></li>
                    <li><a class="dropdown-item" href="#">Sci-Fi</a></li>
                    <li><a class="dropdown-item" href="#">Humor</a></li>
                    <li><a class="dropdown-item" href="#">Horror</a></li>
                    <li><a class="dropdown-item" href="#">Romance</a></li>
                    <li><a class="dropdown-item" href="#">Thriller</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col card mb-3 mx-2">
                    <div class="row g-0">
                        <div class="col-md-6 py-2">
                            <img src="../img/books/b001.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Hujan</h5>
                                <h6 class="card-title">Tere Liye</h6>
                                <br>
                                <p>Science-Fiction</br>Gramedia</br>320 pages</br>2016</p>
                            </div>
                        </div>
                        <p class="card-text">Novel ini menceritakan tentang Esok dan Lail sebagai salah satu tokoh utama, keduanya dipertemukan setelah gunung meletus pada tahun 2042. Efek letusan gunung yang dahsyat membuat seisi bumi menyisihkan manusia dan tersisa sekitar 10% manusia.</p>
                        <div class="card-body">
                            <div class="float-right btn-group btn-group-sm">
                                <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class='bx bx-pencil'></i></a>
                                <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class='bx bx-trash' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col card mb-3 mx-2">
                    <div class="row g-0">
                        <div class="col-md-6 py-2">
                            <img src="../img/books/b002.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">The Magic Library</h5>
                                <h6 class="card-title">Jostein Gaarder</h6>
                                </br>
                                <p>Fantasy</br>Mizan</br>284 pages</br>1993</p>
                            </div>
                        </div>
                        <p class="card-text">Novel ini menceritakan tentang Esok dan Lail sebagai salah satu tokoh utama, keduanya dipertemukan setelah gunung meletus pada tahun 2042. Efek letusan gunung yang dahsyat membuat seisi bumi menyisihkan manusia dan tersisa sekitar 10% manusia.</p>
                        <div class="card-body">
                            <div class="float-right btn-group btn-group-sm">
                                <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class='bx bx-pencil'></i></a>
                                <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class='bx bx-trash' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col card mb-3 mx-2">
                    <div class="row g-0">
                        <div class="col-md-6 py-2">
                            <img src="../img/books/b003.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Hujan</h5>
                                <h6 class="card-title">Tere Liye</h6>
                                <br>
                                <p>Science-Fiction</br>Gramedia</br>320 pages</br>2016</p>
                            </div>
                        </div>
                        <p class="card-text">Novel ini menceritakan tentang Esok dan Lail sebagai salah satu tokoh utama, keduanya dipertemukan setelah gunung meletus pada tahun 2042. Efek letusan gunung yang dahsyat membuat seisi bumi menyisihkan manusia dan tersisa sekitar 10% manusia.</p>
                        <div class="card-body">
                            <div class="float-right btn-group btn-group-sm">
                                <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class='bx bx-pencil'></i></a>
                                <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class='bx bx-trash' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col card mb-3 mx-2">
                    <div class="row g-0">
                        <div class="col-md-6 py-2">
                            <img src="../img/books/b004.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">Hujan</h5>
                                <h6 class="card-title">Tere Liye</h6>
                                <br>
                                <p>Science-Fiction</br>Gramedia</br>320 pages</br>2016</p>
                            </div>
                        </div>
                        <p class="card-text">Novel ini menceritakan tentang Esok dan Lail sebagai salah satu tokoh utama, keduanya dipertemukan setelah gunung meletus pada tahun 2042. Efek letusan gunung yang dahsyat membuat seisi bumi menyisihkan manusia dan tersisa sekitar 10% manusia.</p>
                        <div class="card-body">
                            <div class="float-right btn-group btn-group-sm">
                                <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class='bx bx-pencil'></i></a>
                                <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class='bx bx-trash' ></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include 'include/footer.php';
?>

</html>