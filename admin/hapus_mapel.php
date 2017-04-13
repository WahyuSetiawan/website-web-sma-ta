<?php
include("koneksi.php");
$sql = "DELETE FROM mata_pelajaran WHERE id_mapel = '".$_GET['id_mapel']."'";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
header("location:tampil_mapel.php");
?>