<?php 

include 'koneksi.php';

session_start();
$username=$_POST['username'];
$password=md5($_POST['password']);

    $query="SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($result) > 0){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        $_SESSION['nama'] = $row['nama'];
        echo "sukses";
    } else {
        $gagal = true;
        echo "gagal";
    }

?>