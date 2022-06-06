<?php 
	if(isset($_POST['btnLogin'])){
	require_once('./class/user.php'); 		
	$objUser = new User(); 
	
    $objUser->email = $_POST['email'];
	$objUser->password = $_POST['password'];

	$cekEmail = $objUser->ValidateEmail($_POST['email']);
    if($cekEmail){
		if($objUser->email == $_POST['email'] && $objUser->password == $_POST['password']){
			if (!isset($_SESSION)) {
				session_start();
			}		  
		
			$_SESSION["idUser"]= $objUser->idUser;
			$_SESSION["role"]= $objAccount->role;
			$_SESSION["nama"]= $objAccount->nama;
			
			echo "<script> alert('Login sukses'); </script>";		
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php">';
		}
		else{
			echo "<script> alert('Email dan password tidak match'); </script>";		
		}		
	}
	else{
		echo "<script> alert('Email tidak terdaftar'); </script>";		  
	}
	
  }
?>
<?php
    include 'include/header.php';
    ?>
<div class="container">
<div class="col-md-6">
	<h1 class="title"><span class="text"><strong>LOGIN</strong></span></h1>
	<form action="login2.php" method="post">
	<table class="table" border="0">
	<tr>
	<td>Email</td>
	<td>:</td>
	<td><input type="text" class="form-control" id="email" name="email" maxlength="30" required></td>
	</tr>
	<tr>
	<td>Password</td>
	<td>:</td>
	<td><input type="password" class="form-control" id="password" maxlength="30" name="passwordl" required></td>
	</tr>
	<td></td>
	<td></td>
	<td><input type="submit" class="btn btn-primary" value="Register" name="btnSubmit">
	    <a href='index.php' class="btn btn-danger">cancel</a></td>
	</tr>	
	</table>    
</form>
</div>
</div>
<?php
    include 'include/footer.php';
    ?>