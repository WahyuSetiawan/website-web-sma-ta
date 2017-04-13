<?php 
	include "koneksi.php";
?>
<body>
<?php include "all_fitur.php"; ?>

<div id="content" class="box">
<h2>Tambah Gallery Foto</h2>

<form method=POST action='proses_tambah_gallery.php' enctype='multipart/form-data'>
	<table>
    
    <tr valign="top">
  	 	<td width="76">Judul Foto</td>
  		<td width="30">:&nbsp;</td>
 		<td width="200"><input type=text name='jdl_foto' width="300"></td>    
	</tr>
    <tr valign="top">
  	 	<td>Album</td>
  		<td width="30">:&nbsp;</td>
 		<td>
        <select name="id_album">
		<?php

		$sql="SELECT * FROM album";
		$hasil_query=mysql_query($sql);

		while($baris=mysql_fetch_object($hasil_query))
		{
		echo "<option value=$baris->id_album>$baris->jdl_album</option>";
		}
		?>
		</select>
        </td>    
	</tr>
        <tr valign="top">
  	 	<td>Keterangan</td>
  		<td width="30">:&nbsp;</td>
 		<td><textarea name="keterangan" ></textarea></td>    
	</tr>
    <tr valign="top">
  	 	<td>Gambar</td>
  		<td width="30">:&nbsp;</td>
 		<td> <input type=file name='fupload' size=15></td>    
	</tr>
	</table>
	<input type=submit name=submit value=Simpan>
	<input type=button value=Batal onclick=self.history.back()>
</form>
</table>
</div>
<?php include "footer.php"; ?>