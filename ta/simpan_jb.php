<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$jabatan = $_POST['jabatan'];
// update data ke database
mysqli_query($koneksi,"UPDATE jabatan set jabatan='$jabatan' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:data_jabatan.php");

?>