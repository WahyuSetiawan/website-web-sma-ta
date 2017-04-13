<?php 
	include "koneksi.php";
?>
<body>
<?php 
	include "all_profil.php";
?>
<div id="content" class="box">
<h2>Ubah Struktur Organisasi</h2>
<?php

$sql =mysql_query("SELECT * FROM struktur WHERE id_struktur='1' ");
$data=mysql_fetch_array($sql);
?>
<form method=POST action='proses_ubah_struktur.php' enctype='multipart/form-data'>
	<table>
    <input type=hidden name=id_album value=<?php echo $data['id_struktur'] ?>>
    <tr valign="top">
  	 	<td>Nama</td>
  		<td width="18">:&nbsp;</td>
 		<td><input type=text name='nama' value=<?php echo $data['nama'] ?> width="300"></td>    
	</tr>
    <tr valign="top">
  	 	<td>Gambar Struktur Organisasi</td>
  		<td width="18">:&nbsp;</td>
		<td> <?php echo "<img src='gambar_struktur/$data[gbr_struktur]' width=100 height=100 alt=''>" ?></td>
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