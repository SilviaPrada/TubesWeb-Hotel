<html lang="en">

<head>
    <title>Form Entri Kamar</title>                        
</head>

<body>
    <h2>Input Data Kamar</h2>
    <table class="table table-bordered table-striped">
        <form action="" method="POST">
            <tr>
                <td>Nama Kamar</td>
                <td>:</td>
                <td> <input type="text" name="namaKamar" id=""> </td>
            </tr>
            <tr>
                <td>Harga Kamar</td>
                <td>:</td>
                <td> <input type="text" name="hargaKamar" id=""> </td>
            </tr>
            <tr>
                <td>Ukuran Kamar</td>
                <td>:</td>
                <td> <input type="text" name="ukuranKamar" id=""> </td>
            </tr>
            <tr>
                <td>Kapasitas Kamar</td>
                <td>:</td>
                <td> <input type="text" name="kapasitasKamar" id=""> </td>
            </tr>
			<tr>
                <td>Kasur Kamar</td>
                <td>:</td>
                <td>
                    <select name="kasurKamar" id="kasurKamar"> 
                        <option value="" disabled selected hidden>-Pilih-</option>
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
                        <option value="" disabled selected hidden>-Pilih-</option>
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
    error_reporting(0);
    if (isset($_POST['submit'])) {
        if($_POST['namaKamar'] == "" && $_POST['hargaKamar'] == "" && $_POST['ukuranKamar'] == "" && $_POST['kapasitasKamar'] == "" && $_POST['kasurKamar'] == "" && $_POST['pemandanganKamar'] == ""){
            echo "<script>alert('Isi data dengan lengkap')</script>";
        } else {
        $namaKamar = $_POST['namaKamar'];
        $hargaKamar = $_POST['hargaKamar'];
        $ukuranKamar = $_POST['ukuranKamar'];
        $kapasitasKamar = $_POST['kapasitasKamar'];
        $kasurKamar = $_POST['kasurKamar'];
        $pemandanganKamar = $_POST['pemandanganKamar'];

        $sqlinputkamar = mysqli_query($conn, "INSERT INTO 
        dataKamar (namaKamar, hargaKamar, ukuranKamar, kapasitasKamar, kasurKamar, pemandanganKamar)
        VALUES('$namaKamar', $hargaKamar, $ukuranKamar, $kapasitasKamar, '$kasurKamar', '$pemandanganKamar')");
		
        if ($sqlinputkamar) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='index.php?module=tabelkamar';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='index.php?module=tabelkamar';</script>";
        }
    }
    }

    ?>

</body>

</html>