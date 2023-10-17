<?php 
// connect to database
include "../connection.php";

// getting the id (?id=(number)) from the url
$id = $_GET['id'];

// resetting the auto increament
// $totalId = mysqli_query($connect, "SELECT COUNT(id) FROM karyawan;");
// mysqli_query($connect, "ALTER TABLE karyawan AUTO_INCREMENT = $totalId - 1");
// echo $totalId['COUNT(id)'];


// deleting data from the database
mysqli_query($connect,"DELETE FROM karyawan WHERE id='$id'");



// redericts to the index.php
header("location:../data_karyawan.php")
?>