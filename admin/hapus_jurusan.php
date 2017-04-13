<?php
include("koneksi.php");
$sql = "DELETE FROM jurusan WHERE id_jurusan = '".$_GET['id_jurusan']."'";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
header("location:tampil_jurusan.php");
?>