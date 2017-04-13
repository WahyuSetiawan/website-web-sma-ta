<?php 
	include "koneksi.php";
?>
<body>
<?php 
	include "all_fitur.php";
?>
<div id="content" class="box">

<h2>Data Galeri Foto</h2>
<p><a href="tambah_gallery.php"><img src="icon/t.png" alt="" width="15" />  Tambah Foto</a>  </p>
<table scope="col" border="1">
  <tr>

    <th width="103" scope="col">Foto</th>
    <th width="172" scope="col">Judul Foto</th>
    <th width="76" scope="col">Album</th>
    <th scope="col">Aksi</th>
  </tr>
  
<?php
$sql = "SELECT id_foto,gbr_foto,jdl_foto,jdl_album from foto f, album a where ((f.id_album=a.id_album)) order by jdl_album asc";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
  <tr>

    <td align="center"><?php echo "<img src='photos/$data[gbr_foto]' width=100 height=100 alt=''>" ?></td>
    <td align="center"><?php echo $data['jdl_foto']; ?></td>
    <td align="center"><?php echo $data['jdl_album']; ?></td>
    <td align="center">
    </a>
    <a href="hapus_gallery.php?id_gallery=<?php echo $data['id_gallery']; ?>" onClick="return confirm('Hapus data ini ?')"><img src="icon/h.png" alt="" width="15" /></a>
    </td>
  </tr>
<?php
}
?>
</table>
</div>
<?php include "footer.php"; ?>