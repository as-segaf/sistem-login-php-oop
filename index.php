<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
			session_start();
			if (!isset($_SESSION['username'])) {
				header('location:login.php');

			}else{
				$username = $_SESSION['username'];
			}
		 ?>

		 <div class="content">
		 	<p>Selamat datang <?= $username; ?>, ini adalah halaman user</p>
		 	<a href="logout.php">Logout</a>
		 </div>

	</body>
</html>