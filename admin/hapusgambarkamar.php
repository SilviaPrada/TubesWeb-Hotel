<?php
$idgambar = $_GET['idGambar'];
$sql = mysqli_query($conn, "DELETE FROM gambarKamar WHERE idGambar=$idgambar");
if($sql){
  echo "<script>alert('Data berhasil dihapus');
  window.location.href='index.php?module=tabelgambarkamar';</script>";
} else {
  echo "<script>alert('Data gagal dihapus');
  window.location.href='index.php?module=tabelgambarkamar';</script>";
}
?>