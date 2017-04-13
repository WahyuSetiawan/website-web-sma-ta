<?php 
	session_start();
	include "koneksi.php";
?>
<body>
<?php include "all_gurudansiswa.php"; ?>
<div id="content" class="box">
<h2>Jurusan</h2>
<p><a href="tambah_jurusan.php"><img src="icon/t.png" alt="" width="15" /> Tambah Data</a> </p>

<table scope="col" border="1">
<tr style="background:#ccc">
<th scope="col">ID Jurusan</th>
<th scope="col">Nama Jurusan</th>
<th scope="col">Aksi</th>
</tr>

<?php
$sql = "
SELECT * FROM jurusan order by id_jurusan asc ";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
<tr>
<td height="47" align="center"><?php echo $data['id_jurusan']; ?></td>
<td align="center"><?php echo $data['nama_jurusan']; ?></td>

<td>
<p>

	<a href="ubah_jurusan.php?id_jurusan=<?php echo $data['id_jurusan']; ?>"><img src="icon/u.png" alt="" width="15" />&nbsp;&nbsp;</a>

	<a href="hapus_jurusan.php?id_jurusan=<?php echo $data['id_jurusan']; ?>" onClick="return confirm('Hapus data ini ?')"><img src="icon/h.png" alt="" width="15" /></a>

</p>

</td>
</tr>
<?php
}
?>
</table>


</div>
<?php include "footer.php"; ?>