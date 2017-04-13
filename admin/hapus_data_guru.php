<?php
include("koneksi.php");
$sql = "DELETE FROM guru WHERE nip = '".$_GET['nip']."'";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
header("location:tampil_data_guru.php");
?>