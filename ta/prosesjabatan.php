<?php 
include("koneksi.php");
$jabatan = $_POST['jabatan'];

$query = mysqli_query($koneksi,"INSERT INTO `jabatan`(`id`, `jabatan`) VALUES (NULL,'$jabatan')");

if ($query) {
	header("location:data_jabatan.php");
}else{
	echo mysqli_error($koneksi);
}
?>
