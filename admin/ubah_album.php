<?php 
	include "koneksi.php";
?>
<body>

<?php include "all_fitur.php"; ?>
<div id="content" class="box">
<h2>Ubah Album Foto</h2>
<?php

$sql =mysql_query("SELECT * FROM album WHERE id_album='$_GET[id_album]' ");
$data=mysql_fetch_array($sql);

?>
<form method=POST action='proses_ubah_album.php' enctype='multipart/form-data'>

	<table>
    <input type=hidden name=id_album value=<?php echo $data['id_album'] ?>>
    <tr valign="top">
  	 	<td>Judul Album</td>
  		<td width="18">:&nbsp;</td>
 		<td><input type=text name='jdl_album' value=<?php echo $data['jdl_album'] ?> width="300"></td>    
	</tr>
    <tr valign="top">
  	 	<td>Gambar Album</td>
  		<td width="18">:&nbsp;</td>
 		<td> <?php echo "<img src='album/$data[gbr_album]' width=100 height=100 alt=''>" ?></td>    
	</tr>
        <tr valign="top">
  	 	<td>Ganti Gambar</td>
  		<td width="18">:&nbsp;</td>
 		<td> <input type=file name='fupload' size=15></td>   
	</tr>
	</table>
	<input type=submit name=submit value=Simpan>
	<input type=button value=Batal onclick=self.history.back()>
</form>
</table>
</div>
<?php include "footer.php"; ?>