<?php
require 'functions.php';

	if (isset($_POST['register'])) {
		if (registrasi($_POST)> 0) {
			echo "<script>
				alert('user baru berhasil ditambahkan!');
			</script>";
		} else {
			echo mysqli_error($conn);
		} 
	}

	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<title>REGISTRASI PAGE</title>
</head>
<style>
	label {
		display: block;
	}
</style>
<body>
	<?php
    include './pages/include/header.php';
    ?>
	<h1>REGISTRASI</h1>

	<form action="" method="post">
	<table class="table" border="0">
	<tr>
	<td>username</td>
	<td>:</td>
	<td><input type="text" class="form-control" id="nama" name="nama"></td>
	</tr>
	<tr>
	<td>Password</td>
	<td>:</td>
	<td><input type="text" class="form-control" id="email" maxlength="50" name="email"></td>
	</tr>
	<tr>
	<td>konfirmasi Password</td>
	<td>:</td>
	<td><input type="password" class="form-control" id="password" name="password"></td>
	</tr>	
	<tr>
	<td>Email</td>
	<td>:</td>
	<td><input type="password" class="form-control" id="password" name="password"></td>
	</tr>
	<tr>
	<tr>
	<td>sudah punya account?	<a href="login.php" style="color: #4285F4">login</a></td>
	</tr>
	<td></td>
	<td></td>
	<td><input type="submit" class="btn btn-primary" value="Save" name="btnSubmit">
	    <input type="button" value="Cancel" class="btn btn-primary" name="btnReset"></td>
	</tr>	
	</table>    
</form>
	<?php
    include './pages/include/footer.php';
    ?>
</body>
</html>