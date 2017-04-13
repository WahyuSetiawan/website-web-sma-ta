<?php
include("koneksi.php");
$sql = "DELETE FROM album WHERE id_album = '".$_GET['id_album']."'";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
header("location:tampil_album.php");
?>