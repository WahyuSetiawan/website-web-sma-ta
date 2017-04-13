<?php
include("koneksi.php");
$sql = "DELETE FROM materi WHERE id_materi = '".$_GET['id_materi']."'";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
header("location:tampil_elearning.php");
?>