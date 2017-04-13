<?php 
	session_start();
	include "koneksi.php";
?>
<body>
<?php include "all_gurudansiswa.php"; ?>
<div id="content" class="box">
<h2>Tahun Ajaran</h2>
<p><a href="tambah_tahun_ajaran.php"><img src="icon/t.png" alt="" width="15" />  Tambah Data</a></p>

<table scope="col" border="1">
<tr style="background:#ccc">
<th scope="col">ID Tahun Ajaran</th>
<th scope="col">Tahun Ajaran</th>
<th scope="col">Status</th>
<th scope="col">Aksi</th>
</tr>

<?php
$sql = "
SELECT * FROM thn_ajaran order by id_thn_ajaran asc";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
<tr>
<td height="47" align="center"><?php echo $data['id_thn_ajaran']; ?></td>
<td align="center"><?php echo $data['thn_ajaran']; ?></td>
<td align="center"><?php echo $data['status']; ?></td>

<td>
<p>

	<a href="ubah_tahun_ajaran.php?id_thn_ajaran=<?php echo $data['id_thn_ajaran']; ?>"><img src="icon/u.png" alt="" width="15" />&nbsp;&nbsp;</a>

	<a href="hapus_tahun_ajaran.php?id_thn_ajaran=<?php echo $data['id_thn_ajaran']; ?>" onClick="return confirm('Hapus data ini ?')"><img src="icon/h.png" alt="" width="15" /></a>

</p>

</td>
</tr>
<?php
}
?>
</table>

</div>
<?php include "footer.php"; ?>
