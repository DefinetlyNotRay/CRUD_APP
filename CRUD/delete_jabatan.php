<?php 
// connect to database
include "../connection.php";

// getting the id (?id=(number)) from the url
$id = $_GET['id'];

// counts the total rows in the column id
$totalId = mysqli_query($connect, "SELECT COUNT(id) FROM jabatan;");

// gets the data associated with COUNT(id) column
$totalRecords = mysqli_fetch_assoc($totalId)['COUNT(id)'];

// Delete data from the database
mysqli_query($connect,"DELETE FROM jabatan WHERE id='$id'");

// Reset auto increment value
mysqli_query($connect, "ALTER TABLE jabatan AUTO_INCREMENT = $totalRecords");



// redericts to the index.php
header("location:../data_jabatan.php")
?>