<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=calon_siswa_nilai_tertinggi.xls");
echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";

?>
<body>

<?php include "koneksi.php";?>
<div id="content" class="box">
<h2>Data Pendaftar Nilai Ujian Nasional Tertinggi</h2>
<table scope="col"border="1">
<tr style="background:#ccc">
<th scope="col">NIS</th>
<th scope="col">Nama</th>
<th scope="col">Tempat Lahir</th>
<th scope="col">Tanggal Lahir</th>
<th scope="col">Agama</th>
<th scope="col">Alamat</th>
<th scope="col">No. Telepon</th>
<th scope="col">Nama Orang Tua</th>
<th scope="col">Alamat Orang Tua</th>
<th scope="col">No. Telepon Orang Tua</th>
<th scope="col">Pendidikan Orang Tua</th>
<th scope="col">Pekerjaan</th>
<th scope="col">Penghasilan Orang Tua</th>
<th scope="col">Sekolah Asal</th>
<th scope="col">Status Sekolah</th>
<th scope="col">Alamat Sekolah</th>
<th scope="col">Nilai</th>
</tr>
<?php
$sql = "
SELECT *
FROM data_casis order by nun desc limit 20";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
<tr>
<td align="center"><?php echo $data['nis']; ?></td>
<td><?php echo $data['nama']; ?></td>
<td align="center"><?php echo $data['tmp_lahir']; ?></td>
<td align="center"><?php echo $data['tgl_lahir']; ?></td>
<td align="center"><?php echo $data['agama']; ?></td>
<td align="center"><?php echo $data['alamat']; ?></td>
<td align="center"><?php echo $data['tlp']; ?></td>
<td align="center"><?php echo $data['nama_ortu']; ?></td>
<td align="center"><?php echo $data['alamat_ortu']; ?></td>
<td align="center"><?php echo $data['tlp_ortu']; ?></td>
<td align="center"><?php echo $data['pdd_ortu']; ?></td>
<td align="center"><?php echo $data['pekerjaan']; ?></td>
<td align="center"><?php echo $data['penghasilan']; ?></td>
<td align="center"><?php echo $data['nama_sekolah']; ?></td>
<td align="center"><?php echo $data['status_sekolah']; ?></td>
<td align="center"><?php echo $data['alamat_sekolah']; ?></td>
<td align="center"><?php echo $data['nun']; ?></td>
</tr>
<?php
}
?>
</table>
</br>
<input type="button" value="Unduh Data" />
</div>
</body>
</html>
