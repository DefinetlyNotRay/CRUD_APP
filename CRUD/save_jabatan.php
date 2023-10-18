<?php 
// database connection
include '../connection.php';

// Start a transaction
mysqli_begin_transaction($connect);

try {
    // Get the ID and new jabatan value from the form
    $id = $_POST['id'];
    $new_jabatan = $_POST['jabatan'];
    
    // Drop the foreign key constraint in karyawan table
    mysqli_query($connect, "ALTER TABLE karyawan DROP FOREIGN KEY fk_jabatan");

    // Retrieve the current jabatan value from the jabatan table based on the provided ID
    $result = mysqli_query($connect, "SELECT jabatan FROM jabatan WHERE id='$id'");
    $row = mysqli_fetch_assoc($result);
    $old_jabatan = $row['jabatan'];

    // Update jabatan in the jabatan table with the new value
    mysqli_query($connect, "UPDATE `jabatan` SET `jabatan`='$new_jabatan' WHERE `id`='$id'");

    // Update jabatan in the karyawan table where it matches the old jabatan value
    mysqli_query($connect, "UPDATE `karyawan` SET `jabatan`='$new_jabatan' WHERE `jabatan`='$old_jabatan'");

    // Add the foreign key constraint back to karyawan table
    mysqli_query($connect, "ALTER TABLE `karyawan` ADD CONSTRAINT `fk_jabatan` FOREIGN KEY (`jabatan`) REFERENCES `jabatan`(`jabatan`)");

    // Commit the transaction
    mysqli_commit($connect);

    // Redirect to data_jabatan
    header("location:../data_jabatan.php");

} catch (Exception $e) {
    // An error occurred, rollback the transaction
    mysqli_rollback($connect);
    echo "Failed: " . $e->getMessage();
}
?>
