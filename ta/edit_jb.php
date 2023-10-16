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
<h2>Tambah Data jabatan</h2>
<a href="data_jabatan.php" class="btn btn-primary">Lihat Data</a>
<br><br>
<form method="POST" action="simpan_jb.php">
  <?php 
  include("koneksi.php");
  $id = $_GET['id'];
  $sql = mysqli_query($koneksi,"SELECT * FROM jabatan WHERE id='$id'");
  while($b = mysqli_fetch_array($sql)){
   ?>
  <div class="form-group">
    <input type="text" name="id" value="<?php echo $b['id'] ?>" hidden>
    <label>Nama jabatan</label>
    <input type="text" class="form-control" name="jabatan" value="<?php echo $b['jabatan']; ?>">
  </div>
<?php } ?>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
