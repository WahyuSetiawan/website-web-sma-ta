<?php 
	session_start();
	include "koneksi.php";
?>
<body>
<?php include "all_gurudansiswa.php"; ?>
<div id="content" class="box">
<h2>Mata Pelajaran</h2>
<p>[ <a href="tambah_mapel.php">Tambah Data</a> ] </p>

<table scope="col" border="1">
<tr style="background:#ccc">
<th scope="col">Mata Pelajaran</th>
<th scope="col">jurusan</th>
<th scope="col">Aksi</th>
</tr>

<?php
$sql = "
SELECT m.id_mapel, j.nama_jurusan from mata_pelajaran m , jurusan j where (j.id_jurusan=m.jurusan) order by id_mapel asc ";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
<tr>
<td align="center"><?php echo $data['id_mapel']; ?></td>
<td align="center"><?php echo $data['nama_jurusan']; ?></td>

<td>
<p>[
<a href="hapus_mapel.php?id_mapel=<?php echo $data['id_mapel']; ?>" onClick="return confirm('Hapus data ini ?')">Hapus</a>

]</p>

</td>
</tr>


<?php
}
?>
</table>

</div>
<?php include "footer.php"; ?>
