<?php
include("koneksi.php");
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$tmp_lahir=$_POST['tmp_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$agama=$_POST['agama'];
$alamat=$_POST['alamat'];
$tlp=$_POST['tlp'];
$nama_ortu=$_POST['nama_ortu'];
$alamat_ortu=$_POST['alamat_ortu'];
$tlp_ortu=$_POST['tlp_ortu'];
$pdd_ortu=$_POST['pdd_ortu'];
$pekerjaan=$_POST['pekerjaan'];
$penghasilan=$_POST['penghasilan'];
$nama_sekolah=$_POST['nama_sekolah'];
$status_sekolah=$_POST['status_sekolah'];
$alamat_sekolah=$_POST['alamat_sekolah'];
$nun=$_POST['nun'];

//insert data ke table siswa
$sql="INSERT INTO data_casis (nis,nama,tmp_lahir,tgl_lahir,agama,alamat,tlp,nama_ortu,alamat_ortu,tlp_ortu,pdd_ortu,pekerjaan,penghasilan,nama_sekolah,status_sekolah,alamat_sekolah,nun)
VALUES('$nis',
'$nama',
'$tmp_lahir',
'$tgl_lahir',
'$agama',
'$alamat',
'$tlp',
'$nama_ortu',
'$alamat_ortu',
'$tlp_ortu',
'$pdd_ortu',
'$pekerjaan',
'$penghasilan',
'$nama_sekolah',
'$status_sekolah',
'$alamat_sekolah',
'$nun'
)";
$query = mysql_query($sql);
//jika $query gagal
if(!$query){
echo 'sql gagal,periksa kembali!'.mysql_error();
echo "<br>";
echo "<span class=link><a href=tampil_data_casis.php>ke data casis</a></span>";
}
//jika berhasil
else{
echo "<script>alert('Berhasil Mendaftar. Silahkan datang ke Sekolah untuk melengkapi Administrasi !'); window.location = 'tampil_data_casis.php'</script>";

echo "<span class=link><a href=tampil_data_casis.php>ke form tampil data </a></span>";
}

?>