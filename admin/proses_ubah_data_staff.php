<?php
include("koneksi.php");
$sql="UPDATE staff SET ";
$sql.="
nama='".$_POST['nama']."',
j_kelamin='".$_POST['j_kelamin']."',
tmp_lahir='".$_POST['tmp_lahir']."',
tgl_lahir='".$_POST['tgl_lahir']."',
agama='".$_POST['agama']."',
jabatan='".$_POST['jabatan']."',
alamat='".$_POST['alamat']."',
tlp='".$_POST['tlp']."',
email='".$_POST['email']."' ";
$tgl_lahir=$tgl_lahir.'-'.$bln_lahir.'-'.$th_lahir;

$sql.="WHERE nik = ".$_POST['nik'];

$query = mysql_query($sql);
//jika $query gagal
if(!$query){
echo 'sql gagal,periksa kembali!'.mysql_error();
echo "<br>";
echo "<span class=link><a href=tampil_data_staff.php>ke form tampil data </a></span>";
}
//jika berhasil
else{
header("location:tampil_data_staff.php");
echo "Data telah tersimpan";
echo "<span class=link><a href=tampil_data_staff.php>ke form tampil data </a></span>";
}

?>