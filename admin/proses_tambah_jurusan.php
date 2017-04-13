<?php
include("koneksi.php");
$id_jurusan=$_POST['id_jurusan'];
$nama_jurusan=$_POST['nama_jurusan'];

//insert data ke table jurusan
$sql="INSERT INTO jurusan (id_jurusan,nama_jurusan)
VALUES('$id_jurusan','$nama_jurusan')";
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