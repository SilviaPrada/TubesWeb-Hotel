<?php 
$id=$_GET['idGambar'];
$sql= mysqli_query($conn,"SELECT a.*, b.namaKamar FROM gambarkamar a JOIN datakamar b ON a.idKamar = b.idKamar WHERE idgambar='$id'");
$data=mysqli_fetch_array($sql);
$idkamar=$data['idKamar'];
$nama=$data['namaKamar'];
?>
<html lang="en">

<head>
    <title>Form Entri Kamar</title>
</head>

<body>
    <h2>Update Data Kamar</h2>
    <table border="1" align="center" class="table table-bordered table-striped">
        <form enctype="multipart/form-data" action="" method="POST">
            <tr>
                <td>Id Gambar</td>
                <td>:</td>
                <td><input type="text" name="idGambar" value="<?php echo $id ?>" disabled></td>
            </tr>
            <tr>
                <td>Nama Kamar</td>
                <td>:</td>
                <td> <?php
                    $datakamar = $kamar -> getAllDataSort();
                    echo "<select name='idKamar'>
                    <option value='$idkamar' selected>$nama</option>";
                    foreach ($datakamar as $row) {
                        $idkamar = $row['idKamar'];
                        $nama = $row['namaKamar'];
                        echo '<option value="'.$idkamar.'">'.$nama.'</option>';
                    }
                    echo "</select>";
                ?></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><img src="../img/rooms/<?php echo rawurlencode($data['gambarKamar']);?>" style="height:20%;"></td>
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
        $querygambar = "SELECT gambarKamar FROM gambarkamar WHERE idGambar = '$id'";
        $upload = !empty($_FILES['uploadedfile']['name']) ? $_FILES['uploadedfile']['name'] : false;
        $gambarkamar = basename($upload);
	    $target_path = "../img/rooms/";
        $gambar = mysqli_query($conn, $querygambar);
        
        if ($upload) {
            $query = "UPDATE gambarkamar SET idKamar = $idKamar, gambarKamar = '$gambarkamar' WHERE idGambar = '$id'";
            move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path.basename($_FILES['uploadedfile']['name']));
        } else {
            while($row = mysqli_fetch_array($gambar)){
                $url = $row['gambarKamar'];
            }
            $query = "UPDATE gambarkamar SET idKamar = $idKamar, gambarKamar = '$url' WHERE idGambar = '$id'";
        }

        $sqlupdategambarkamar = mysqli_query($conn, $query);

        if ($sqlupdategambarkamar) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='index.php?module=tabelgambarkamar';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='index.php?module=tabelgambarkamar';</script>";
        }
    }

    ?>

</body>

</html>