<?php
include("koneksi.php");
$sql = "DELETE FROM staff WHERE nik = '".$_GET['nik']."'";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
header("location:tampil_data_staff.php");
?>
