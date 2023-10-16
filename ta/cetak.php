<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login/index.php?pesan=belum_login");
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Data karyawan</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
</head>
<style type="text/css">
  body{
    background-image: url(gambar/1.png);
    border-radius: 25px;
    background-position: left top;
    background-repeat: repeat;
  }
  .center{
    float: right;
    margin-right: 20px;
  }
</style>
<body>
	<center>
		<h2><b>DATA KARYAWAN</b></h2>
    <br>  
		<h3>PT. Moquet</h3>
	</center>
	<br><br>
  <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">tanggal Lahir</th>
      <th scope="col">jenis kelamin</th>
      <th scope="col">jabatan</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  include("koneksi.php");
  $no = 1;
  $sql = mysqli_query($koneksi,"SELECT * FROM karyawan");
  while($d = mysqli_fetch_array($sql)){
   ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $d['nama']; ?></td>
      <td><?php echo $d['tgl_lahir']; ?></td>
      <td><?php echo $d['jenis_kelamin']; ?></td>
      <td><?php echo $d['jabatan']; ?></td>
      <td><?php echo $d['alamat']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<br><br><br><br><br><br><br><br>
<hr>
  <center><p>&copy; Hikam aramdan</p></center>
</body>

</html>
