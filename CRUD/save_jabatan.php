<?php 
// database connection
include '../connection.php';

// catches the data that was sent from the form
$id = $_POST['id'];
$jabatan = $_POST['jabatan'];

// update data to the database
mysqli_query($connect,"UPDATE jabatan set jabatan='$jabatan' where id='$id'");

// redirects to data_jabatan
header("location:../data_jabatan.php");

?>