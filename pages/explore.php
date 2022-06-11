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
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body row">
                    <div class="col-6">
                        <a href=""><img src="" alt="" class="img-fluid rectangle w-40 h-60"></a>
                    </div>
                    <div class="col-6 card-title align-self-center mb-0">
                        <h3>Judul Buku</h3>
                        <h5 class="m-1">Kategori</h5>
                        <h5 class="m-1">Penulis</h5>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><p>ceritanya ini summary buku yaaaaw</p></li>
                </ul>
                <div class="card-body">
                    <div class="float-right btn-group btn-group-sm">
                        <a href="#" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa fa-pencil"></i> </a>
                        <a href="#" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                    </div>
                    <ul class="social-links list-inline mb-0">
                        <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
</body>
<?php
    include 'include/footer.php';
?>
</html>