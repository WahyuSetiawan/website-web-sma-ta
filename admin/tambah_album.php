<?php 
	include "koneksi.php";
?>
<body>
<?php 
	include "all_fitur.php";
?>
<div id="content" class="box">
<h2>Tambah Album Foto</h2>

<form method=POST action='proses_tambah_album.php' enctype='multipart/form-data'>
	<table>
    
    <tr valign="top">
  	 	<td>Judul Album</td>
  		<td width="18">:&nbsp;</td>
 		<td><input type=text name='jdl_album' width="300"></td>    
	</tr>
    <tr valign="top">
  	 	<td>Gambar Album</td>
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