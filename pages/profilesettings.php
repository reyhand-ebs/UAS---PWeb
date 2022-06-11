<!DOCTYPE html>
<head>
  <title>Your Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/profilesettings.css">
</head>

<body>
    <?php
    include 'include/header.php';
    ?>
    <div class="container mb-4">
    <div class="row">
        <!-- Profile Settings-->
        <div class="form-group avatar">
            <figure class="figure col-md-2 col-sm-3 col-xs-12">
                <img class="img-rounded img-responsive" src="../img/profileimage.png" alt="">
            </figure>
            <div class="form-inline col-md-10 col-sm-9 col-xs-12">
                <input type="file" class="file-uploader pull-left">
            </div>
        </div>
        <div class="col-lg-8 pb-5">
            <form class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fn">First Name</label>
                        <input class="form-control" type="text" id="account-fn" value="" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-ln">Last Name</label>
                        <input class="form-control" type="text" id="account-ln" value="" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">Email Address</label>
                        <input class="form-control" type="email" id="account-email" value="" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Phone Number</label>
                        <input class="form-control" type="text-number" id="account-phone" value="" required="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-pass">New Password</label>
                        <input class="form-control" type="password" id="account-pass">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-confirm-pass">Confirm Password</label>
                        <input class="form-control" type="password" id="account-confirm-pass">
                    </div>
                </div>
                <div>
                    <button class="btn btn-style-1 btn-primary" type="button" data-toast="" data-toast-position="topRight" data-toast-type="success" data-toast-icon="fe-icon-check-circle" data-toast-title="Success!" data-toast-message="Your profile updated successfuly.">Update Profile</button>
                </div>
    <body>
    <?php
        include 'include/footer.php';
    ?>
</html>