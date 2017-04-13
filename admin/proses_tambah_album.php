<?php 
	include "koneksi.php";
	include "config/fungsi_seo.php";
	include "config/fungsi_thumb.php";

	$lokasi_file = $_FILES['fupload']['tmp_name'];
	$nama_file   = $_FILES['fupload']['name'];
	$tipe_file   = $_FILES['fupload']['type']; 
	$acak        = rand(000000,999999);
	$nama_file_unik = $acak.$nama_file;

  // Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('tambah_album.php')</script>";
    }
    else{
		UploadAlbum($nama_file_unik);
    mysql_query("INSERT INTO album(jdl_album,gbr_album)
				VALUES('$_POST[jdl_album]','$nama_file_unik')");
	echo "<script>window.alert('Galeri berhasil ditambahkan . . .');
        window.location=('tampil_album.php')</script>";
	header('location:tampil_album.php');
  }
  }
  else{
   mysql_query("INSERT INTO album(jdl_album)
				VALUES('$_POST[jdl_album]')");
	echo "<script>window.alert('Galeri berhasil ditambahkan . . .');
        window.location=('tampil_album.php')</script>";
  }
?>