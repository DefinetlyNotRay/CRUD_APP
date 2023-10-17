<?php 
// database connection
include '../connection.php';

// catches the data that was sent from the form
$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// update data to the database
mysqli_query($connect,"UPDATE karyawan set nama='$nama', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin',alamat='$alamat' where id='$id'");

// redirects to data_jabatan
header("location:../data_karyawan.php");

?>