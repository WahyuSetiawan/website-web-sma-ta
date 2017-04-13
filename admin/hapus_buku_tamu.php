<?php
include("koneksi.php");
$sql = "DELETE FROM buku_tamu WHERE id_tamu = '".$_GET['id_tamu']."'";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
header("location:tampil_buku_tamu.php");
?>