<h2>Tabel Pemesanan</h2>
<div class="alert alert-info">TABEL DATA PEMESANAN</div>
<A href="index.php?module=inputtransaksi" class="btn btn-primary">Tambah Data</a>
<table width="100%" border="1" class="table table-bordered table-striped">
  <tr>
    <form method="POST" action="">
      <td>Cari</td>
      <td><input type="text" name="pencarian"></td>
      <td><button type="submit" name="cari" class="btn btn-success">Cari</td>
  </tr>
  </form>

  <tr>
    <th>No</th>
    <th>ID Pemesanan</th>
    <th>Foto Profil</th>
    <th colspan="3">Data</th>
    <th>Aksi</th>
  </tr>


  <?php 
 if (isset($_POST['cari'])){
   $pencarian=$_POST['pencarian'];
   $sql= mysqli_query($conn, "SELECT * FROM pemesanan WHERE namaPemesan LIKE '%$pencarian%'");
  }else{
    $sql = mysqli_query($conn,"SELECT * FROM pemesanan WHERE status = ''");
  }
$no=1;
$total=0;
while($row=mysqli_fetch_array($sql)){
?>
  <?php
$iduser = $row['idUser'];
$sqluser = mysqli_query($conn, "SELECT * FROM user WHERE idUser = $iduser");
$hasil = mysqli_fetch_array($sqluser);
$data = $kamar -> GetDataById($row['idKamar']);
?>

  <tr>
    <td rowspan="5" align="center"><?php echo $no; ?></td>
    <td rowspan="5" align="center"><?php echo $row['idPesan'] ?> </td>
    <td rowspan="5" align="center"><img src="../img/users/<?php echo $hasil['fotoprofil'];?>" style="height: 200px;width: auto;"> </td>
    <td>Nama Pemesan</td>
    <td>:</td>
    <td align="center"><?php echo $row['namaPemesan']; ?> </td>
    <td rowspan="5" align="center">
      <a href="index.php?module=setujuitransaksi&idPesan=<?php echo $row['idPesan'];?>"
        class="btn btn-success">Setujui</a><br>
      <a href="index.php?module=batalkantransaksi&idPesan=<?php echo $row['idPesan'];?>"
        class="btn btn-danger">Batalkan</a>
    </td>
  </tr>
  <tr>
    <td>Nama Kamar : </td>
    <td>:</td>
    <td align="center" ><?php foreach($data as $d){echo $d['namaKamar'];} ?> </td>
  </tr>
  <tr>
    <td>Tanggal Check In</td>
    <td>:</td>
    <td align="center"><?php echo $row['checkin']; ?> </td>
  </tr>
  <tr>
    <td>Tanggal Check Out</td>
    <td>:</td>
    <td align="center"><?php echo $row['checkout']; ?> </td>
  </tr>
  <tr>
    <td>Total Pemesanan</td>
    <td>:</td>
    <td align="center"><?php echo $row['totalPesan']; ?> </td>
  </tr>
  <?php 
$no++;
}
?>
</table>