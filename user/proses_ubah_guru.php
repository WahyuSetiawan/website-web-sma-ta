<?php
include("koneksi.php");
var_dump($_POST);
$sql="UPDATE guru SET ";
$sql.="
nama='".$_POST['nama']."',
password='".md5($_POST['password'])."',
j_kelamin='".$_POST['j_kelamin']."',
tmp_lahir='".$_POST['tmp_lahir']."',
tgl_lahir='".$_POST['tgl_lahir']."',
agama='".$_POST['agama']."',
jabatan='".$_POST['jabatan']."',
mapel='".$_POST['mapel']."',
alamat='".$_POST['alamat']."',
tlp='".$_POST['tlp']."',
email='".$_POST['email']."' ";

$sql.="WHERE nip = '".$_POST['nip']."'";

$query = mysql_query($sql) or exit($sql . mysql_error());
//jika $query gagal
if(!$query){
echo 'sql gagal,periksa kembali!'.mysql_error();
echo "<br>";
echo "<span class=link><a href=akun_guru.php>ke form tampil data </a></span>";
}
//jika berhasil
else{
header("location:akun_guru.php");
echo "Data telah tersimpan";
echo "<span class=link><a href=akun_guru.php>ke form tampil data </a></span>";
}

?>