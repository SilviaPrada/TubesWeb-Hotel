<?php 
$id=$_GET['idKamar'];
$sql= mysqli_query($conn,"SELECT * FROM datakamar WHERE idKamar='$id'");
$data=mysqli_fetch_array($sql);
?>
<html lang="en">

<head>
    <title>Form Entri Kamar</title>
</head>

<body>
    <h2>Update Data Kamar</h2>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr>
                <td>ID Kamar</td>
                <td>:</td>
                <td> <input type="text" name="idKamar" value = "<?php echo $data['idKamar'] ?>" disabled> </td>
            </tr>
            <tr>
                <td>Nama Kamar</td>
                <td>:</td>
                <td> <input type="text" name="namaKamar" value = "<?php echo $data['namaKamar'] ?>"> </td>
            </tr>
            <tr>
                <td>Harga Kamar</td>
                <td>:</td>
                <td> <input type="text" name="hargaKamar" value = "<?php echo $data['hargaKamar'] ?>"> </td>
            </tr>
            <tr>
                <td>Ukuran Kamar</td>
                <td>:</td>
                <td> <input type="text" name="ukuranKamar" value = "<?php echo $data['ukuranKamar'] ?>"> </td>
            </tr>
            <tr>
                <td>Kapasitas Kamar</td>
                <td>:</td>
                <td> <input type="text" name="kapasitasKamar" value = "<?php echo $data['kapasitasKamar'] ?>"> </td>
            </tr>
            <tr>
                <td>Kasur Kamar</td>
                <td>:</td>
                <td>
                    <select name="kasurKamar" id="kasurKamar">
                        <option value = "<?php echo $data['kasurKamar'] ?>" selected><?php echo $data['kasurKamar'] ?></option>
                        <option value="Single Bed">Single Bed</option>
                        <option value="Double Bed">Double Bed</option>
                        <option value="Single King Bed">Single King Bed</option>
                        <option value="Double King Bed">Double King Bed</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pemandangan Kamar</td>
                <td>:</td>
                <td>
                    <select name="pemandanganKamar" id="pemandanganKamar">
                        <option value = "<?php echo $data['pemandanganKamar'] ?>" selected><?php echo $data['pemandanganKamar'] ?></option>
                        <option value="-">-</option>
                        <option value="Laut">Laut</option>
                        <option value="Gunung">Gunung</option>
                        <option value="Laut & Gunung">Laut & Gunung</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <input type="submit" name="submit" id="" class="btn btn-success" value="SIMPAN">
                    <input type="reset" name="reset" id="" class="btn btn-danger" value="RESET">
                </td>
            </tr>
        </form>
    </table>

    <?php
    if (isset($_POST['submit'])) {
        $namaKamar = $_POST['namaKamar'];
        $hargaKamar = $_POST['hargaKamar'];
        $ukuranKamar = $_POST['ukuranKamar'];
        $kapasitasKamar = $_POST['kapasitasKamar'];
        $kasurKamar = $_POST['kasurKamar'];
        $pemandanganKamar = $_POST['pemandanganKamar'];

        $sqlupdatekamar = mysqli_query($conn, "UPDATE datakamar SET
        namaKamar = '$namaKamar', hargaKamar = $hargaKamar, ukuranKamar = $ukuranKamar, kapasitasKamar = $kapasitasKamar,  kasurKamar = '$kasurKamar', pemandanganKamar = '$pemandanganKamar' WHERE idKamar = $id");
	
		
        if ($sqlupdatekamar) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='index.php?module=tabelkamar';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='index.php?module=tabelkamar';</script>";
        }
    }

    ?>

</body>

</html>