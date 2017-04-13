<?php
include("koneksi.php");
$sql = "DELETE FROM thn_ajaran WHERE id_thn_ajaran = '".$_GET['id_thn_ajaran']."'";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
header("location:tampil_tahun_ajaran.php");
?>