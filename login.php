<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php 
			session_start();
			include'config.php';
			if (isset($_SESSION['message'])) {
				$msg = $_SESSION['message'];
				echo $msg;
				session_destroy();
			}
		 ?>
		<form action="prosesLogin.php" method="post">
			<table>
				<tr>
					<td>Username :</td>
					<td><input type="text" name="username" required></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="text" name="password" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" > <a href="register.php">Buat akun</a></td>
				</tr>
			</table>
		</form>
	</body>
</html>