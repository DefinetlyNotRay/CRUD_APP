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
<form method="POST" action="proseskaryawan.php" class="needs-validation" novalidate>
  <div class="form-group">
    <label for="validationCustom01">Nama Karyawan</label>
    <input type="text" class="form-control" name="nama" id="validationCustom01" >
    <div class="invalid-feedback">
        Masukan Nama
      </div>
  </div>
  <div class="form-group">
    <label for="validationCustom01">Tanggal Lahir</label>
    <input type="date" class="form-control" name="tgl_lahir" id="validationCustom01" required>
    <div class="invalid-feedback">
        Masukan Tanggal lahir.
      </div>
  </div>
   <div class="form-group">
    <label for="validationCustom01">Jenis kelamin</label>
    <select class="custom-select" name="jenis_kelamin" id="validationCustom01" required>
      <option selected disabled value="">Pilih Jenis kelamin...</option>
      <option value="laki-laki">laki-laki</option>
      <option value="perempuan">perempuan</option>
    </select>
    <div class="invalid-feedback">
        pilih jenis kelamin.
      </div>
  </div>
  <div class="form-group">
    <label for="validationCustom01">Jabatan</label>
    <select class="custom-select" name="jabatan" id="validationCustom01" required>
      <option selected disabled value="">Pilih jabatan...</option>
      <?php 
      include("koneksi.php");
      $sql = mysqli_query($koneksi,"SELECT * FROM jabatan");
      while($jb = mysqli_fetch_array($sql)){
       ?>
      <option value="<?php echo $jb['jabatan'] ?>"><?php echo $jb['jabatan']; ?></option>
      <?php } ?>
    </select>
    <div class="invalid-feedback">
        pilih jabatan.
      </div>
  </div>
  <div class="form-group">
    <label for="validationCustom01">Alamat</label>
    <textarea class="form-control" name="alamat" id="validationCustom01" required></textarea>
    <div class="invalid-feedback">
        masukan alamat.
      </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
<!--
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --!-->
    <script src="../css/js/bootstrap.bundle.min.js"></script>
</html>
