<!DOCTYPE html>
<head>
  <title>Your Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/history.css">
</head>

<body>
    <?php
    include 'include/header-member.php';
    ?>
    <div class="container mb-4">
        <!-- History Table-->
        <div class="col-lg-8 pb-5">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date Requested</th>
                            <th>Genre</th>
                            <th>Title Book</th>
                            <th>Writer</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a class="navi-link" data-toggle="modal">16101201</a></td>
                            <td>June 11, 2022</td>
                            <td>Kuliah</td>
                            <td>Database</td>
                            <td>Reyhand</td>
                            <td><span class="badge badge-danger m-0">Ditolak</span></td>
                        </tr>
                        <tr>
                            <td><a class="navi-link" data-toggle="modal">16101202</a></td>
                            <td>June 12, 2022</td>
                            <td>Kuliah</td>
                            <td>Database</td>
                            <td>Reyhand</td>
                            <td><span class="badge badge-warning m-0">Menunggu</span></td>
                        </tr>
                        <tr>
                            <td><a class="navi-link" data-toggle="modal">16101203</a></td>
                            <td>July 28, 2022</td>
                            <td>Kuliah</td>
                            <td>Database</td>
                            <td>Reyhand</td>
                            <td><span class="badge badge-warning m-0">Menunggu</span></td>
                        </tr>
                        <tr>
                            <td><a class="navi-link" data-toggle="modal">16101204</a></td>
                            <td>August 1, 2022</td>
                            <td>Kuliah</td>
                            <td>Database</td>
                            <td>Reyhand</td>
                            <td><span class="badge badge-success m-0">Disetujui</span></td>
                        </tr>
                        <tr>
                            <td><a class="navi-link" data-toggle="modal">16101205</a></td>
                            <td>August 2,2022</td>
                            <td>Kuliah</td>
                            <td>Database</td>
                            <td>Reyhand</td>
                            <td><span class="badge badge-success m-0">Disetujui</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
    include 'include/footer.php';
?>
</body>
</html>