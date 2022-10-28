<?php
  include "koneksi.php";
  $sqlb = mysqli_query($conn, "UPDATE pemesanan SET status = 'dibatalkan' WHERE idPesan='$_GET[idPesan]'");
  
  if($sqlb){
  	echo "<script>alert('Berhasil Membatalkan');
  window.location.href='index.php?module=tabeltransaksi';</script>";
} else {
  echo "<script>alert('Gagal Membatalkan');
  window.location.href='index.php?module=tabeltransaksi';</script>";
}
?>