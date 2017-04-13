<?php
include("koneksi.php");
$sql="UPDATE siswa SET ";
$sql.="nama='".$_POST['nama']."',
tahun_ajaran='".$_POST['tahun_ajaran']."',
id_jurusan='".$_POST['id_jurusan']."',
j_kelamin='".$_POST['j_kelamin']."',
tmp_lahir='".$_POST['tmp_lahir']."',
tgl_lahir='".$_POST['tgl_lahir']."',
agama='".$_POST['agama']."',
alamat='".$_POST['alamat']."',
tlp='".$_POST['tlp']."',
email='".$_POST['email']."',
nama_ayah='".$_POST['nama_ayah']."',
nama_ibu='".$_POST['nama_ibu']."',
pekerjaan_ayah='".$_POST['pekerjaan_ayah']."',
pekerjaan_ibu='".$_POST['pekerjaan_ibu']."',
alamat_ortu='".$_POST['alamat_ortu']."',
tlp_ortu='".$_POST['tlp_ortu']."',
penghasilan_ortu='".$_POST['penghasilan_ortu']."',
asal_sekolah='".$_POST['asal_sekolah']."',
alamat_asal_sekolah='".$_POST['alamat_asal_sekolah']."',
tahun_lulus='".$_POST['tahun_lulus']."',
nilai_un='".$_POST['nilai_un']."' ";
$sql.="WHERE nis = ".$_POST['nis'];

$query = mysql_query($sql);
//jika $query gagal
if(!$query){
echo 'sql gagal,periksa kembali!'.mysql_error();
echo "<br>";
echo "<span class=link><a href=tampil_data_siswa.php>ke form tampil data </a></span>";
}
//jika berhasil
else{
header("location:tampil_data_siswa.php");
echo "Data telah tersimpan";
echo "<span class=link><a href=tampil_data_siswa.php>ke form tampil data </a></span>";
}

?>