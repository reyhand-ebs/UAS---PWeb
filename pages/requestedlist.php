

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Requested List</title>

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
<div class="container">  
<div>			
  <h4 class="title"><span class="text"><strong>Requested List</strong></span></h4>
  <br>

  <br>
<table class="table table-bordered">
<thead>
	<tr>
    <th>No</th>
	<th>Requested ID</th>
	<th>User ID</th>
	<th>Date</th>
    <th>Genre</th>
	<th>Judul</th>
	<th>Penulis Buku</th>
	<th>Penerbit Buku</th>
	<th>Halaman</th>
	<th>Tahun</th>
	<th>Summary</th>
	<th>Action</th>
	</tr>	
	</thead>
	<tbody>
	<?php
		require_once('../class/class.request.php'); 		
		$objRequest = new Request(); 
		$arrResult = $objRequest->SelectAllRequest();
		

		if(count($arrResult) == 0){
			echo '<tr><td colspan="5">Tidak ada data!</td></tr>';			
		}else{	
			$no = 1;	
			foreach ($arrResult as $dataRequest) {
				echo '<tr>';
					echo '<td>'.$no.'</td>';
					echo '<td>'.$dataRequest->reqid.'</td>';	
					echo '<td>'.$dataRequest->iduser.'</td>';
					echo '<td>'.$dataRequest->reqdate.'</td>';
                    echo '<td>'.$dataRequest->idgenre.'</td>';
					echo '<td>'.$dataRequest->reqjudul.'</td>';
					echo '<td>'.$dataRequest->reqpenulis.'</td>';
					echo '<td>'.$dataRequest->reqpenerbit.'</td>';
					echo '<td>'.$dataRequest->reqhalaman.'</td>';
					echo '<td>'.$dataRequest->reqtahun.'</td>';
                    echo '<td>'.$dataRequest->reqsummary.'</td>';
					echo '<td width="10%">
                            <a class="btn btn-success btn-sm"  href="dashboardadmin.php?p=employee&ssn='.$dataRequest->ssn.'"
                            onclick="return confirm(\'Apakah anda yakin ingin menyetujui permintaan ini?\')"><span class="glyphicon glyphicon-edit"></span>Setuju</a>
   					        <a class="btn btn-danger btn-sm"  href="dashboardadmin.php?p=deleteemployee&ssn='.$dataRequest->ssn.'"
                            onclick="return confirm(\'Apakah anda yakin ingin menolak permintaan ini?\')"> <span class="glyphicon glyphicon-remove"></span>Tolak</a>
							  </td>';	
				echo '</tr>';				
				$no++;	
			}
		}
		?>
		</tbody>
</table>

</div>
</div>
<?php
    include 'include/footer.php';
    ?>
<body>
