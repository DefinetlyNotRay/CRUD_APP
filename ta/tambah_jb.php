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
<form method="POST" action="prosesjabatan.php" class="needs-validation" novalidate>
  <div class="form-group">
    <label for="validationCustom01">Nama jabatan</label>
    <input type="text" class="form-control" name="jabatan" id="validationCustom01" required>
    <div class="invalid-feedback">
        masukan nama jabatan.
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../css/js/bootstrap.bundle.min.js"></script>
</html>
