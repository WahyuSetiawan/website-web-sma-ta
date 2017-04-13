<?php

include "koneksi.php";

echo '<pre>';
var_dump($_POST);
var_dump($_FILES);
echo '</pre>';
if (isset($_POST['masuk']) && isset($_POST['guru'])) {
// Input download
    $lokasi_file = $_FILES['file']['tmp_name'];
    $nama_file = $_FILES['file']['name'];

    // Apabila ada gambar yang diupload
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
            echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload tidak bertipe *.PHP');
        window.location=('tampil_download.php')</script>";
        } else {
			
            move_uploaded_file($_FILES["file"]["tmp_name"], 'file/' . $nama_file);
			$sql = "INSERT INTO materi(id_materi,
                                    file_materi,
                                    nip,
                                    kelas,
									tahun_ajaran) 
                            VALUES("."'" . $_POST['id'] . "',
                                   '" . $nama_file . "','"
                    . $_POST['guru'] . "','"
					. $_POST['kelas'] . "','"
                    . $_POST['tahun_ajaran'] . "')";
            mysql_query($sql) or exit($sql);
            header('location:tampil_elearning.php');
        }
    } else {
		
        /* mysql_query("INSERT INTO download(judul,
          tgl_posting,id_pelajaran)
          VALUES('$_POST[judul]',
          '$tgl_sekarang',"
          . $_POST['pelajaran'] . ")");
          //header('location:tampil_download.php'); */
        header('location:tampil_elearning.php');
    }
}
?>