<?php include "koneksi.php";?>
<body>
<?php include "all_gurudansiswa.php"; ?>
<div id="content" class="box">
<h2>Data Siswa</h2>
<p><a href="tambah_data_siswa.php"><img src="icon/t.png" alt="" width="15" /> Tambah Siswa</a></p>
<table scope="col" border="1">
<tr style="background:#ccc">
<th scope="col">NIS</th>
<th scope="col">Nama</th>
<th scope="col">Tahun Ajaran</th>
<th scope="col">Jurusan</th>
<th scope="col">Tanggal Lahir</th>
<th scope="col">Jenis Kelamin</th>
<th scope="col">Agama</th>
<th scope="col">Aksi</th>
</tr>
<?php
$sql = "
SELECT s.nis,s.nama,t.thn_ajaran,j.nama_jurusan,s.tgl_lahir,s.j_kelamin,s.agama
FROM siswa s,jurusan j,thn_ajaran t
where ((s.id_jurusan=j.id_jurusan)and(s.tahun_ajaran=t.id_thn_ajaran)and(t.status=_latin1'Y')) order by nama asc";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
<tr>
<td align="center">
	<?php echo $data['nis']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td align="center"><?php echo $data['thn_ajaran']; ?></td>
<td align="center"><?php echo $data['nama_jurusan']; ?></td>
<td align="center"><?php echo $data['tgl_lahir']; ?></td>
<td align="center"><?php echo $data['j_kelamin']; ?></td>
<td align="center"><?php echo $data['agama']; ?></td>
<td>
<p><a href="detail_data_siswa.php?nis=<?php echo $data['nis']; ?>"><img src="icon/d.png" alt="" width="15" />&nbsp;&nbsp;</a>

	<a href="ubah_data_siswa.php?nis=<?php echo $data['nis']; ?>"><img src="icon/u.png" alt="" width="15" />&nbsp;&nbsp;</a>

	<a href="hapus_data_siswa.php?nis=<?php echo $data['nis']; ?>" onClick="return confirm('Hapus data ini ?')"><img src="icon/h.png" alt="" width="15" /></a>

</p>
</td>
</tr>
<?php
}
?>
</table>
</div>
<?php include "footer.php"; ?>