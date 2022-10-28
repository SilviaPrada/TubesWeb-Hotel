<?php 
session_start();
include '../assets/koneksi.php';
if($_SESSION['idadmin']==""){
header("location:../login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RESERVASI HOTEL</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Css Styles -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
  <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
  <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="../css/style.css" type="text/css">


</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#">
        <img src="../img/logo4.jpg" width="140" height="50" class="d-inline-block align-top" alt="">
      </a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php?module=home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?module=tabelkamar">Data Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?module=tabelgambarkamar">Gambar Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?module=tabeltamu">Data Tamu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?module=tabeltransaksi">Data Transaksi</a>
        </li>
      </ul>
      <a class="btn btn-outline-success" href="../logout.php" role="button">Logout</a>
    </div>
  </nav>

  <div class="container">
    <?php
include "content.php";
?>
  </div>
  <!-- Js Plugins -->
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.nice-select.min.js"></script>
  <script src="../js/jquery-ui.min.js"></script>
  <script src="../js/jquery.slicknav.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/main.js"></script>
</body>

</html>