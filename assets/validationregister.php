<?php include 'koneksi.php';

$username=$_POST['username'];
$password=md5($_POST['password']);

    $query="SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $cek = mysqli_num_rows($result);
    
    if($cek === 1){
        $row=mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['fotoprofil'] = $row['fotoprofil'];
        echo "sukses";
    } else {
        $gagal = true;
        echo "gagal";
    }

?>