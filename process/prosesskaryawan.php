<?php 
include("../connection.php");

// posting the data to database
$nama = $_POST['nama']; 
$tgl_lahir = $_POST['tgl_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jabatan = $_POST['jabatan'];
$alamat = $_POST['alamat'];


$query = mysqli_query($connect,"INSERT INTO `karyawan`(`id`, `nama`, `tgl_lahir`, `jenis_kelamin`, `jabatan`,`alamat`) VALUES(NULL,'$nama','$tgl_lahir','$jenis_kelamin','$jabatan','$alamat')");

if ($query) {
	header("location:../data_karyawan.php");
}else{
	echo mysqli_error($connect);
}
?>