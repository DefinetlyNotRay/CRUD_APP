<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login/index.php?pesan=belum_login");
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Data karyawan</title>
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>
<style type="text/css">
  body{
    background-image: url(gambar/1.png);
    border-radius: 25px;
    background-position: left top;
    background-repeat: repeat;
  }
  .center{
    float: right;
    margin-right: 20px;
  }
</style>
<body>
<div class="content" id="content">

	<center>
		<h2><b>DATA KARYAWAN</b></h2>
    <br>  
		<h3>PT. Moquet</h3>
	</center>
	<br><br>
  <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">tanggal Lahir</th>
      <th scope="col">jenis kelamin</th>
      <th scope="col">jabatan</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  include("connection.php");
  $no = 1;
  $sql = mysqli_query($connect,"SELECT * FROM karyawan");
  while($d = mysqli_fetch_array($sql)){
   ?>
    <tr>
      <th scope="row"><?php echo $no++ ?></th>
      <td><?php echo $d['nama']; ?></td>
      <td><?php echo $d['tgl_lahir']; ?></td>
      <td><?php echo $d['jenis_kelamin']; ?></td>
      <td><?php echo $d['jabatan']; ?></td>
      <td><?php echo $d['alamat']; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
<br><br><br><br><br><br><br><br>
<hr>
  <center><p>&copy; Hikam aramdan</p></center>
</div>
</div>
<center> 

  <button class="btn btn-success" id="download">Generate PDF</button>
</center>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.12.0/html2pdf.bundle.js"></script> -->

<script>
    window.onload = function(){
      document.getElementById("download").addEventListener("click", () => {
        const invoice = this.document.getElementById("content");
        console.log(invoice);
        console.log(window);
        var opt = {
          margin: 1,
          filename:'Employee Data.pdf',
          image:{
            type: 'jpeg',
            quality: 0.98
          },
          html2canvas:{
            scale: 2
          },
          jsPDF: {
            unit:'in',
            format:'tabloid',
            orientation: 'landscape'
          }
        };
        html2pdf().from(invoice).set(opt).save();
      })
      }
</script>

</body>
</html>