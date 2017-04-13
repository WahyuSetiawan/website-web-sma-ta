<?php
include("koneksi.php");
$nama=$_POST['nama'];
$email=$_POST['email'];
$subjek=$_POST['subjek'];
$komentar=$_POST['komentar'];

//insert data ke table buku_tamu
$sql="INSERT INTO buku_tamu (nama,subjek,email,komentar)
VALUES(
'$nama',
'$subjek',
'$email',
'$komentar')";
$query = mysql_query($sql);
//jika $query gagal
if(!$query){
echo 'sql gagal,,periksa kembali!'.mysql_error();
echo "<br>";
echo "<span class=link><a href=tampil_buku_tamu.php>ke form tampil data </a></span>";
}
//jika berhasil
else{
echo "<script>alert('Pesan berhasil terkirim . . .'); window.location = 'tampil_buku_tamu.php'</script>";
header("location:tampil_buku_tamu.php");
echo "Data telah tersimpan";

}

?>
