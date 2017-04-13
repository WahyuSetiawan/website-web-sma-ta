<?php
include("koneksi.php");
$sql="UPDATE guru SET ";
$sql.="
nama='".$_POST['nama']."',
j_kelamin='".$_POST['j_kelamin']."',
tmp_lahir='".$_POST['tmp_lahir']."',
tgl_lahir='".$_POST['tgl_lahir']."',
agama='".$_POST['agama']."',
jabatan='".$_POST['jabatan']."',
mapel='".$_POST['mapel']."',
alamat='".$_POST['alamat']."',
tlp='".$_POST['tlp']."',
email='".$_POST['email']."' ";

$sql.="WHERE nip = '".$_POST['nip']."' ";

$query = mysql_query($sql);
//jika $query gagal
if(!$query){
echo 'sql gagal,periksa kembali!'.mysql_error();
echo "<br>";
echo "<span class=link><a href=tampil_data_guru.php>ke form tampil data </a></span>";
}
//jika berhasil
else{
header("location:tampil_data_guru.php");
echo "Data telah tersimpan";
echo "<span class=link><a href=tampil_data_guru.php>ke form tampil data </a></span>";
}

?>