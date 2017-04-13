<?php
include("koneksi.php");
$id_mapel=$_POST['id_mapel'];
$jurusan=$_POST['jurusan'];

//insert data ke table mapel
$sql="INSERT INTO mata_pelajaran (id_mapel,jurusan)
VALUES('$id_mapel','$jurusan')";
$query = mysql_query($sql);

//jika $query gagal
if(!$query){
echo 'sql gagal,periksa kembali!'.mysql_error();
echo "<br>";
echo "<span class=link><a href=tampil_mapel.php>ke form tampil data </a></span>";
}
//jika berhasil
else{
header("location:tampil_mapel.php");
echo "Data telah tersimpan";
echo "<span class=link><a href=tampil_mapel.php>ke form tampil data </a></span>";
}

?>