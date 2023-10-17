<?php 
	session_start();
    if($_SESSION['status'] != 'login'){
        header("location:../login/index.php?message=not_logged");
    }
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Department Data</title>
	<link rel="stylesheet" type="text/css" href="../css/css/bootstrap.min.css">
</head>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PT.Moquet</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Home </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../data_karyawan.php">Data Karyawan</a>
      </li>
 	  <li class="nav-item">
        <a class="nav-link" href="data_jabatan.php"><span class="sr-only">(current)</span>Data Jabatan</a>
      </li>
    </ul>
        <a class="nav-link" href="../login/logout.php" class="form-inline my-2 my-lg-0">Logout</a>
  </div>
</nav>
<br>
<div class="a">

    <h2 class="mx-5">Add Department Data</h2>
    <a href="../data_jabatan.php" class="btn btn-primary mx-5">See Data</a>
    <br><br>
    <form method="POST" action="save_jabatan.php">
        <?php 
            include("../connection.php");
            $id = $_GET['id'];
            $sql = mysqli_query($connect,"SELECT * FROM jabatan WHERE id='$id'");
            while($dataFetch = mysqli_fetch_array($sql)){
        ?>
             <div class="form-group mx-5">
                <input type="text" name="id" value="<?php echo $dataFetch['id'] ?>" hidden>
                <label for="">Department Name</label>
                <input type="text" name="jabatan" class="form-control" value="<?php echo $dataFetch['jabatan'] ?>"></div>
        <?php } ?>
            <button type="submit" class="btn btn-primary mx-5">Submit</button>
    </form>
</div>
<style>
    html, body{
        height:100vh;
    }
</style>
</body>
</html>