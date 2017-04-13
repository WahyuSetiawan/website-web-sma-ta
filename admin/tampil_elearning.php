<?php 
include "all_elearning.php";
include "koneksi.php";
include "config/library.php";
include "config/fungsi_thumb.php";
include "config/fungsi_indotgl.php";
?>

<div id="content" class="box">
<p>[ <a href="tambah_elearning.php">Tambah Data</a> ] </p>
<table scope="col" border="1">
  <tr>
    <th scope="col">ID File</th>
    <th scope="col">Nama File</th>
    <th scope="col">Mata Pelajaran</th>
    <th scope="col">NIP Guru</th>
	<th scope="col">Tahun Ajaran</th>
    <th scope="col">Kelas</th>
    <th scope="col">Tanggal Upload</th>
    <th scope="col">Aksi</th>
  </tr>
  <?php
$sql = "SELECT * FROM materi join guru on guru.nip = materi.nip";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_array($hasil)){
	$tgl=tgl_indo($data['tanggal_upload']);
?>

  <tr>
    <td><?php echo $data['id_materi'] ?></td>
    <td><?php echo $data['file_materi'] ?></td>
    <td><?php echo $data['mapel'] ?></td>
    <td><?php echo $data['nip']?></td>
	<td><?php echo $data['tahun_ajaran']?></td>
    <td><?php echo $data['kelas']?></td>
    <td><?php echo $tgl ?></td>
    <td align="center"><a href="hapus_materi.php?id_materi=<?php echo $data['id_materi']; ?>" onClick="return confirm('Hapus data ini ?')"><img src="icon/h.png" alt="" width="15" /></a></td>
  </tr>
<?php
}
?>
</table>
</div>
<?php include "footer.php"; ?>
