<?php

include "koneksi.php";

echo '<pre>';
var_dump($_POST);
var_dump($_FILES);
echo '</pre>';
if (isset($_POST['submit']) && isset($_POST['nip'])) {
// Input download
    $lokasi_file = $_FILES['fupload']['tmp_name'];
    $nama_file = $_FILES['fupload']['name'];

    // Apabila ada file yang diupload
    if (isset($lokasi_file)) {
        $file_extension = strtolower(substr(strrchr($nama_file, "."), 1));

        switch ($file_extension) {
            case "pdf": $ctype = "application/pdf";
                break;
            case "exe": $ctype = "application/octet-stream";
                break;
            case "zip": $ctype = "application/zip";
                break;
            case "rar": $ctype = "application/rar";
                break;
            case "doc": $ctype = "application/msword";
                break;
            case "xls": $ctype = "application/vnd.ms-excel";
                break;
            case "ppt": $ctype = "application/vnd.ms-powerpoint";
                break;
            case "gif": $ctype = "image/gif";
                break;
            case "png": $ctype = "image/png";
                break;
            case "jpeg":
            case "jpg": $ctype = "image/jpg";
                break;
            default: $ctype = "application/proses";
        }

        if ($file_extension == 'php') {
            echo "<script>window.alert('Upload Gagal, Format file tidak di dukung !');
        window.location=('akun_guru.php')</script>";
        } else {
            move_uploaded_file($_FILES["fupload"]["tmp_name"], 'files/' . $nama_file);
			//UploadFileWithDiferentDir($nama_file,'../admin/file/');
						$sql = "INSERT INTO materi(
                                    file_materi,
									nip,
									tahun_ajaran,
									kelas) 
                            VALUES("."
                                    '" . $nama_file . "',
                    				'" . $_POST['nip'] . "',
									'" . $_POST['tahun_ajaran'] . "',
                                    '" . $_POST['kelas'] . "')";
							 mysql_query($sql) or exit($sql.mysql_error());
            header('location:materi.php');
        }
    } else {
        /* mysql_query("INSERT INTO download(judul,
          tgl_posting,id_pelajaran)
          VALUES('$_POST[judul]',
          '$tgl_sekarang',"
          . $_POST['pelajaran'] . ")");
          //header('location:tampil_download.php'); */
        header('location:materi.php');
    }
}
?>