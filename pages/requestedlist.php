<?php
    include ('../inc.koneksi.php');
  require_once "authorization_admin.php";
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
	<th>Status</th>
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
                            <a class="btn btn-success btn-sm"  href="dashboardadmin.php?p=employee&ssn='.$dataRequest->ssn.'">
                            onclick="return confirm(\'Apakah anda yakin ingin menyetujui permintaan ini?\')"><span class="glyphicon glyphicon-edit"></span></a>
   					        <a class="btn btn-danger btn-sm"  href="dashboardadmin.php?p=deleteemployee&ssn='.$dataRequest->ssn.'"
                            onclick="return confirm(\'Apakah anda yakin ingin menolak permintaan ini?\')"> <span class="glyphicon glyphicon-remove"></span></a>
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

