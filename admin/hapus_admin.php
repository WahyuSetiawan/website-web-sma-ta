<?php
include("koneksi.php");
$sql = "DELETE FROM admin WHERE id_admin = '".$_GET['id_admin']."'";
mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
header("location:admin.php");
?>