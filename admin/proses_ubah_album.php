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
    mysql_query("UPDATE album SET jdl_album = '$_POST[jdl_album]' WHERE id_album = '$_POST[id_album]' ");
  echo "<script>window.alert('Galeri berhasil diubah . . .');
        window.location=('tampil_album.php')</script>";
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('tampil_album.php')</script>";
    }
    else{
    UploadAlbum($nama_file_unik);
    mysql_query("UPDATE album SET jdl_album  = '$_POST[jdl_album]', gbr_album = '$nama_file_unik'
				WHERE id_album = '$_POST[id_album]'");
echo "<script>window.alert('Galeri berhasil diubah . . .');
        window.location=('tampil_album.php')</script>";
  }
}
?>