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
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PT.Moquet</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="data_karyawan.php">Data Karyawan</a>
      </li>
 	  <li class="nav-item">
        <a class="nav-link" href="data_jabatan.php">Data Jabatan</a>
      </li>
    </ul>
        <a class="nav-link" href="login/logout.php" class="form-inline my-2 my-lg-0">Logout</a>
  </div>
</nav>
<br>
<h2>Tambah Data Karyawan</h2>
<a href="tambah.php" class="btn btn-primary">+Tambah Data</a>
<br><br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">tanggal lahir</th>
      <th scope="col">jenis kelamin</th>
      <th scope="col">jabatan</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
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
      <td>
        <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-primary">Edit</a> | <a href="delete.php?id=<?php echo $d['id']; ?>" class="btn btn-danger">delete</a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<br><br>
<a href="cetak.php" target="_blank" class="btn btn-info">CETAK</a>
</body>
</html>
