<?php
  include "koneksi.php";
  $sqlb = mysqli_query($conn, "UPDATE pemesanan SET status = 'disetujui' WHERE idPesan='$_GET[idPesan]'");
  
  if($sqlb){
  	echo "<script>alert('Berhasil Menyetujui');
  window.location.href='index.php?module=tabeltransaksi';</script>";
} else {
  echo "<script>alert('Gagal Menyetujui');
  window.location.href='index.php?module=tabeltransaksi';</script>";
}
?>