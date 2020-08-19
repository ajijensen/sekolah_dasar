<?php 
session_start();
//skrip koneksi
$koneksi = new mysqli("localhost","root","","10118094_akademik")
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SDN 04 PAGI KEBON PALA</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
  <div class="container">
    <div class="row text-center ">
      <div class="col-md-12">
        <br /><br />
        <h2> Register Form</h2>
        <h5>( Silahkan Daftarkan Identitas Anda )</h5>
        <br />
      </div>
    </div>
    <div class="row ">

      <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="panel panel-default">
          <div class="panel-body">
            <form role="form" method="post">
            <br />
            <div class="form-group input-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" name="nama_lengkap"  />
            </div>
            <div class="form-group input-group">
              <label>Username</label>
              <input type="text" class="form-control" name="user"  />
            </div>
            <div class="form-group input-group">
              <label>Password</label>
              <input type="password" class="form-control"  name="pass"  />
            </div>
          <button class="btn btn-primary" name="login">Register</button><br><br>
          <a href="login.php" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke Login</a>
          <hr /> 
        </form>
        <?php 
        if (isset($_POST['login']))
        {
              #code...
          $koneksi->query("INSERT INTO tb_login
				 		(nama_lengkap,username,password) VALUES ('$_POST[nama_lengkap]','$_POST[user]','$_POST[pass]')");

           echo "<script>alert('Registrasi Akun Baru Berhasil Disimpan');</script>";

        }
        ?>
      </div>

    </div>
  </div>


</div>
</div>


<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>

</body>
</html>