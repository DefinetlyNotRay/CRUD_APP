<!DOCTYPE html>
<html>
<head>
	<title>Login | Data karyawan</title>
	<link rel="stylesheet" type="text/css" href="../css/css/bootstrap.min.css">
</head>
<style type="text/css">
	body{
		background-color: black;
	}
</style>
<body>
	<center>
	<div class="card " style="width: 30rem;">
  <div class="card-body">
    <h2>Login</h2>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><button class="btn btn-primary" type="submit">Login</button></td>
			</tr>
		</table>			
	</form>
  </div>
</div>
</center>
</body>
</html>