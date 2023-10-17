<?php 
 session_start();
    if($_SESSION['status'] != "login"){
        header("location:login/index.php?message=not_logged");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Data karyawan</title>
	<link rel="stylesheet" type="text/css" href="../css/css/bootstrap.min.css">

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
        <a class="nav-link" href="../index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link active" href="data_karyawan.php">Data Karyawan<span class="sr-only">(current)</span></a>
      </li>
 	  <li class="nav-item">
        <a class="nav-link" href="../data_jabatan.php">Data Jabatan</a>
      </li>
    </ul>
        <a class="nav-link" href="login/logout.php" class="form-inline my-2 my-lg-0">Logout</a>
  </div>
</nav>
<br>
<h2 class="mx-5 mt-5">Add Employee Data</h2>
<a href="data_karyawan.php" class="btn btn-primary mx-5 mb-4">See Data</a>
<br><br>
<form method="post" action="save.php" class="needs-validate mx-5">
<?php 
    include("../connection.php");
    $id = $_GET["id"];
    $sql = mysqli_query($connect, "SELECT * FROM karyawan WHERE id ='$id'");
    while($dataFetch = mysqli_fetch_array($sql)){
?>
    <div class="form-group">
        <input type="text" class="form-control" value="<?php echo $dataFetch['id']; ?>">
        <label for="Employee Name">Employee Name</label>
        <input type="text" name="nama" value="<?php echo $dataFetch['nama']; ?>" class="form-control">
    </div> 
    <div class="form-group">
      <label for="">Date of Birth</label>
      <input type="date" value="<?php echo $dataFetch['tgl_lahir']; ?>"class="form-control">
    </div>
    <div class="form-group">
      <label>Gender</label>
      <?php $genderCol = $dataFetch['jenis_kelamin'] ?>
      <select name="" id="" class="custom-select">
        <option value="laki-laki" <?php $genderCol == 'laki-laki' ? 'selected="slected"': ''; ?>>Male</option>
        <option value="perempuan" <?php $genderCol == 'perempuan' ? 'selected="selected"' : ''; ?>>Female</option>
      </select>
    </div>
    <div class="form-group">
      <label for="">Address</label>
      <textarea name="address" class="form-control"><?php echo $dataFetch['alamat']; ?></textarea></div>
<?php } ?>
  <button type="submit" class="btn btn-primary">Submit</button>
  <button type="reset" class="btn btn-danger">Reset</button>

</form>
</body>
</html>
