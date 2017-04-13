<?php
include("koneksi.php");
$sql = "DELETE FROM sarana WHERE id_sarana = '".$_GET['id_sarana']."'";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
header("location:tampil_sarana.php");
?>
