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

if(isset($_GET['status'])){
  $err_login = "<div class='alert alert-warning alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>&times;</span></button>
  <strong>Silahkan login terlebih dahulu!</strong></div>";
}

// function input terdapat di file koneksi.php

 $user = mysqli_real_escape_string($conn, $_POST['username']);
 $pass = mysqli_real_escape_string($conn, $_POST['password']);
 $pass_md5= md5($pass);

  if(isset($_POST['login'])){
    if($user == ""){
      $er_email="<div class='alert alert-warning alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span></button>
      <strong>Username Kosong !</strong> <br> Username wajib diisi</div>";
      } elseif($pass == ""){
      $er_pass="<div class='alert alert-warning alert-dismissible' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span></button>
      <strong>Password Kosong !</strong> <br> Password Wajib diisi</div>";
      } else{
      //cek apakah username terdaftar atau tidak di tb_admin
      $sqluser=mysqli_query($conn, "SELECT * FROM user where username ='$user' and password ='$pass_md5'");
      $sqladmin=mysqli_query($conn, "SELECT * FROM admin WHERE useradmin = '$user' AND passadmin = '$pass_md5'");
      $cekuser=mysqli_num_rows($sqluser);
      $cekadmin=mysqli_num_rows($sqladmin);
        if($cekuser != "0"){
            //jika username dan password tidak terdaftar di tb_admin
            $row = mysqli_fetch_assoc($sqluser);
            $_SESSION['iduser'] = $row['iduser'];
            $_SESSION['namauser'] = $row['namauser'];
            $_SESSION['telepon'] = $row['telepon'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['fotoprofil'] = $row['fotoprofil'];
            echo "<script>document.location='index.php'</script>";
        }
        
        if ($cekadmin != "0"){
            //jika username dan password terdaftar di tb_admin maka akan menuju halaman home.php
            $row = mysqli_fetch_assoc($sqladmin);
            $_SESSION['idadmin'] = $row['idadmin'];
            $_SESSION['namaadmin'] = $row['namaadmin'];
            echo "<script>document.location='admin/index.php'</script>";
        }

        if ($cekadmin == "0" && $cekuser == "0") {
            $er_email="<div class='alert alert-danger alert-dismissible' role='alert'>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button><strong>Login Gagal !</strong> <br>Username dan Password tidak valid</div>";
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
  <title>Login</title>
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
          <h1><i class="fa fa-key fa-fw"></i> FORM LOGIN</h1>
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

            <hr>
            <?php echo $err_login?>
            <button class="btn btn-primary btn-sm btn-block" type="submit" name="login">Log In</button>
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