<h2>Tabel Gambar Kamar</h2>
<div class="alert alert-info">TABEL GAMBAR KAMAR</div>
<A href="index.php?module=inputgambarkamar" class="btn btn-primary">Tambah Data</a>
<table border="1" class="table table-bordered table-striped">

<tr> 
<th>No</th>
<th>Id Gambar</th>
<th>Id Kamar</th>
<th>Gambar</th>
<th>Aksi</th>
</tr>


<?php  
$sql = mysqli_query($conn, "SELECT * FROM gambarkamar");
$no=1;
while($row=mysqli_fetch_array($sql)){

?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['idGambar']; ?> </td>
<td align="center"><?php echo $row['idKamar']; ?> </td>
<td align="center"><img src="../img/rooms/<?php echo rawurlencode($row['gambarKamar']); ?>" style="height: 200px;width: auto;"></td>


<td align="center">
<a href="index.php?module=editgambarkamar&idGambar=<?php echo $row['idGambar'];?>"class="btn btn-success">Edit</a>
<a href="index.php?module=hapusgambarkamar&idGambar=<?php echo $row['idGambar'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 