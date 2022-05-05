<?php
//connect ke database
$conn = mysqli_connect("localhost", "root", "", "tubirit");

function registrasi($data) {
	global $conn;
	$email = strtolower(stripcslashes($data["email"]));
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
			alert('username atau password salah!');
		</script>";
		return false;
	}

	//username yang sudah tidak dapat digunakan kembali
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('username sudah terdaftar pilih username lain!')
		</script>";
		return false;
	}

	//email yang sudah terdaftar tidak bisa didaftarkan kembali
	$result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('email sudah terdaftar!')
		</script>";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//menambah user ke database
	mysqli_query($conn, " INSERT INTO user VALUES ('', '$username', '$password', '$email')");

	return mysqli_affected_rows($conn);
}
	