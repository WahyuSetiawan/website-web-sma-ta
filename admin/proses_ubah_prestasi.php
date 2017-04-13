<?php 
	include "koneksi.php";
	include "config/fungsi_seo.php";
	include "config/fungsi_thumb.php";

	$lokasi_file = $_FILES['fupload']['tmp_name'];
	$nama_file   = $_FILES['fupload']['name'];
	$tipe_file   = $_FILES['fupload']['type']; 
	$acak        = rand(000000,999999);
	$nama_file_unik = $acak.$nama_file;
	
	// Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysql_query("UPDATE profil_sekolah SET entry_profil= '".$_POST['editor1']."' WHERE id_profil = '3' ");
  echo "<script>window.alert('Prestasi berhasil diubah . . .');
        window.location=('tampil_prestasi.php')</script>";
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('tampil_prestasi.php')</script>";
    }
    else{
    UploadProfil_Sekolah($nama_file_unik);
    mysql_query("UPDATE profil_sekolah SET entry_profil= '".$_POST['editor1']."', gbr = '$nama_file_unik' WHERE id_profil = '3'");

echo "<script>window.alert('Prestasi berhasil diubah . . .');
        window.location=('tampil_prestasi.php')</script>";
  }
}
?>