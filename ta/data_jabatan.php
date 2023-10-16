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
      <li class="nav-item">
        <a class="nav-link" href="data_karyawan.php">Data Karyawan</a>
      </li>
    <li class="nav-item active">
        <a class="nav-link" href="data_jabatan.php">Data Jabatan</a>
      </li>
    </ul>
        <a class="nav-link" href="login/logout.php" class="form-inline my-2 my-lg-0">Logout</a>
  </div>
</nav>
<br>
<h2>Data Jabatan</h2>
<a href="tambah_jb.php" class="btn btn-primary">+Tambah Data</a>
<br><br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Jabatan</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  include("koneksi.php");
  $no = 1;
  $sql = mysqli_query($koneksi,"SELECT * FROM jabatan");
  while($j = mysqli_fetch_array($sql)){
   ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $j['jabatan']; ?></td>
      <td>
        <a href="edit_jb.php?id=<?php echo $j['id']; ?>" class="btn btn-primary">Edit</a> | <a href="delete_jb.php?id=<?php echo $j['id']; ?>" class="btn btn-danger">delete</a>
      </td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</body>
</html>
