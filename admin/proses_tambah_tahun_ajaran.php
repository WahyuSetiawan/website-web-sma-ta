<?php
include("koneksi.php");
$id_thn_ajaran=$_POST['id_thn_ajaran'];
$thn_ajaran=$_POST['thn_ajaran'];
$status=$_POST['status'];

//insert data ke table siswa
$sql="INSERT INTO thn_ajaran (id_thn_ajaran,thn_ajaran,status)
VALUES('$id_thn_ajaran','$thn_ajaran','$status')";
$query = mysql_query($sql);

//jika $query gagal
if(!$query){
echo 'sql gagal,periksa kembali!'.mysql_error();
echo "<br>";
echo "<span class=link><a href=tampil_thn_jur.php>ke form tampil data </a></span>";
}

//jika berhasil
else{
header("location:tampil_tahun_ajaran.php");
echo "Data telah tesimpan";
echo "<span class=link><a href=tampil_tahun_ajaran.php>ke form tampil data </a></span>";
}

?>