<?php
  $sqlb = mysqli_query($conn, "DELETE FROM user WHERE iduser='$_GET[iduser]'");
  
  if($sqlb){
    echo "<script>alert('Data berhasil dihapus');
    window.location.href='index.php?module=tabeltamu';</script>";
  } else {
    echo "<script>alert('Data gagal dihapus');
    window.location.href='index.php?module=tabeltamu';</script>";
  }
?>