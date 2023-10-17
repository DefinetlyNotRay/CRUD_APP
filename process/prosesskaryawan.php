<?php 
// Include the connection to the database
include("../connection.php");

// Retrieve data from the form
$nama = $_POST['nama']; 
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];

// Insert data into the 'karyawan' table
$query = mysqli_query($connect,"INSERT INTO `karyawan`(`id`, `nama`, `tgl_lahir`, `jenis_kelamin`, `jabatan`,`alamat`) VALUES(NULL,'$nama','$tgl_lahir','$jenis_kelamin','$jabatan','$alamat')");

// Check if the query was successful
if ($query) {
    // If successful, redirect to data_karyawan.php
    header("location:../data_karyawan.php");
} else {
    // If not successful, display the MySQL error message
    echo mysqli_error($connect);
}
?>
