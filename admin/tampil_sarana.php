<?php include "koneksi.php"; ?>
<body>
<?php include "all_profil.php"; ?>
<div id="content" class="box">
<h2>Sarana dan Prasarana</h2>
<p><a href="tambah_sarana.php"><img src="icon/t.png" alt="" width="15" /> Tambah Sarana dan Prasarana Sekolah</a></p>
<table  scope="col" border="1">
<tr style="background:#ccc">
<th scope="col">Nama Sarana</th>
<th scope="col">Gambar Sarana</th>
<th scope="col">Deskripsi Sarana</th>
<th scope="col">Aksi</th>
</tr>
<?php
$sql = "SELECT * FROM sarana";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
<tr>
<td align="center" valign="bottom">
	<?php echo $data['nama_sarana']; ?></td>
<td align="center"><?php echo "<img src='gambar_sarana/$data[gbr_sarana]' width=65 height=65 alt=''>" ?></td>
<td><?php echo $data['entry_sarana']; ?></td>
<td>

<p><a href="detail_sarana.php?id_sarana=<?php echo $data['id_sarana']; ?>"><img src="icon/d.png" alt="" width="15" />&nbsp;&nbsp;</a>

<a href="ubah_sarana.php?id_sarana=<?php echo $data['id_sarana']; ?>"><img src="icon/u.png" alt="" width="15" />&nbsp;&nbsp;</a>

<a href="hapus_sarana.php?id_sarana=<?php echo $data['id_sarana']; ?>" onClick="return confirm('Hapus data ini ?')"><img src="icon/h.png" alt="" width="15" /></a>

</p>
</td>
</tr>
<?php
}
?>
</table>
</div>
<?php include "footer.php"; ?>