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
    include 'include/header.php';
    ?>
    <div class="container-fluid pb-5">
        <div class="row">
            <!-- Profile Settings-->
            <div class="section-title text-center py-5">
			    <h1>Profile Settings</h1>
		    </div>
            <div class="col-lg-4 pb-5">
                <img src="../img/profileimage.png" class="img-rounded rounded-circle float-start w-75 pb-3">
                <div class="mb-3 me-4 py-4">
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
            <div class="col-lg-8 pb-5">
                <form class="row" method="POST" action="profile.php">
                    <div class="col-md-6 py-3">
                        <div class="form-group">
                            <label for="account-fn">First Name</label>
                            <input class="form-control" type="text" id="account-fn" value="" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="form-group">
                            <label for="account-ln">Last Name</label>
                            <input class="form-control" type="text" id="account-ln" value="" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="form-group">
                            <label for="account-email">Email Address</label>
                            <input class="form-control" type="email" id="account-email" value="" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="form-group">
                            <label for="account-phone">Phone Number</label>
                            <input class="form-control" type="text-number" id="account-phone" value="" placeholder="Your Phone Number">
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
                    <div class="py-4">
                        <button class="btn btn-style-1 btn-primary" type="button" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>  
    <?php
    include 'include/footer.php';
    ?>
</body>

</html>