<!DOCTYPE html>
<html>
<head>
    <title>Login | Data karyawan</title>
	<link rel="stylesheet" type="text/css" href="../css/css/bootstrap.min.css">
	<script src="https://cdn.tailwindcss.com"></script>
</head>
i<style type="text/css">
	body{
		background-color: black;
	}
	.border-1{
		border-width: 2px;
		padding: 4px;
	}
</style>

<body class="min-h-screen grid place-items-stretch">
    <center class="">
        <div class="card h-96" style="width: 30rem;">
            <div class="card-body">
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
            <form class="h-full flex justify-center flex-col items-center" method="post" action="cek_login.php">
			<h2 class="absolute top-10 text-xl font-bold">Login</h2>
            	<table class="relative w-fit">
				
					<tbody class="flex gap-4 flex-col justify-center ">
					
						<tr class="flex gap-4 items-center">
							<td>Username</td>
							<td>:</td>
							<td><input class="border-1" type="text" name="username" placeholder="Masukkan username"></td>
						</tr>
						<tr class="flex gap-4 items-center">
							<td>Password</td>
							<td class="mr-1">:</td>
							<td><input  class="border-1" type="password" name="password" placeholder="Masukkan password"></td>
						</tr>
						<tr class="w-fit mx-auto">
							<td><button class="btn bg-blue-600 hover:bg-blue-700 text-white " type="submit">Login</button></td>
						</tr>
					</tbody>
				</table>			

            </form>
            </div>
        </div>
    </center>
</body>
</html>
