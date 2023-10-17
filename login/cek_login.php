<?php 
// creates a session
session_start();

// includes the connection to the database
include '../connection.php';

// gets the data that was submitted by the form
$username = $_POST['username'];
$password = $_POST['password'];

// selects the data with the admin username and password that matches
$data = mysqli_query($connect,"SELECT * FROM login where username='$username' and password='$password'");

// counts the total data that was found
$check = mysqli_num_rows($data);

// checks if there is a match
if ($check > 0) {
    // If a match is found, set session variables and redirect to index.php
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:../index.php");
} else {
    // If no match is found, redirect back to index.php with a message
    header("location:index.php?message=failed");
}
?>
