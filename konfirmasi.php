<?php
error_reporting(0);
session_start();
include 'assets/koneksi.php';
$idKamar = $_GET['idKamar'];
$idUser = $_SESSION['iduser'];
// if($_GET['namabaru'] == "ya"){
//     $namaPesan = $_SESSION['namauser'];
// } else {
//     $namaPesan = $_GET['nama'];
// }
$namaPesan = $_SESSION['namauser'];
$checkin = date("Y-m-d", strtotime($_GET['checkin']));
$checkout = date("Y-m-d", strtotime($_GET['checkout']));
$start = strtotime($checkin);
$end = strtotime($checkout);
$hari = ceil(abs($end - $start) / 86400);
$harga = $kamar -> getDataById($idKamar);
foreach($harga as $row){
    $namaKamar = $row['namaKamar'];
    $hargaKamar = $row['hargaKamar'];
}
$totalPesan = $hargaKamar * $hari;
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
        <h2>Konfirmasi Kamar</h2>
        <table class="table table-bordered table-striped" id="table">
            <form action="" method="POST">
                <tr>
                    <td>Nama Kamar</td>
                    <td>:</td>
                    <td> <?php echo $namaKamar;?> </td>
                </tr>
                <tr>
                    <td>Nama Pemesan</td>
                    <td>:</td>
                    <td> <?php echo $_SESSION['namauser'];?> </td>
                </tr>
                <tr>
                    <td>Tanggal Check In</td>
                    <td>:</td>
                    <td> <?php echo $_GET['checkin'];?> </td>
                </tr>
                <tr>
                    <td>Tanggal Check Out</td>
                    <td>:</td>
                    <td> <?php echo $_GET['checkout'];?> </td>
                </tr>
                <tr>
                    <td>Harga Kamar / Hari</td>
                    <td>:</td>
                    <td> Rp<?php echo $kamar -> getRupiahFormat($hargaKamar);?> </td>
                </tr>
                <tr>
                    <td>Harga Total selama <b><?php echo $hari; ?> hari</b></td>
                    <td>:</td>
                    <td><b> Rp<?php echo $kamar -> getRupiahFormat($totalPesan); ?></b> </td>
                </tr>
                <tr>
                    <td colspan="3" align="right">
                        <input type="submit" name="submit2" class="btn btn-success" value="KONFIRMASI">
                    </td>
                </tr>
            </form>
        </table>
        <?php
            if (isset($_POST['submit2'])) {
            $sqlinputpesan = mysqli_query($conn, "INSERT INTO 
            pemesanan (idUser, idKamar, checkin, checkout, namaPemesan, totalPesan)
            VALUES($idUser, $idKamar, '$checkin', '$checkout', '$namaPesan', $totalPesan)");
            if ($sqlinputpesan) {
                echo "<script>alert('Data Berhasil Di simpan');
                window.location.href='pesan.php';</script>";
            }else {
                echo "<script>alert('Data Gagal Disimpan!');
                window.location.href='pesan.php';</script>";
            }
            }
        ?>
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