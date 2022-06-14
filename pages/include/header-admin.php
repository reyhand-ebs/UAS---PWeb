<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Header</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg py-2 sticky-top navbar-dark bg-black">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img class="logo" src="img/logoheader.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./dashboardadmin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/exploreadmin.php">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/requestedlist.php">Requested List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pages/userlist.php">User List</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Profile</a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="./profilesettings.php">Profile Settings</a>
                        </div>
                    </li>
                </ul>
                <a href='./Login-registration/index.php'><button class="btn btn-sm btn-danger ms-md-3 rounded-3">Logout</button></a>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>