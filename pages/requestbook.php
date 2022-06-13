
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<?php
include 'include/header-member.php';
?>

<div class="container">
<div id="contact" class="contact-area section-padding">
	<div class="container">										
		<div class="section-title text-center">
			<h1>Request Recommendation Book</h1>
			<p>Kamu bisa mengajukan rekomendasi buku.</p>
		</div>					
		<div class="row">
			<div class="col-lg-7">	
				<div class="form">
					<form class="form" name="enq" method="post" action="contact.php" onsubmit="return validation();">
						<div class="row">
							<div class="form-group col-md-6">
								<input type="text" name="id" class="form-control" placeholder="User ID" required="required">
							</div>
							<div class="form-group col-md-6">
								<input type="text" name="name" class="form-control" placeholder="Name" required="required">
							</div>
							<div class="form-group col-md-6">
								<input type="email" name="judul" class="form-control" placeholder="Judul Buku" required="required">
							</div>
							<div class="form-group col-md-6">
								<input type="text" name="genre" class="form-control" placeholder="Genre" required="required">
							</div>
							<div class="form-group col-md-12">
								<input type="text" name="penulis" class="form-control" placeholder="Nama Penulis" required="required">
							</div>
							<div class="form-group col-md-12">
								<input type="text" name="penerbit" class="form-control" placeholder="Nama Penerbit" required="required">
							</div>
							<div class="form-group col-md-12">
								<input type="text" name="hal" class="form-control" placeholder="Jumlah Halaman" required="required">
							</div>
							<div class="form-group col-md-12">
								<input type="text" name="tahun" class="form-control" placeholder="Tahun terbit">
							</div>
							<div class="form-group col-md-12">
								<textarea row="6" name="hal" class="form-control" placeholder="Summary"></textarea>
							</div>
							<div class="col-md-12 text-center">
								<button type="submit" value="Submit" name="submit" id="submitButton" class="btn btn-success rounded-pill" title="Submit Your Message!">Submit</button>
							</div>
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