<h2>Tabel Kamar</h2>
<div class="alert alert-info">TABEL DATA KAMAR</div>
<A href="index.php?module=inputkamar" class="btn btn-primary">Tambah Data</a>
<table width="100%" border="1" class="table table-bordered table-striped">

<tr> 
<th>No</th>
<th>ID</th>
<th>Nama</th>
<th>Ukuran</th>
<th>Kapasitas</th>
<th>Harga</th>
<th>Kasur</th>
<th>Pemandangan</th>
<th>Aksi</th>
</tr>


<?php  
$data = $kamar -> getAllDataSort();
$no=1;
foreach($data as $row){

?>

<tr>
<td align="center"><?php echo $no; ?></td>
<td align="center"><?php echo $row['idKamar']; ?> </td>
<td align="center"><?php echo $row['namaKamar']; ?> </td>
<td align="center"><?php echo $row['ukuranKamar']; ?> </td>
<td align="center"><?php echo $row['kapasitasKamar']; ?> </td>
<td align="center"><?php echo $row['hargaKamar']; ?> </td>
<td align="center"><?php echo $row['kasurKamar']; ?> </td>
<td align="center"><?php echo $row['pemandanganKamar']; ?> </td>


<td align="center">
<a href="index.php?module=editkamar&idKamar=<?php echo $row['idKamar'];?>"class="btn btn-success">Edit</a>
<a href="index.php?module=hapuskamar&idKamar=<?php echo $row['idKamar'];?>"class="btn btn-danger">Hapus</a>
</td>
</tr>

<?php 
$no++;
}
?>
</table> 