<?php
	session_start(); 
	include'config.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$select   = "SELECT * FROM user WHERE username='$username'";
	$query    = $conn->query($select);
	$hasil	  = $query->fetch_assoc();

	if ($query->num_rows == 0) {
		$_SESSION['message'] = "Akun belum terdaftar";
		header('Location:login.php?pesan=gagal');

	}else if ($password != $hasil['password']) {
		$_SESSION['message'] = "password salah";
		header('location:login.php?pesan=gagal');

	}else{
		$_SESSION['username'] = $hasil['username'];
		header('location:index.php');
	}
 ?>