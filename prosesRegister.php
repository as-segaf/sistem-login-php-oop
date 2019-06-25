<?php 
	include'config.php';

	$username = $_POST['username'];
	$password = $_POST['password'];
	$role	  = $_POST['role'];
	$select   = "SELECT * FROM user WHERE username='$username'";
	$insert	  = "INSERT INTO user (username, password, role) VALUES ('$username', '$password', '$role')";
	$query    = $conn->query($select);

	if ($query->num_rows > 0) {
		echo "Username sudah terdaftar! <a href='register.php'>Kembali</a>";

	}else if ($conn->query($insert)) {
		echo "Register berhasil, silahkan <a href='login.php'>Login</a>";

	}else{
		echo "Terjadi kesalahan, silahkan coba lagi <a href='Registesr.php'>Daftar</a>";
	}
 ?>