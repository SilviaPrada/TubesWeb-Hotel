<?php
error_reporting(0);
session_start();
if($_SESSION['iduser']==""){
header("location:login.php?status=login");
}
include 'assets/koneksi.php';
$data = $kamar -> getData(4);
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/logo3.jpg">
    <title>Grand Vacation | Hotel </title>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <?php include 'assets/header.php'; ?>

    <div class="container">
        <h2>Pesan Kamar</h2>
        <table class="table table-bordered table-striped" id="table">
            <form action="konfirmasi.php" method="GET" name="myForm">
                <tr>
                    <td>Nama Kamar</td>
                    <td>:</td>
                    <td> <?php
                    $data = $kamar -> getAllDataSort();
                    echo "<select name='idKamar'>
                    <option value='' disabled selected hidden>-Pilih-</option>";
                    foreach ($data as $row) {
                        $id = $row['idKamar'];
                        $nama = $row['namaKamar'];
                        echo '<option value="'.$id.'">'.$nama.'</option>';
                    }
                    echo "</select>";
                ?> </td>
                </tr>
                <tr>
                    <td>Tanggal Check In</td>
                    <td>:</td>
                    <td>
                        <div class="filter__form__datepicker">
                            <span class="icon_calendar"></span>
                            <input type="text" name="checkin" class="datepicker_pop check__in">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Check Out</td>
                    <td>:</td>
                    <td>
                        <div class="filter__form__datepicker">
                            <span class="icon_calendar"></span>
                            <input type="text" name="checkout" class="datepicker_pop check__in">
                        </div>
                    </td>
                </tr>
                <!-- <tr>
                    <td>Gunakan nama anda untuk pemesanan</td>
                    <td>:</td>
                    <td>
                        <label class="radio-inline"><input type="radio" name="namabaru" value="ya"
                                onclick="hapusbaris()" checked>Ya</label>
                        <label class="radio-inline"><input type="radio" name="namabaru" value="tidak"
                                onclick="tambahbaris()">Tidak</label>
                    </td>
                </tr> -->
                <tr>
                    <td colspan="3" align="right">
                        <input type="submit" name="submit" id="" class="btn btn-success" value="PESAN">
                        <input type="reset" name="reset" id="" class="btn btn-danger" value="RESET">
                    </td>
                </tr>
            </form>
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
    <script>
        var table = document.getElementById("table");
        var barisawal = table.rows.length;

        function tambahbaris() {
            var totalRowCount = table.rows.length;
            if (totalRowCount === barisawal) {
                var row = table.insertRow(4);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                cell1.innerHTML = "Masukkan Nama Pemesan";
                cell2.innerHTML = ":";
                cell3.innerHTML = "<input type='text' name='nama'>";
            }
        }

        function hapusbaris() {
            var totalRowCount = table.rows.length;
            if (totalRowCount > barisawal) {
                table.deleteRow(4);
            }
            totalRowCount = table.rows.length;
        }

        function daysdifference(firstDate, secondDate) {
            var startDay = new Date(firstDate);
            var endDay = new Date(secondDate);

            var millisBetween = startDay.getTime() - endDay.getTime();
            var days = millisBetween / (1000 * 3600 * 24);

            return Math.round(Math.abs(days));
        }
    </script>
</body>

</html>