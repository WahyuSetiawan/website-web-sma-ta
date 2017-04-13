<?php
	include ("koneksi.php");
$sql="UPDATE thn_ajaran SET ";
$sql.="id_thn_ajaran='".$_POST['id_thn_ajaran']."',thn_ajaran='".$_POST['thn_ajaran']."',status='".$_POST['status']."' ";
$sql.="WHERE id_thn_ajaran=".$_POST['id_thn_ajaran'];

$query = mysql_query($sql);
//jika $query gagal
if(!$query){
echo 'sql gagal,periksa kembali!'.mysql_error();
echo "<br>";
echo "<span class=link><a href=tampil_tahun_ajaran.php>ke form tampil data </a></span>";
}
//jika berhasil
else{
header("location:tampil_tahun_ajaran.php");
echo "Data telah tesimpan";
echo "<span class=link><a href=tampil_tahun_ajaran.php>ke form tampil data </a></span>";
}

?>