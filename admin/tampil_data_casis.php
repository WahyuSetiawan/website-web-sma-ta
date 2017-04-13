<?php include "koneksi.php";?>
<body>
<?php include "all_psb.php"; ?>
<div id="content" class="box">
<h2>Data Siswa Terdaftar</h2>
<table scope="col"border="1">
<tr style="background:#ccc">
<th scope="col">NIS</th>
<th scope="col">Nama</th>
<th scope="col">Alamat</th>
<th scope="col">Asal Sekolah</th>
<th scope="col">Status</th>
<th scope="col">Aksi</th>
</tr>
<?php
$sql = "
SELECT *
FROM data_casis order by nis asc";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
<tr>
<td align="center">
	<?php echo $data['nis']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td align="center"><?php echo $data['alamat']; ?></td>
<td align="center"><?php echo $data['nama_sekolah']; ?></td>
<td align="center"><?php echo $data['status']; ?></td>
<td>
<p>[
<a href="preview_casis.php?nis=<?php echo $data['nis']; ?>">
Preview
</a>]

[

<a href="hapus_data_casis.php?nis=<?php echo $data['nis']; ?>" onClick="return confirm('Hapus data ini ?')">Hapus</a>


]</p>
</td>
</tr>
<?php
}
?>
</table>
</div>
<?php include "footer.php"; ?>