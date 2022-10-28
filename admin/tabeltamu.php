<h2>Tabel Tamu</h2>
<div class="alert alert-info">TABEL DATA TAMU</div>
<table width="100%" border="1" class="table table-hover table-bordered table-striped">

<tr> 
<th>No.</th>
<th>ID User</th>
<th>Nama</th>
<th>No. Telp</th>
<th>E-Mail</th>
<th>Aksi</th>
</tr>


<?php  
$sql = mysqli_query($conn, "SELECT * FROM user");
$no=1;
while($row=mysqli_fetch_array($sql)){

?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['iduser'] ?> </td>
<td align="center"><?php echo $row['namauser'] ?> </td>
<td align="center"><?php echo $row['telepon'] ?> </td>
<td align="center"><?php echo $row['email'] ?> </td>


<td align="center">
<a href="index.php?module=edittamu&iduser=<?php echo $row['iduser'];?> "class="btn btn-success">Edit</a>
<a href="index.php?module=hapustamu&iduser=<?php echo $row['iduser'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 