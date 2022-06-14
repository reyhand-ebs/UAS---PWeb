<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User List</title>

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
    <div class="container py-5 pb-5">
        <h2 class="pb-5"><strong>User List</strong></h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>User ID</th>
                <th>Email</th>
                <th>Name</th>
                <th>No Handphone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once('../class/class.user.php');
            $objUser = new User();
            $arrayResult = $objUser->SelectAllUser();

            if (count($arrayResult) == 0) {
                echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
            } else {
                $no = 1;
                foreach ($arrayResult as $dataUser) {
                    echo '<tr>';
                    echo '<td>' . $no . '</td>';
                    echo '<td>' . $dataUser->userid . '</td>';
                    echo '<td>' . $dataUser->fname . ' ' . $dataUser->lname . '</td>';
                    echo '<td>' . $dataUser->email . '</td>';
                    echo '<td>' . $dataUser->nohp . '</td>';
                    echo '<td>' . $dataUser->idrole . '</td>';
                    echo '<td><a class="btn btn-warning btn-sm"  href="userlist.php?p=user&userid=' . $dataUser->userid . '">Edit</a> |
   					          <a class="btn btn-danger btn-sm"  href="userlist.php?p=deleteuser&userid=' . $dataUser->userid . '" 
							  onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">Delete</a>							  
							  </td>';
                    echo '</tr>';
                    $no++;
                }
            }
            ?>
        </tbody>
</table>
    </div>
    <?php
    include 'include/footer.php';
    ?>
</body>

</html>