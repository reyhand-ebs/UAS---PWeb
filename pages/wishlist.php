<!DOCTYPE html>
<head>
  <title>Your Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/wishlist.css">
</head>

<body>
    <?php
    include 'include/header.php';
    ?>
<div class="container mb-4">
    <div class="row">
        <div class="col-lg-4 pb-5">
            <!-- Account Sidebar-->
            <div class="author-card pb-3">
                <div class="author-card-cover" style="background-image: url()"></div>
                <div class="author-card-profile">
                    <div class="author-card-avatar"><img src="../img/profileimage.png" alt="profile">
                    </div>
                    <div class="author-card-details">
                        <h5 class="author-card-name text-lg">Full Name</h5><span class="author-card-position">email@gmail.com</span>
                    </div>
                </div>
            </div>
            <div class="wizard">
                <nav class="list-group list-group-flush">
                    <a class="list-group-item" href="profilesettings.php" target="__blank"><i class="fa fa-user text-muted"></i>Profile Settings</a>
                    <a class="list-group-item" href="wishlist.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fa fa-th mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">My Library</div>
                            </div><span class="badge badge-secondary">3</span>
                        </div>
                    </a>
                    <a class="list-group-item" href="history.php" target="__blank">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fa fa-clock-o mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">History</div>
                            </div><span class="badge badge-secondary">4</span>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <!-- Wishlist-->
        <div class="col-lg-8 pb-5">
            <!-- Item-->
            <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i class="fa fa-times"></i></span>
                <div class="px-3 my-3">
                    <a class="cart-item-product" href="#">
                        <div class="cart-item-product-thumb"><img src="" alt="Product"></div>
                        <div class="cart-item-product-info">
                            <h4 class="cart-item-product-title">Buku Cerita</h4>
                            <div class="text-lg text-body font-weight-medium pb-1">Nama Pengarang</div>
                            <div class="text-lg text-body font-weight-medium pb-1">Nama Penerbit</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Item-->
            <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i class="fa fa-times"></i></span>
                <div class="px-3 my-3">
                    <a class="cart-item-product" href="#">
                        <div class="cart-item-product-thumb"><img src="" alt="Product"></div>
                        <div class="cart-item-product-info">
                            <h4 class="cart-item-product-title">Buku Novel</h4>
                            <div class="text-lg text-body font-weight-medium pb-1">Nama Pengarang</div>
                            <div class="text-lg text-body font-weight-medium pb-1">Nama Penerbit</div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Item-->
            <div class="cart-item d-md-flex justify-content-between"><span class="remove-item"><i class="fa fa-times"></i></span>
                <div class="px-3 my-3">
                    <a class="cart-item-product" href="#">
                        <div class="cart-item-product-thumb"><img src="" alt="Product"></div>
                        <div class="cart-item-product-info">
                            <h4 class="cart-item-product-title">Buku Basis Data</h4>
                            <div class="text-lg text-body font-weight-medium pb-1">Nama Pengarang</div>
                            <div class="text-lg text-body font-weight-medium pb-1">Nama Penerbit</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include 'include/footer.php';
?>
</body>
</html>