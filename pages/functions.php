<?php
	function registrasi($data){
	global $conn;

	$nama = stripcslashes($data["nama"]);
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	//konfirmasi password
	if ($password != $password2){
		echo "<script>
				alert('konfirmasi password tidak sesuai!'')
				</script>";
	}
}
?>