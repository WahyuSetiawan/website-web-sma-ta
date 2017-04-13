<?php
	include ("koneksi.php");
$sql="UPDATE jurusan SET ";
$sql.="id_jurusan='".$_POST['id_jurusan']."',nama_jurusan='".$_POST['nama_jurusan']."' ";
$sql.="WHERE id_jurusan=".$_POST['id_jurusan'];

$query = mysql_query($sql);

//jika $query gagal
if(!$query){
echo 'sql gagal,periksa kembali!'.mysql_error();
echo "<br>";
echo "<span class=link><a href=tampil_jurusan.php>ke form tampil data </a></span>";
}

//jika berhasil
else{
header("location:tampil_jurusan.php");
echo "Data telah tesimpan";
echo "<span class=link><a href=tampil_jurusan.php>ke form tampil data </a></span>";
}

?>