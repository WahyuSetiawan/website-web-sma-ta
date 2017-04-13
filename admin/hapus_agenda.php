<?php
include("koneksi.php");
$sql = "DELETE FROM agenda WHERE id_agenda = '".$_GET['id_agenda']."'";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
header("location:tampil_agenda.php");
?>