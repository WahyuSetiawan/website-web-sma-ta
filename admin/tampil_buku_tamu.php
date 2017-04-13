<?php 
	include "koneksi.php";
?>
<body>

<?php include "all_fitur.php"; ?>
<div id="content" class="box">

<h2>Data Buku Tamu</h2>
<p><a href="tambah_buku_tamu.php"><img src="icon/t.png" alt="" width="15" /> Tambah Tamu</a>  </p>

<table scope="col"border="1">
<tr style="background:#ccc">
<th scope="col">Nama</th>
<th scope="col">E-Mail</th>
<th scope="col">Subjek</th>
<th scope="col">Komentar</th>
<th scope="col">Aksi</th>
</tr>

<?php
$sql = "
SELECT * FROM buku_tamu order by id_tamu asc ";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>

<tr>
<td height="47" align="center"><?php echo $data['nama']; ?></td>
<td align="center"><?php echo $data['email']; ?></td>
<td align="center"><?php echo $data['subjek']; ?></td>
<td align="center"><?php echo $data['komentar']; ?></td>

<td align="center"><a href="hapus_buku_tamu.php?id_tamu=<?php echo $data['id_tamu']; ?>" onClick="return confirm('Hapus data ini ?')"><img src="icon/h.png" alt="" width="15" /></a>
</td>
</tr>

<?php
}
?>
</table>
</table>
</div>
<?php include "footer.php"; ?>
