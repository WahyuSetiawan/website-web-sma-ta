<?php 
  include "koneksi.php";
?>
<body>
<?php include "all_gurudansiswa.php"; ?>
<div id="content" class="box">
<h2>OSIS (Organisasi Siswa Intra Sekolah)</h2>
<p><a href="ubah_osis.php"><img src="icon/u.png" alt="" width="15" /> Ubah Osis</a></p>

<?php
$sql = "SELECT entry_profil FROM profil_sekolah WHERE id_profil = 6";
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
echo " ".$data['entry_profil'];
?>

<table border="1" width="100%" cellpadding="3" cellspacing="0" style="border-collapse:collapse">
</table>
</tr>
</div>
<?php include "footer.php"; ?>