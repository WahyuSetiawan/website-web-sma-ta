<?php 
  include "koneksi.php";
?>
<body>
<?php include "all_profil.php"; ?>
<div id="content" class="box">
<h2>Visi Misi</h2>
<p><a href="ubah_visi_misi.php"><img src="icon/u.png" alt="" width="15" /> Ubah Visi dan Misi Sekolah</a></p>

<?php
$sql = "SELECT entry_profil FROM profil_sekolah WHERE id_profil = 1";
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
echo " ".$data['entry_profil'];
?>

<table border="1" width="100%" cellpadding="3" cellspacing="0" style="border-collapse:collapse">
</table>
</tr>
</div>
<?php include "footer.php"; ?>
