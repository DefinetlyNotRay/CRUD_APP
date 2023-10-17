<?php 
    session_start();
    if($_SESSION['status']!="login"){
        header("location:login/index.php?message=not_logged");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/css/bootstrap.min.css">
    <title>Adds Employee Data</title>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">PT.Moquet</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="../index.php">Home </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../data_karyawan.php">Data Karyawan</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link " href="../data_jabatan.php"><span class="sr-only">(current)</span>Data Jabatan</a>
        </li>
        </ul>
            <a class="nav-link" href="login/logout.php" class="form-inline my-2 my-lg-0">Logout</a>;
    </div>
    </nav>
    <br>
    <h2 class="mx-5">Add Department Data</h2>
    <a href="../data_jabatan.php" class="btn btn-primary mx-5">Lihat Data</a>
    <br><br>
    <form action="../process/prosessjabatan.php" method="POST" class="needs-validation" novalidate>
        
        <div class="form-group mx-5">
            <label for="validationCustom01">Deparment Name</label>
            <input type="text" class="form-control" name="jabatan" id="validationCustom01" required>
            <div class="invalid-feedback">
                Insert Department Name
            </div>
        </div>
        <button type="submit" class="btn btn-primary mx-5">Submit</button>
    </form>
</body>
 
 
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function(){
            const forms =document.getElementsByClassName('needs-validation');
            const validation = Array.prototype.filter.call(forms, function(forms) {
                forms.addEventListener('submit', function(event) {
                    if(form.checkValiditiy() === false){
                    event.preventDefault();
                    event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                },false);
            });
        }, false);
    })();
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../css/js/bootstrap.bundle.min.js"></script>
</html>