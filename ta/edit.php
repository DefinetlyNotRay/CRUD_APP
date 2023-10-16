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
<a href="data_karyawan.php" class="btn btn-primary">Lihat Data</a>
<br><br>
<form method="POST" action="simpan.php" class="needs-validation" novalidate>
  <?php
  include("koneksi.php"); 
$id = $_GET['id'];
$sql = mysqli_query($koneksi,"SELECT * FROM karyawan WHERE id='$id'");
while($a = mysqli_fetch_array($sql)){
   ?>
  <div class="form-group">
    <input type="text" name="id" value="<?php echo $a['id']; ?>" hidden>
    <label>Nama Karyawan</label>
    <input type="text" class="form-control" name="nama" value="<?php echo $a['nama']; ?>">
  </div>
  <div class="form-group">
    <label >Tanggal Lahir</label>
    <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $a['tgl_lahir']; ?>">
  </div>
   <div class="form-group">
    <label >Jenis kelamin</label>
    <?php $jk = $a['jenis_kelamin']; ?>
    <select class="custom-select" name="jenis_kelamin">
   <option value="laki-laki" <?php echo $jk == 'laki-laki' ? 'selected="selected"' : '' ?>>laki-laki</option>
   <option value="perempuan" <?php echo $jk == 'perempuan' ? 'selected="selected"' : '' ?>>perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label >alamat</label>
    <textarea class="form-control" name="alamat"><?php echo $a['alamat']; ?></textarea>
  </div>
<?php } ?>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-danger">Reset</button>
</form>
</body>
</html>
