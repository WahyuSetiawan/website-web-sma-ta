<?php
include("koneksi.php");
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];

//insert data ke table admin
$sql="INSERT INTO admin (nama,username,password)
VALUES('$nama',
'$username',
'$password'
)";
$query = mysql_query($sql);
//jika $query gagal
if(!$query){
echo 'sql gagal,,periksa kembali!'.mysql_error();
echo "<br>";
echo "<span class=link><a href=admin.php>ke form tampil data </a></span>";
}
//jika berhasil
else{
header("location:admin.php");
echo "Data telah tersimpan !!!";
echo "<span class=link><a href=admin.php>ke form tampil data </a></span>";
}

?>