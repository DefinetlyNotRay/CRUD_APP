<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

// update data ke database
mysqli_query($koneksi,"UPDATE karyawan set nama='$nama', tgl_lahir='$tgl_lahir', jenis_kelamin='$jenis_kelamin',alamat='$alamat' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:data_karyawan.php");

?>