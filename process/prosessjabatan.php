<?php 
// Include the connection to the database
include("../connection.php");

// Retrieve the 'jabatan' data from the form
$jabatan = $_POST['jabatan'];

// Insert data into the 'jabatan' table
$query = mysqli_query($connect, "INSERT INTO `jabatan`(`id`,`jabatan`) VALUES(NULL, '$jabatan')");

// Check if the query was successful
if($query){
    // If successful, redirect to data_jabatan.php
    header("location:../data_jabatan.php");
} else {
    // If not successful, display the MySQL error message
    echo mysqli_error($connect);
}
?>
