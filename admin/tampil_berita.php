

<?php 
	include "koneksi.php";
?>
<body>
<?php include "all_berita.php"; ?>
<div id="content" class="box">
<h2>Data Berita</h2>
<p> <a href="tambah_berita.php"><img src="icon/t.png" alt="" width="15" /> Tambah Berita</a> </p>
<table scope="col" border="1">
<tr style="background:#ccc">
<th scope="col">Judul</th>
<th scope="col">Isi Berita</th>
<th scope="col">Aksi</th>
</tr>

<?php
$sql = "
SELECT * FROM berita order by id_berita asc";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
<tr>
<td scope="col"><?php echo $data['judul_berita']; ?></td>
<td scope="col"><?php echo $data['isi']; ?></td>
<td>
<p scope="col"><a href="detail_berita.php?id_berita=<?php echo $data['id_berita']; ?>"><img src="icon/d.png" alt="" width="15" />&nbsp;&nbsp;</a>

	<a href="hapus_berita.php?id_berita=<?php echo $data['id_berita']; ?>" onClick="return confirm('Hapus data ini ?')"><img src="icon/h.png" alt="" width="15" /></a>

</p>
</td>
</tr>
<?php
}
?>
</table>
</div>
<?php include "footer.php"; ?>
