<!DOCTYPE html>
<html>
<head>
    <title>Login | Data karyawan</title>
	<link rel="stylesheet" type="text/css" href="../css/css/bootstrap.min.css">
</head>
i<style type="text/css">
	body{
		background-color: black;
	}
</style>

<body>
    <center>
        <div class="card" style="width: 30rem;">
            <div class="card-body">
                <h2>Loging</h2>
                <?php 
                    if(isset($_GET['pesan'])){
                    echo "login gagal!";
                    } else if($_GET['pesan'] == "logout") {
                        echo "anda telah berhasil logout";
                    } else if($_GET['pesan'] == 'belum_login'){
                        echo "You have to login first";
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
