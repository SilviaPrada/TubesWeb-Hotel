<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$db_name = "tubesweb";
$base_url = "http://localhost/Tugas_Besar_Hotel/";

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if ($conn) {
    echo "";
    
} else{
	echo "Koneksi ke MySQL gagal" . mysqli_connect_error();
}

include 'kamar.php';
$kamar = new Kamar($conn, $base_url);

?>