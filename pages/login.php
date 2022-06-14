<?php
if (isset($_POST['btnSubmit'])) {
	require_once('../class/class.user.php');
	$email = $_POST['email'];
	$password = $_POST['password'];	

    $objUser = new User();
	$objUser->hasil = true;
	$objUser->ValidateEmail($email);

	if($objUser->hasil){
		
		$ismatch = password_verify($password, $objUser->password);
		
		if($ismatch){
			if (!isset($_SESSION)) {
				session_start();
			}		  			
		
			$_SESSION["userid"]= $objUser->userid;
			$_SESSION["fname"]= $objUser->fname;
			$_SESSION["lname"]= $objUser->lname;
			
			echo "<script>alert('Login sukses');</script>";		
				
			if($objUser->role == 'Admin')
				echo '<script>window.location = "index.php";</script>';
		}
		else{
			echo "<script>alert('Password tidak match');</script>";							
		}
	}
	else{
		echo "<script>alert('Email tidak terdaftar');</script>";							
	}
}
?>
<?php
include 'include/header.php';
?>
<div class="container py-5">
	<div class="col-md-6">
		<h1 class="title pb-5"><strong>LOGIN</strong></h1>
		<form action="" method="post">
			<table class="table" border="0">
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="email" class="form-control" id="email" name="email" maxlength="100" required></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" class="form-control" id="password" maxlength="8" name="password" required></td>
				</tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" class="btn btn-primary rounded-pill" value="Login" name="btnSubmit">
					<a href='../index.php' class="btn btn-danger rounded-pill">cancel</a>
				</td>
				</tr>
			</table>
		</form>
	</div>
</div>
<?php
include 'include/footer.php';
?>