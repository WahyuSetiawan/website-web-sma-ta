<?php 
  include "koneksi.php";
?>
<body>
<?php include "all_profil.php"; ?>
<div id="content" class="box">
<h2>Prestasi</h2>
<p><a href="ubah_prestasi.php"><img src="icon/u.png" alt="" width="15" /> Ubah Prestasi Sekolah</a></p>

<?php
$sql = "SELECT * FROM profil_sekolah WHERE id_profil = 3";
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
?>
<tr>
    <td align="center"><?php echo "<img src='gambar_prestasi/$data[gbr]' width=500 height=500 alt=''>" ?></td>
</tr>
</br>
</br>
</br>
<tr>
    <td align="center"><?php echo " ".$data['entry_profil'] ?></td>
</tr>

<table border="1" width="100%" cellpadding="3" cellspacing="0" style="border-collapse:collapse">
</table>
</tr>
</div>
<?php include "footer.php"; ?>
