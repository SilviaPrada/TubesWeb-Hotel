<?php
error_reporting(0);
session_start();
$idUser = $_SESSION['iduser']; 
if($_SESSION['iduser']==""){
header("location:login.php?status=login");
}
include 'assets/koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo3.jpg">
    <title>Grand Vacation | Hotel</title>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <?php include 'assets/header.php'; ?>

    <div class="container">
    <h2>Pesanan</h2>
    <table width="100%" border="1" class="table table-bordered table-striped">
  <tr>
    <th>No</th>
    <th>ID Pemesanan</th>
    <th>Nama Kamar</th>
    <th>Tanggal Check In</th>
    <th>Tanggal Check Out</th>
    <th>Total Harga Pemesanan</th>
    <th>Status</th>
  </tr>
  <?php 
 
$sql = mysqli_query($conn,"SELECT * FROM pemesanan WHERE idUser = '$idUser'");
$no=1;
while($row=mysqli_fetch_array($sql)){
$data = $kamar -> GetDataById($row['idKamar']);
if($row['status'] == ""){
    $gambar = "menunggu.png";
    $status = "Menunggu";
} else if ($row['status'] == "disetujui"){
    $gambar = "disetujui.png";
    $status = "Disetujui";
} else {
    $gambar = "dibatalkan.png";
    $status = "Dibatalkan";
}
?>
  <tr>
    <td align="center"><?php echo $no; ?></td>
    <td align="center"><?php echo $row['idPesan'] ?></td>
    <td align="center"><?php foreach($data as $d){echo $d['namaKamar'];} ?></td>
    <td align="center"><?php echo $row['checkin']; ?></td>
    <td align="center"><?php echo $row['checkout']; ?></td>
    <td align="center">Rp<?php echo $kamar -> getRupiahFormat($row['totalPesan']); ?> </td>
    <td align="center"><img src="img/<?php echo $gambar; ?>" style="height: 100px;width: auto;"><br><?php echo $status; ?></td>
  <?php 
$no++;
}
?>
</table>
    </div>

    <?php include 'assets/footer.php' ?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>