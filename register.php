<?php
//abaikan error yang muncul pada browser
error_reporting(0);
//sesi dimulai
session_start();
//panggil koneksi.php untuk menghubungkan ke database
include "assets/koneksi.php";

//jika sesi sudah admin (sudah pernah login)  maka akan  di direct ke halaman home.php
if(isset($_SESSION["iduser"])) {
 header("location:index.php");
}

// function input terdapat di file koneksi.php

 $user = $_POST['username'];
 $pass = $_POST['password'];
 $nama = $_POST['namauser'];
 $telepon = $_POST['telepon'];
 $email = $_POST['email'];

 $pass_md5 = md5($pass);

  if(isset($_POST['register'])){
    if($user == ""){
      $er_email="<div class='alert alert-warning alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span></button>
      <strong>Username kosong</strong> <br> Email wajib diisi</div>";
      } elseif($pass == ""){
      $er_pass="<div class='alert alert-warning alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span></button>
      <strong>Password Kosong !</strong> <br> Password Wajib diisi</div>";
      } else if($nama == ""){
        $er_nama="<div class='alert alert-warning alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span></button>
      <strong>Nama Kosong !</strong> <br> Nama Wajib diisi</div>";
      } else if($telepon == ""){
        $er_telp="<div class='alert alert-warning alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span></button>
      <strong>Nomor Telepon Kosong !</strong> <br> Nomor Telepon Wajib diisi</div>";
      } else if($email == ""){
        $er_email2="<div class='alert alert-warning alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span></button>
      <strong>Email Kosong !</strong> <br> Email Wajib diisi</div>";
      } else {
      //cek apakah username terdaftar atau tidak di tb_admin
      $sqluser=mysqli_query($conn, "SELECT * FROM user where username = '$user'");
      $cekuser=mysqli_num_rows($sqluser);
      // echo "<script>alert($cekuser);</script>";
        if(mysqli_num_rows($sqluser) == "0"){
            //jika username dan password tidak terdaftar di tb_admin
            mysqli_query($conn, "INSERT INTO user(username, password, namauser, telepon, email) 
            VALUES('$user', '$pass_md5', '$nama', '$telepon', '$email')");
            echo "<script>alert('Berhasil Mendaftar!');document.location='login.php'</script>";
        } else {
          $err_login="<div class='alert alert-danger alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span></button>
      <strong>Username tersebut telah terdaftar !</strong> <br> Silahkan Login </div>";
        }
      }
    }
?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link rel="Shortcut Icon" href="img/logo3.jpg" type="image/x-icon" />
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles template ini-->
  <link href="css/style_admin.css" rel="stylesheet">
  <!-- Custom Fonts Awesome-->
  <link href="css/font-awesome.min.css" rel="stylesheet"type="text/css">
</head>

<body>
  <div class="container">
    <!-- start container -->
    <div class="row">
      <!-- start row -->
      <div class="col-lg-12 align-self-center">
        <!-- start col lg 12-->
        <div class="login">
          <!-- start class login -->
          <h1><i class="fa fa-key fa-fw"></i>FORM REGISTER</h1>
          <hr>

          <!-- start form login -->
          <form action="" method="post">
            <div class="form-group">
              <!--start form-group-->
              <label>Username</label>
              <div class="input-group input-group-sm"><span class="input-group-addon"><i
                    class="fa fa-user fa-fw"></i></span>
                <input type="text" name="username" placeholder="Username" class="form-control" maxlength="40"
                  value="<?php echo $_POST['username'];?>" autofocus>
              </div>
            </div>
            <!--/form-group-->

            <?php echo $er_email;?>

            <div class="form-group">
              <!--start form-group-->
              <label>Password</label>
              <div class="input-group  input-group-sm">
                <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span><input id="pass1" type="password"
                  name="password" placeholder="Password" class="form-control"
                  value="<?php echo $_POST['password'];?>" maxlength="15">
              </div>
            </div>
            <!--/form-group-->
            <?php echo $er_pass;?>

            <div class="form-group">
              <!--start form-group-->
              <label>Nama</label>
              <div class="input-group  input-group-sm">
                <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span><input id="nama1" type="text"
                  name="namauser" placeholder="Nama" class="form-control"
                  value="<?php echo $_POST['namauser'];?>" maxlength="15">
              </div>
            </div>
            <!--/form-group-->
            <?php echo $er_nama;?>

            <div class="form-group">
              <!--start form-group-->
              <label>Telepon</label>
              <div class="input-group  input-group-sm">
                <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span><input id="telp" type="text"
                  name="telepon" placeholder="Telepon" class="form-control"
                  value="<?php echo $_POST['telepon'];?>" maxlength="15">
              </div>
            </div>
            <!--/form-group-->
            <?php echo $er_telp;?>

            <div class="form-group">
              <!--start form-group-->
              <label>Email</label>
              <div class="input-group  input-group-sm">
                <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span><input id="email" type="text"
                  name="email" placeholder="Email" class="form-control"
                  value="<?php echo $_POST['email'];?>" maxlength="50">
              </div>
            </div>
            <!--/form-group-->
            <?php echo $er_email;?>

            <hr>
            <?php echo $err_login?>
            <button class="btn btn-primary btn-sm btn-block" type="submit" name="register">Register</button>
          </form>
          <!-- end form login -->
        </div><!-- end class login -->
      </div><!-- end col lg 12 -->
    </div><!-- end row -->
  </div><!-- end container -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>