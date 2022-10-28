<?php 
$id=$_GET['iduser'];
$sql= mysqli_query($conn,"SELECT * FROM user WHERE iduser='$id'");
$data=mysqli_fetch_array($sql);
?>

<html lang="en">

<head>
    <title>Form Entri Tamu</title>                        
</head>

<body>
    <h2>Edit Data Tamu (User)</h2>
    <table align="center" class="table table-striped">
        <form enctype="multipart/form-data" action="" method="POST">
        <tr>
            <td>Id User</td>
            <td>:</td>
            <td><input type="text" name="iduser" value="<?php echo $data['iduser']; ?>" disabled></td>
        </tr>
        <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username"  value="<?php echo $data['username']; ?>"></td>
            </tr>
            <tr>
                <td>Nama User</td>
                <td>:</td>
                <td><input type="text" name="namauser" value="<?php echo $data['namauser']; ?>"></td>
            </tr>
            <tr>
                <td>No. Telepon</td>
                <td>:</td>
                <td><input type="text" name="telepon" value="<?php echo $data['telepon']; ?>"></td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td>:</td>
                <td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
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
        $username = $_POST['username'];
        $namauser= $_POST['namauser'];
        $telepon= $_POST['telepon'];
        $email= $_POST['email'];

        $q = mysqli_query($conn, "UPDATE user SET username = '$username', namauser = '$namauser', telepon = '$telepon', email = '$email' WHERE iduser='$id'");
		
        if ($q) {
            echo "<script>alert('Data Berhasil Di simpan');
			window.location.href='index.php?module=tabeltamu';</script>";
         }else {
            echo "<script>alert('Data Gagal Disimpan!');
			window.location.href='index.php?module=tabeltamu';</script>";
        }
    }

    ?>

</body>

</html>