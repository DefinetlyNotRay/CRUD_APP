<?php 
// creates a session

session_start();

include '../connection.php';

// gets the data tha was submitted by the form
$username = $_POST['username'];
$password  = $_POST['password'];

// selects the data with the admin username and password that matches
$data = mysqli_query($connect,"SELECT * FROM login where username='$username' and password='$password'");

// counts total data that was found
$ceck = mysqli_num_rows($data);

if ($check > 0) {
$_SESSION['username'] = $username;
$_SESSION['status'] = "login";
header("location:../index.php");
} else {
 header("location:index.php?message=failed");
}
?>
