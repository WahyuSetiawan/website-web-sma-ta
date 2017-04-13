<?php
include("koneksi.php");
if (isset($_POST['submit'])) {
    if ($_FILES['fupload']['name'] == "") {
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$j_kelamin=$_POST['j_kelamin'];
$tmp_lahir=$_POST['tmp_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$bln_lahir=$_POST['bln_lahir'];
$th_lahir=$_POST['th_lahir'];
$agama=$_POST['agama'];
$jabatan=$_POST['jabatan'];
$alamat=$_POST['alamat'];
$tlp=$_POST['tlp'];
$email=$_POST['email'];
$tgl_lahir="$tgl_lahir $bln_lahir $th_lahir";


//insert data ke table staff
$sql="INSERT INTO staff (nik,nama,j_kelamin,tmp_lahir,tgl_lahir,agama,jabatan,alamat,tlp,email)
VALUES('$nik',
'$nama',
'$j_kelamin',
'$tmp_lahir',
'$tgl_lahir',
'$agama',
'$jabatan',
'$alamat',
'$tlp',
'$email'
)";
echo $sql;
        $query = mysql_query($sql) or exit(mysql_error());
//jika $query gagal

        if (!$query) {
            echo 'sql gagal,periksa kembali!' . mysql_error();
            echo "<br>";
            echo "<span class=link><a href=tampil_data_staff.php>ke form tampil data </a></span>";
        }
//jika berhasil
        else {
            header("location:tampil_data_staff.php");
            echo "Data telah tesimpan";
            echo "<span class=link><a href=tampil_data_staff.php>ke form tampil data </a></span>";
        }
    } else {
        $target_dir = "foto_staff/";
        $target_name_save = $_POST['nik'] . '.jpeg';
        $target_dir_save = "foto_staff/" . $_POST['nik'] . '.jpeg';
        $target_file = $target_dir . $_POST['nik'] . '.jpeg';
        $uploadOK = 1;
        $imageFileType = pathinfo($_FILES['fupload']['name'], PATHINFO_EXTENSION);

        echo '<pre>';
        var_dump($_FILES);
        var_dump($_POST);

        if (isset($_POST['submit'])) {
            
        }

        if (file_exists($target_file)) {
            $uploadOK = 0;
        }

        if ($_FILES["fupload"]["size"] > 500000) {
            $uploadOK = 0;
        }

        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }


        if ($uploadOK = 0) {
            echo "sorry, file no upload";
        } else {
            move_uploaded_file($_FILES["fupload"]["tmp_name"], $target_file);

            echo '<pre>';
            var_dump($_POST);
            echo '</pre>';
$nik=$_POST['nik'];
$nama=$_POST['nama'];
$j_kelamin=$_POST['j_kelamin'];
$tmp_lahir=$_POST['tmp_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$bln_lahir=$_POST['bln_lahir'];
$th_lahir=$_POST['th_lahir'];
$agama=$_POST['agama'];
$jabatan=$_POST['jabatan'];
$alamat=$_POST['alamat'];
$tlp=$_POST['tlp'];
$email=$_POST['email'];
$tgl_lahir="$tgl_lahir $bln_lahir $th_lahir";

//insert data ke table staff
$sql="INSERT INTO staff (nik,nama,foto,j_kelamin,tmp_lahir,tgl_lahir,agama,jabatan,alamat,tlp,email)
VALUES('$nik',
'$nama',
'$target_name_save',
'$j_kelamin',
'$tmp_lahir',
'$tgl_lahir',
'$agama',
'$jabatan',
'$alamat',
'$tlp',
'$email'
)";

echo $sql;
            $query = mysql_query($sql) or exit(mysql_error());
//jika $query gagal

            if (!$query) {
                echo 'sql gagal,periksa kembali!' . mysql_error();
                echo "<br>";
                echo "<span class=link><a href=tampil_data_staff.php>ke form tampil data </a></span>";
            }
//jika berhasil
            else {
                header("location:tampil_data_staff.php");
                echo "Data telah tesimpan";
                echo "<span class=link><a href=tampil_data_staff.php>ke form tampil data </a></span>";
            }
            $query = mysql_query($sql);
//jika $query gagal

            if (!$query) {
                echo 'sql gagal,periksa kembali!' . mysql_error();
                echo "<br>";
                echo "<span class=link><a href=tampil_data_staff.php>ke form tampil data </a></span>";
            }
//jika berhasil
            else {
                header("location:tampil_data_staff.php");
                echo "Data telah tesimpan";
                echo "<span class=link><a href=tampil_data_staff.php>ke form tampil data </a></span>";
            }
        }
    }
}
?>