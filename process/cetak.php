<?php 
    session_start();
    if($_SESSION['status'] != "login"){
        header("location:login/index.php?message=not_logged");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Employee Data</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
</head>
<style type="text/css">
  body{
    background-image: url(gambar/1.png);
    border-radius: 25px;
    background-position: left top;
    background-repeat: repeat;
  }
  .center{
    float: right;
    margin-right: 20px;
  }
</style>
<body>
<center>
  <h2>Employee Data</h2>
  <br>
  <h3>PT. Moquet</h3>
</center>
<br><br>
<table>
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Date of Birth</th>
            <th scope="col">Gender</th>
            <th scope="col">Department</th>
            <th scope="col">Address</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include("../connection.php");
            $number = 1;
            $sql = mysqli_query($connect, "SELECT * FROM karyawan");
            while($dataFetch = mysqli_fetch_array($sql)){
        ?>
        <tr>
            <th scope="row"><?php echo $number++ ?></th>
            <td><?php echo $dataFetch['nama'] ?></td>
            <td><?php echo $dataFetch['tgl_lahir'] ?></td>
            <td><?php echo $dataFetch['jenis_kelamin'] ?></td>
            <td><?php echo $dataFetch['jabatan'] ?></td>
            <td><?php echo $dataFetch['alamat'] ?></td>
        </tr>
        <?php }?>
    </tbody>
</table>
<br><br><br><br><br><br><br><br>
<hr>
<center><p>&copy; Hikam aramdan</p></center>
</body>
</html>