<!DOCTYPE html>
<head>
  <title>Explore</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/explore.css">
</head>

<body>
    <?php
    include 'include/header.php';
    ?>
    <h1 class="judul">What book do you want to read today?</h1>
    <div class="container">
    <div class="btn-group m-4">
        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Sort/Group by  </button>
        <ul class="dropdown-menu" role="menu">
            <li><a href="#">A-Z</a></li>
            <li><a href="#">Rating</a></li>
            <li><a href="#">History</a></li>
            <li><a href="#">Adventure</a></li>
            <li><a href="#">Fantasy</a></li>
            <li><a href="#">Sci-Fi</a></li>
            <li><a href="#">Humor</a></li>
            <li><a href="#">Horror</a></li>
            <li><a href="#">Romance</a></li>
            <li><a href="#">Thriller</a></li>
        </ul>
    </div>
    <div class="col">
        <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body row">
                    <div class="col-6">
                        <a href=""><img src="../img/books/b001.jpg" alt="" class="img-fluid rectangle w-40 h-60"></a>
                    </div>
                    <div class="col-6 card-title align-self-center mb-0">
                        <h3>Hujan</h3>
                        <h5 class="m-0">Tere Liye</h5>
                        <div class="mt-4">
                            <p>Science-Fiction</br>Gramedia</br>320 pages</br>2016</p>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><p>Novel ini menceritakan tentang Esok dan Lail sebagai salah satu tokoh utama, keduanya dipertemukan setelah gunung meletus pada tahun 2042. Efek letusan gunung yang dahsyat membuat seisi bumi menyisihkan manusia dan tersisa sekitar 10% manusia.</p></li>
                </ul>
                <div class="card-body">
                    <div class="float-right btn-group btn-group-sm">
                        <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                        <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body row">
                    <div class="col-6">
                        <a href=""><img src="../img/books/b002.jpg" alt="" class="img-fluid rectangle w-40 h-60"></a>
                    </div>
                    <div class="col-6 card-title align-self-center mb-0">
                        <h3>The Magic Library</h3>
                        <h5 class="m-0">Jostein Gaarder</h5>
                        <div class="mt-4">
                            <p>Fantasy</br>Mizan</br>284 pages</br>1993</p>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><p>The Magic Library berkisah tentang dua orang sepupu bernama Nils dan Berit yang memutuskan untuk bertukar surat agar bisa tetap berkomunikasi – mari berasumsi bahwa cerita ini berlatar sebelum maraknya penjualan handphone di kalangan anak-anak.</p></li>
                </ul>
                <div class="card-body">
                    <ul class="social-links list-inline mb-0">
                        <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="fav"><i class="fa fa-star"></i></a>8.5/10</li>
                        <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="fav"><i class="fa fa-heart"></i></a>Add to My Library</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body row">
                    <div class="col-6">
                        <a href=""><img src="../img/books/b003.jpg" alt="" class="img-fluid rectangle w-40 h-60"></a>
                    </div>
                    <div class="col-6 card-title align-self-center mb-0">
                        <h3>Api Tauhid</h3>
                        <h5 class="m-0">Habiburrahman El Shirazy</h5>
                        <div class="mt-4">
                            <p>History</br>Republika</br>574 pages</br>2014</p>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><p>Novel roman yang bercerita seputar perjuangan anak muda asal Lumajang, Jawa Timur, yang bernama Fahmi. Ia dan beberapa rekannya seperti Ali, Hamza, dan Subki, menuntut ilmu di Universitas Islam Madinah. Dalam perjalanannya, Fahmi harus menghadapi situasi yang cukup pelik, dalam urusan rumah tangga.</p></li>
                </ul>
                <div class="card-body">
                    <ul class="social-links list-inline mb-0">
                        <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="fav"><i class="fa fa-star"></i></a>8.5/10</li>
                        <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="fav"><i class="fa fa-heart"></i></a>Add to My Library</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
        <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body row">
                    <div class="col-6">
                        <a href=""><img src="../img/books/b004.jpg" alt="" class="img-fluid rectangle w-40 h-60"></a>
                    </div>
                    <div class="col-6 card-title align-self-center mb-0">
                        <h3>Pulang</h3>
                        <h5 class="m-0">Tere Liye</h5>
                        <div class="mt-4">
                            <p>Fiction</br>Republika</br>400 pages</br>2015</p>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><p>Novel Pulang bercerita tentang shadow economy. Tokoh utamanya adalah Bujang, anak muda yang hidup di pedalaman Sumatra. Ia mewarisi darah ayahnya, Samad, yang merupakan seorang tukang pukul yang paling ditakuti di sebuah kerajaan shadow economy. Samad ingin agar Bujang meneruskan karir bapaknya.</p></li>
                </ul>
                <div class="card-body">
                    <ul class="social-links list-inline mb-0">
                        <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="fav"><i class="fa fa-star"></i></a>8.5/10</li>
                        <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="fav"><i class="fa fa-heart"></i></a>Add to My Library</li>
                    </ul>
                </div>
            </div>
        </div>
</body>
<?php
    include 'include/footer.php';
?>
</html>