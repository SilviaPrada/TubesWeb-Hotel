<html lang="en">

<head>
    <title>Form Entri Kamar</title>                        
</head>

<body>
    <h2>Input Gambar Kamar</h2>
    <table class="table table-bordered table-striped">
        <form enctype="multipart/form-data" action="" method="POST">
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
                ?></td>
            </tr>
            <tr>
                <td>Gambar Kamar</td>
                <td>:</td>
                <td> <input type="file" name="uploadedfile"> </td>
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
        $idKamar = $_POST['idKamar'];
        $target_path = "../img/rooms/";
        $gambarKamar =  !empty($_FILES['uploadedfile']['name']) ? $_FILES['uploadedfile']['name'] : false;

        $sqlinputkamar = mysqli_query($conn, "INSERT INTO 
        gambarKamar (idKamar, gambarKamar)
        VALUES($idKamar, '$gambarKamar')");
		
        if ($sqlinputkamar && move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path.basename($_FILES['uploadedfile']['name']))) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='index.php?module=tabelgambarkamar';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='index.php?module=inputgambarkamar';</script>";
        }
    }

    ?>

</body>

</html>