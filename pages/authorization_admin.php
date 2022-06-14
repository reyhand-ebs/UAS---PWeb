<?php
if(!isset($_SESSION)){
 session_start();
}

if(!isset($_SESSION["idRole"])){
	echo "<script> alert('Silakan Login untuk mengakses halaman ini'); </script>";
	echo '<script> window.location="index.php"; </script>';
}
else
{
	if($_SESSION["idRole"]!='role1'){
		echo "<script> alert('Hanya admin yang dapat mengakses halaman ini'); </script>";
		echo '<script> window.location="index.php"; </script>';
	}
}
?>