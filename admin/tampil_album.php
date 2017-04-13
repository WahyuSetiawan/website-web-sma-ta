<?php 
	include "koneksi.php";
?>
<body>
<?php 
	include "all_fitur.php";
?>
<div id="content" class="box">
<h2>Data Album Foto</h2>
<p><a href="tambah_album.php"><img src="icon/t.png" alt="" width="15" /> Tambah Album</a> </p>
<table scope="col" border="1">
  <tr>
    <th width="143" scope="col">Judul Album</th>
    <th width="125" scope="col">Gambar</th>
    <th width="65" scope="col">Aksi</th>
  </tr>
  
<?php
$sql = "SELECT * FROM album order by jdl_album asc";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
  <tr>
    <td align="center"><?php echo $data['jdl_album']; ?></td>
    <td align="center"><?php echo "<img src='album/$data[gbr_album]' width=100 height=100 alt=''>" ?></td>
    <td align="center">
  	<a href="ubah_album.php?id_album=<?php echo $data['id_album']; ?>"><img src="icon/u.png" alt="" width="15" />&nbsp;&nbsp;</a>
	<a href="hapus_album.php?id_album=<?php echo $data['id_album']; ?>" onClick="return confirm('Hapus data ini ?')"><img src="icon/h.png" alt="" width="15" /></a>
    </td>
  </tr>
<?php
}
?>
</table>
</div>
<?php include "footer.php"; ?>