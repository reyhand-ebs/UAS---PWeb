<!DOCTYPE html>

<head>
    <title>Profile Settings</title>
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
    require_once('../class/class.User.php');

    $objUser = new User();
    if (isset($_POST['btnUpdate'])) {
        $objUser->userid = $_POST['userid'];
        $objUser->foto = $_POST['foto'];
        $isSuccessUpload = false;

        if (file_exists($_FILES['foto']['tmp_name']) || is_uploaded_file($_FILES['foto']['tmp_name'])) {
            $lokasifile = $_FILES['foto']['tmp_name'];
            $nama_file =  $_FILES['foto']['name'];
            $extension  = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
            $objUser->foto = $objUser->userid . '.' . $extension;
            $folder = './upload/';
            $isSuccessUpload = move_uploaded_file($lokasifile, $folder . $objUser->foto);
        } else
            $isSuccessUpload = true;


        if ($isSuccessUpload) {
            $objUser->userid = $_SESSION['userid'];
            $objUser->fname = $_POST['fname'];
            $objUser->lname = $_POST['lname'];
            $objUser->email = $_POST['email'];
            $objUser->nohp = $_POST['nohp'];
            $objUser->foto = $_POST['foto'];

            $objUser->UpdateUser();

            echo "<script> alert('$objUser->message'); </script>";
            echo '<script> window.location = "' . $_SERVER['REQUEST_URI'] . '";</script>';
        }
    } else if (isset($_SESSION['userid'])) {
        $objUser->userid = $_SESSION['userid'];
        $objUser->SelectOneUser();
    }
    ?>
    <?php
    include 'include/header-member.php';
    ?>
    <div class="container py-5 pb-5">
        <h2 class="pb-5"><strong>Profile Settings</strong></h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-3">
                    <?php
                    if ($objUser->foto != NULL)
                        echo '<img class="img-rounded img-responsive" src="' . $objUser->foto . '">';
                    else
                        echo '<img class="img-rounded img-responsive" src="../img/default.png">';
                    ?>
                    <input type="hidden" name="foto" value="<?php echo $objUser->foto; ?>">
                    <br>
                    <span>Browse Picture</span>
                    <input type="file" name="foto"></input>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 py-3">
                            <div class="form-group">
                                <label for="account-fn">User Id</label>
                                <input class="form-control" type="text" id="account-fn" readonly value="<?php echo $objUser->userid; ?>" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6 py-3">
                            <div class="form-group">
                                <label for="account-fn">First Name</label>
                                <input class="form-control" type="text" id="account-fn" value="<?php echo $objUser->fname; ?>" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-6 py-3">
                            <div class="form-group">
                                <label for="account-ln">Last Name</label>
                                <input class="form-control" type="text" id="account-ln" value="<?php echo $objUser->lname; ?>" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-md-6 py-3">
                            <div class="form-group">
                                <label for="account-email">Email Address</label>
                                <input class="form-control" type="email" id="account-email" value="<?php echo $objUser->email; ?>" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="col-md-6 py-3">
                            <div class="form-group">
                                <label for="account-phone">Phone Number</label>
                                <input class="form-control" type="text-number" id="account-phone" value="<?php echo $objUser->nohp; ?>" placeholder="Your Phone Number">
                            </div>
                        </div>
                        <div class="col-md-6 py-3">
                            <div class="form-group">
                                <label for="account-pass">New Password</label>
                                <input class="form-control" type="password" id="account-pass" placeholder="*Click to change">
                            </div>
                        </div>
                        <div class="col-md-6 py-3">
                            <div class="form-group">
                                <label for="account-confirm-pass">Confirm Password</label>
                                <input class="form-control" type="password" id="account-confirm-pass" placeholder="*Click to change">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-success" value="Update Profile" name="btnUpdate">
        </form>
    </div>
    <?php
    include 'include/footer.php';
    ?>
</body>

</html>