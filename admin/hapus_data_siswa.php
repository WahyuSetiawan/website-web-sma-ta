<?php
include("koneksi.php");
$sql = "DELETE FROM siswa WHERE nis = '".$_GET['nis']."'";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
header("location:tampil_data_siswa.php");
?>