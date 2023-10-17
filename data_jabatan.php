<?php 
  session_start();
  if($_SESSION['status']!="login"){
    header("location:login/index.php?pesan=belum_login");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Department Data</title>
    <link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
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
<h2 class="mx-5">Department Data</h2>
<a href="CRUD/tambah_jabatan.php" class="btn btn-primary mx-5">Add Data++</a>
<br></br>
<table class="table table-stripped">
    <thead>
        <th scope="col">#</th>
        <th scope="col">Jabatan</th>
        <th scope="col">Action</th>
    </thead>
    <tbody>
        <?php 
            include("connection.php");
            $number = 1;
            $sql = mysqli_query($connect,"SELECT * FROM jabatan");
            while($dataFetch = mysqli_fetch_array($sql)){
        ?>
        <tr>
            <td scope="row"><?php echo $number++ ?></td>
            <td><?php echo $dataFetch['jabatan']; ?></td> 
            <td>
                <a href="CRUD/edit_jabatan.php?id=<?php echo $dataFetch['id'] ?>" class="btn btn-primary">Edit</a> |
                <a href="CRUD/delete_jabatan.php?id=<?php echo $dataFetch['id'] ?>" class="btn btn-danger">Delete</a>
            </td> 
        </tr>
                
        <?php }?>
    </tbody>
</table>
<style>
  .table{ 
    width:94% !important;
    margin-left:3rem;
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