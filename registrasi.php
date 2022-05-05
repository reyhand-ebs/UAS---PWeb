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
	<title>REGISTRASI PAGE</title>
</head>
<style>
	label {
		display: block;
	}
</style>
<body>
	<h1>REGISTRASI</h1>

	<form action="" method="post"> //action diisi dengan kirim.php
		<p>
			<label for="username">username :</label>
			<input type="text" name="username" id="username">
		</p>
		<p>
			<label for="password">password :</label>
			<input type="password" name="password" id="password">
		</p>
		<p>
			<label for="password2">konfirmasi password :</label>
			<input type="password" name="password2" id="password2">
		</p>
		<p>
			<label for="email">email :</label>
			<input type="text" name="email" id="email">
		</p>
		<button type="submit" name="register">Register</button>
	</form>
</body>
</html>