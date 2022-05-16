<?php
require 'functions.php';

	if (isset($_POST['login'])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'" );

		//cek username
		if (mysqli_num_rows($result) === 1) {
			//cek password
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"])) {
				header("location: indexafter.php ");
				exit;
			}
		}
		$error = true;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login page</title>
</head>
<style >
	label {
		display: block;
	}
</style>
<body>
	<?php
    include './pages/include/header.php';
    ?>
	<h1>LOGIN</h1>

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
	<tr>
	<td><?php if (isset($error)) : 
        ?>
	<td><p style="color: red; font-style: italic;">username atau password salah</p></td>
		<?php endif; ?></td>
	</tr>
	</tr>
	<tr>
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