<?php
	include ("koneksi.php");
$sql="UPDATE data_casis SET ";
$sql.="nis='".$_POST['nis']."',nama='".$_POST['nama']."',status='".$_POST['status']."' ";
$sql.="WHERE nis=".$_POST['nis'];

$query = mysql_query($sql);
//jika $query gagal
if(!$query){
echo 'sql gagal,periksa kembali!'.mysql_error();
echo "<br>";
echo "<span class=link><a href=tampil_data_casis.php>ke form tampil data </a></span>";
}
//jika berhasil
else{
header("location:tampil_data_casis.php");
echo "Data telah tesimpan";
echo "<span class=link><a href=tampil_data_casis.php>ke form tampil data </a></span>";
}

?>