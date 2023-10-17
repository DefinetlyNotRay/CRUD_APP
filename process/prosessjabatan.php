<?php 
include("../connection.php");
$jabatan = $_POST['jabatan'];

$query = mysqli_query($connect, "INSERT INTO `jabatan`(`id`,`jabatan`) VALUES(NULL, '$jabatan')");

if($query){
    header("location:../data_jabatan.php");
}else{
    echo mysqli_error($connect);
}
?>