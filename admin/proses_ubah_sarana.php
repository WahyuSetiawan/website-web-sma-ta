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
    mysql_query("UPDATE sarana SET nama_sarana,entry_sarana = '$_POST[nama_sarana]','$_POST[entry_sarana]'WHERE id_sarana = '$_POST[id_sarana]' ");
  echo "<script>window.alert('Galeri berhasil diubah . . .');
        window.location=('tampil_sarana.php')</script>";
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('tampil_sarana.php')</script>";
    }
    else{
    UploadSarana($nama_file_unik);
    mysql_query("UPDATE sarana SET nama_sarana  = '$_POST[nama_sarana]', gbr_sarana = '$nama_file_unik', entry_sarana  = '$_POST[entry_sarana]'
				WHERE id_sarana = '$_POST[id_sarana]'");
echo "<script>window.alert('Sarana dan Prasarana berhasil diubah . . .');
        window.location=('tampil_sarana.php')</script>";
  }
}
?>