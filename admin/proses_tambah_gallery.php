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
        window.location=('tambah_gallery.php')</script>";
    }
    else{
		UploadGallery($nama_file_unik);
    mysql_query("INSERT INTO foto(jdl_foto,id_album,keterangan,gbr_foto)
				VALUES('$_POST[jdl_foto]','$_POST[id_album]','$_POST[keterangan]','$nama_file_unik')");
	echo "<script>window.alert('Galeri berhasil ditambahkan . . .');
        window.location=('tampil_gallery.php')</script>";
  }
  }
  else{
   mysql_query("INSERT INTO album(jdl_foto,id_album,keterangan,)
				VALUES('$_POST[jdl_foto]','$_POST[id_album]','$_POST[keterangan]')");
	echo "<script>window.alert('Galeri berhasil ditambahkan . . .');
        window.location=('tampil_gallery.php')</script>";
  }
?>