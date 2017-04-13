<?php
include("koneksi.php");
$sql = "DELETE FROM gallery WHERE id_gallery = '".$_GET['id_gallery']."'";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
header("location:tampil_gallery.php");
?>