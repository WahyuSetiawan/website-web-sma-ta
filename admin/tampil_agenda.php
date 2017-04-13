

<?php 
	include "koneksi.php";
?>
<body>
<?php include "all_berita.php"; ?>
<div id="content" class="box">
<h2>Data Agenda</h2>
<p> <a href="tambah_agenda.php"><img src="icon/t.png" alt="" width="15" /> Tambah Data</a> </p>
<table scope="col" border="1">
<tr style="background:#ccc">

<th scope="col">Tanggal</th>
<th scope="col">Tema</th>
<th scope="col">Acara</th>
<th scope="col">Tempat</th>
<th scope="col">Pukul</th>
<th scope="col">Aksi</th>
</tr>

<?php
$sql = "
SELECT * FROM agenda order by id_agenda asc";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
<tr>

<td align="center"><?php echo $data['tanggal']; ?></td>
<td><?php echo $data['tema']; ?></td>
<td><?php echo $data['acara']; ?></td>
<td><?php echo $data['tempat']; ?></td>
<td align="center"><?php echo $data['pukul']; ?></td>
<td>
<p><a href="detail_agenda.php?id_agenda=<?php echo $data['id_agenda']; ?>"><img src="icon/d.png" alt="" width="15" />&nbsp;&nbsp;</a>

	<a href="hapus_agenda.php?id_agenda=<?php echo $data['id_agenda']; ?>" onClick="return confirm('Hapus data ini ?')"><img src="icon/h.png" alt="" width="15" /></a>

</p>
</td>
</tr>
<?php
}
?>
</table>
</div>
<?php include "footer.php"; ?>
