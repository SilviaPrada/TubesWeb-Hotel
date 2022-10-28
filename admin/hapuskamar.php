<?php
$idkamar = $_GET['idKamar'];
$sql = mysqli_query($conn, "DELETE FROM datakamar WHERE idKamar=$idkamar");
if($sql){
  echo "<script>alert('Data berhasil dihapus');
  window.location.href='index.php?module=tabelkamar';</script>";
} else {
  echo "<script>alert('Data gagal dihapus');
  window.location.href='index.php?module=tabelkamar';</script>";
}
?>