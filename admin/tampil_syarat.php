<?php 
  include "koneksi.php";
?>
<body>
<?php include "all_psb.php"; ?>
<div id="content" class="box">
<h2>Syarat Pendaftaran</h2>
<p>[ <a href="ubah_syarat.php">Ubah Syarat Pendaftaran</a> ] </p>

<?php
$sql = "SELECT entry_syarat FROM syarat_pendaftaran WHERE id_syarat = 1";
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
echo " ".$data['entry_syarat'];
?>

<table border="1" width="100%" cellpadding="3" cellspacing="0" style="border-collapse:collapse">
</table>
</tr>
</div>
<?php include "footer.php"; ?>
