<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login/index.php?message=not_logged");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
    <title>Data Karyawan</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">PT.Moquet</a>
  <button class="navbar-toggler" type="button"data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <a class="nav-link" href="./login/logout.php" class="form-inline my-2 my-lg-0">Logout</a>
  </div>
</nav>
<br>
<h2 class="mx-5">Tambah Data Karyawan</h2>
<a href="./CRUD/tambah.php" class="btn mx-5 btn-primary">Tambah Data +</a>
<br><br>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Gender</th>
            <th scope="col">Department</th>
            <th scope="col">Address</th>
            <th class="action" scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            include("./connection.php");
            $number = 1;
            $sql = mysqli_query($connect,"SELECT * FROM karyawan");
            //loops through everything in karyawan
            while($dataFetch = mysqli_fetch_array($sql)){
        ?>
        <tr>
            <!-- gets every data in dataFetch according to the column name -->
            <th scope="row"><?php echo $number++ ?></th>
            <td><?php echo $dataFetch['nama']?></td>
            <td><?php echo $dataFetch['tgl_lahir']?></td>
            <td><?php echo $dataFetch['jenis_kelamin']?></td>
            <td><?php echo $dataFetch['jabatan']?></td>
            <td><?php echo $dataFetch['alamat']?></td>
            <!-- gets the id of the selected row for deletion -->
            <td>
                <a href="CRUD/edit.php?id=<?php echo $dataFetch['id']; ?>" class="btn btn-primary">Edit</a> | <a href="./CRUD/delete.php?id=<?php echo $dataFetch['id'];?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<br><br>
<a href="cetak.php" target="_blank" class="btn btn-info mx-5">Print</a>
<style>
  body{
    overflow:hidden;
  }
  .action{
    margin-right: 100px;
  }
  .table{ 
    width:94% !important;
    margin-inline: auto;
  }
  th{
    border-right: 2px solid #dee2e6;
    border-left: 2px solid #dee2e6;
    border-bottom: 2px solid #dee2e6;


  }
  td{
    border-bottom: 2px solid #dee2e6;
     border-right: 2px solid #dee2e6;
    border-left: 2px solid #dee2e6;
  }
</style>
</body>
</html>