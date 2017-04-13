<?php

include "koneksi.php";
include "config/fungsi_seo.php";
include "config/fungsi_thumb.php";

echo '<pre>';
var_dump($_POST);
echo '</pre>';


$lokasi_file = $_FILES['fupload']['tmp_name'];
$nama_file = $_FILES['fupload']['name'];
$tipe_file = $_FILES['fupload']['type'];
$acak = rand(000000, 999999);
$nama_file_unik = $acak . $nama_file;

// Apabila ada gambar yang diupload

if (!empty($lokasi_file)) {
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/pjpeg") {
        echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');
        window.location=('tambah_sarana.php')</script>";
    } else {
        UploadSarana($nama_file_unik);
        $sql = "INSERT INTO sarana(nama_sarana,gbr_sarana,entry_sarana) VALUES('".$_POST['nama_sarana']."','".$nama_file_unik."','".$_POST['editor1']."')";
        mysql_query($sql);
        echo $sql;
        echo "<script>window.alert('Sarana dan Prasarana berhasil ditambahkan . . .');
        window.location=('tampil_sarana.php')</script>";
        //header('location:tampil_sarana.php');
    }
} else {
    mysql_query("INSERT INTO sarana(nama_sarana, entry_sarana) VALUES('".$_POST['nama_sarana']."','".$_POST['editor1']."')");
    echo "<script>window.alert('Sarana dan Prasarana berhasil ditambahkan . . .');
        window.location=('tampil_sarana.php')</script>";
}
?>