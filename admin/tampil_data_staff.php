<?php include "koneksi.php"; ?>
<body>
<?php include "all_gurudansiswa.php"; ?>
<div id="content" class="box">
<h2>Data Staff</h2>
<p><a href="tambah_data_staff.php"><img src="icon/t.png" alt="" width="15" /> Tambah Staff Sekolah</a></p>
<table scope="col" border="1">
<tr style="background:#ccc">
<th scope="col">NIK</th>
<th scope="col">Nama</th>
<th scope="col">Jenis Kelamin</th>
<th scope="col">Tempat Lahir</th>
<th scope="col">Tanggal Lahir</th>
<th scope="col">Agama</th>
<th scope="col">Jabatan</th>
<th scope="col">Alamat</th>
<th scope="col">Telepon</th>
<th scope="col">Aksi</th>
</tr>
<?php
$sql = "
SELECT s.nik,s.nama,s.j_kelamin,s.tmp_lahir,s.tgl_lahir,s.agama,s.jabatan,s.tgl_lahir,s.alamat,s.tlp
FROM staff s
order by nama asc";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
<tr>
<td align="center">
	<?php echo $data['nik']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td><?php echo $data['j_kelamin']; ?></td>
<td><?php echo $data['tmp_lahir']; ?></td>
<td><?php echo $data['tgl_lahir']; ?></td>
<td><?php echo $data['agama']; ?></td>
<td><?php echo $data['jabatan']; ?></td>
<td><?php echo $data['alamat']; ?></td>
<td><?php echo $data['tlp']; ?></td>
<td>
<p><a href="detail_data_staff.php?nik=<?php echo $data['nik']; ?>"><img src="icon/d.png" alt="" width="15" />&nbsp;&nbsp;</a>

	<a href="ubah_data_staff.php?nik=<?php echo $data['nik']; ?>"><img src="icon/u.png" alt="" width="15" />&nbsp;&nbsp;</a>

	<a href="hapus_data_staff.php?nik=<?php echo $data['nik']; ?>" onClick="return confirm('Hapus data ini ?')"><img src="icon/h.png" alt="" width="15" /></a>

</p>
</td>
</tr>
<?php
}
?>
</table>
</div>
<?php include "footer.php"; ?>