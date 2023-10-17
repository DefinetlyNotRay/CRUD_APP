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
            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="data_karyawan.php">Data Karyawan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="data_jabatan.php">Data Jabatan</a>
        </li>
        </ul>
            <a class="nav-link" href="login/logout.php" class="form-inline my-2 my-lg-0">Logout</a>;
    </div>
    </nav>
    <br>
    <h2 class="mx-5">Add Employee Data</h2>
    <a href="../data_karyawan.php" class="btn btn-primary mx-5 mt-3 mb-5">See Data</a>
    <br><br>
    <form action="../process/prosesskaryawan.php" method="POST" class="needs-validation d-flex flex-column mx-5" novalidate>
        <div class="form-group">
            <label for="validationCustom01">Employee Name</label>
            <input type="text" name="nama" class="form-control">
            <div class="invalid-feedback">
                Insert Name
            </div>
        </div>
        <div class="form-group">
            <label for="validationCustom01">Date of Birth</label>
            <input class="form-control" name="tgl_lahir" type="date" id="validationCustom01" required>
            <div class="invalid-feedback">
                Insert Date of Birth
            </div>
        </div>   
        <div class="form-group">
                <label for="validationCustom01">Gender</label>
                <select name="jenis_kelamin" id="validationCustom01" class="custom-select"required="">
                    <option selected disabled value="">Pick a Gender...</option>
                    <option value="laki-laki">Male</option>
                    <option value="perempuan">Female</option>
                </select>
                <div class="invalid-feedback">
                    Pick a Gender
                </div>
            </div>
        <div class="form-group">
            <label for="validationCustom01">Department</label>
            <select name="jabatan" id="validationCustom01" class="custom-select">
                <option selected disabled value="">Pick a Department</option>
                <?php 
                    include("../connection.php");
                    $sql = mysqli_query($connect,"SELECT * FROM jabatan");
                    while($dataFetch = mysqli_fetch_array($sql)){
                ?>
                    <option value="<?php echo $dataFetch['jabatan']; ?>">
                        <?php echo $dataFetch['jabatan']; ?>    
                    </option>
                <?php } ?>
            </select>
            <div class="invalid-feedback">Pick a Department

            </div>
        </div>
        <div class="form-group">
            <label for="validationCustom01">Address</label>
            <textarea name="alamat" id="validationCustom01" class="form-control"></textarea>
            <div class="invalid-feedback">
                Insert Address
            </div>
        </div>
        <button class="btn btn-primary mb-5">Submit</button>
    </form>
</body>
 
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="../css/js/bootstrap.bundle.min.js"></script>
<script>
    
    (function() {
        'use strict';
        window.addEventListener('load',function() {
            const forms = document.getElementsByClassName('needs-validation');
            const validate = Array.prototype.filter.call(forms, function(form){
                form.addEventListener('submit',function(event){
                    if(form.checkValidity() === false){
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        },false);
    })();
</script>
</html>