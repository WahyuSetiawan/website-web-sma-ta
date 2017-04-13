<?php

include("koneksi.php");

if (isset($_POST['submit'])) {
    if ($_FILES['fupload']['name'] == "") {
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';
$nis=$_POST['nis'];
$password = md5($_POST['nis']);
$nama=$_POST['nama'];
$tahun_ajaran=$_POST['tahun_ajaran'];
$id_jurusan=$_POST['id_jurusan'];
$j_kelamin=$_POST['j_kelamin'];
$tmp_lahir=$_POST['tmp_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$agama=$_POST['agama'];
$alamat=$_POST['alamat'];
$tlp=$_POST['tlp'];
$email=$_POST['email'];
$nama_ayah=$_POST['nama_ayah'];
$nama_ibu=$_POST['nama_ibu'];
$pekerjaan_ayah=$_POST['pekerjaan_ayah'];
$pekerjaan_ibu=$_POST['pekerjaan_ibu'];
$alamat_ortu=$_POST['alamat_ortu'];
$tlp_ortu=$_POST['tlp_ortu'];
$penghasilan_ortu=$_POST['penghasilan_ortu'];
$asal_sekolah=$_POST['asal_sekolah'];
$alamat_asal_sekolah=$_POST['alamat_asal_sekolah'];
$tahun_lulus=$_POST['tahun_lulus'];
$nilai_un=$_POST['nilai_un'];

//insert data ke table siswa
/*$sql="INSERT INTO siswa (
nis,
nama,
tahun_ajaran,
id_jurusan,
j_kelamin,
tmp_lahir,
tgl_lahir,
agama,
alamat,
tlp,
email,
nama_ayah,
nama_ibu,
pekerjaan_ayah,
pekerjaan_ibu,
alamat_ortu,
tlp_ortu,
penghasilan_ortu,
asal_sekolah,
password,
alamat_asal_sekolah,
tahun_lulus,
nilai_un)
VALUES('$nis',
'$nama',
'$tahun_ajaran',
'$id_jurusan',
'$j_kelamin',
'$tmp_lahir',
'$tgl_lahir',
'$agama',
'$alamat',
'$tlp',
'$email',
'$nama_ayah',
'$nama_ibu',
'$pekerjaan_ayah',
'$pekerjaan_ibu',
'$alamat_ortu',
'$tlp_ortu',
'$penghasilan_ortu',
'$asal_sekolah',
'$password',
'$alamat_asal_sekolah',
'$tahun_lulus',
'$nilai_un'
)";*/

$sql = "INSERT INTO `web_sma_ta`.`siswa` 
(`nis`, `password`, `tahun_ajaran`, `id_jurusan`, `nama`, 
`foto`, `j_kelamin`, `tmp_lahir`, `tgl_lahir`, `agama`, 
`alamat`, `tlp`, `email`, `nama_ayah`, `nama_ibu`, 
`pekerjaan_ayah`, `pekerjaan_ibu`, `alamat_ortu`, 
`tlp_ortu`, `penghasilan_ortu`, `asal_sekolah`, 
`alamat_asal_sekolah`, `tahun_lulus`, `nilai_un`) 
VALUES ('".$nis."', '".md5($nis)."', '".$tahun_ajaran."', '".$id_jurusan."', '".$nama."',
 '', '".$j_kelamin."', '".$tmp_lahir."', '".$tgl_lahir."', '".$agama."', '".$alamat."', 
 '".$tlp."', '".$email."', '".$nama_ayah."', '".$nama_ibu."',
 '".$pekerjaan_ayah."', '".$pekerjaan_ibu."', '".$alamat_ortu."', '".$tlp_ortu."', '".$penghasilan_ortu."', '".$asal_sekolah."', '".$alamat_asal_sekolah."', '".$tahun_lulus."', '".$nilai_un."');";
        echo $sql;
       // $query = mysql_query($sql) or exit(mysql_error());
//jika $query gagal

        if (!$query) {
            echo 'sql gagal,periksa kembali!' . mysql_error();
            echo "<br>";
            //echo "<span class=link><a href=tampil_data_siswa.php>ke form tampil data </a></span>";
        }
//jika berhasil
        else {
           // header("location:tampil_data_siswa.php");
            echo "Data telah tesimpan";
            //echo "<span class=link><a href=tampil_data_siswa.php>ke form tampil data </a></span>";
        }
    } else {
        $target_dir = "foto_siswa/";
        $target_name_save = $_POST['nis'] . '.jpeg';
        $target_dir_save = "foto_siswa/" . $_POST['nis'] . '.jpeg';
        $target_file = $target_dir . $_POST['nis'] . '.jpeg';
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
$nis=$_POST['nis'];
$nama=$_POST['nama'];
$tahun_ajaran=$_POST['tahun_ajaran'];
$id_jurusan=$_POST['id_jurusan'];
$j_kelamin=$_POST['j_kelamin'];
$tmp_lahir=$_POST['tmp_lahir'];
$tgl_lahir=$_POST['tgl_lahir'];
$agama=$_POST['agama'];
$alamat=$_POST['alamat'];
$tlp=$_POST['tlp'];
$email=$_POST['email'];
$nama_ayah=$_POST['nama_ayah'];
$nama_ibu=$_POST['nama_ibu'];
$pekerjaan_ayah=$_POST['pekerjaan_ayah'];
$pekerjaan_ibu=$_POST['pekerjaan_ibu'];
$alamat_ortu=$_POST['alamat_ortu'];
$tlp_ortu=$_POST['tlp_ortu'];
$penghasilan_ortu=$_POST['penghasilan_ortu'];
$asal_sekolah=$_POST['asal_sekolah'];
$alamat_asal_sekolah=$_POST['alamat_asal_sekolah'];
$tahun_lulus=$_POST['tahun_lulus'];
$nilai_un=$_POST['nilai_un'];
/*
//insert data ke table siswa
$sql="INSERT INTO siswa (nis,nama,foto,tahun_ajaran,id_jurusan,j_kelamin,tmp_lahir,tgl_lahir,agama,alamat,tlp,email,nama_ayah,nama_ibu,pekerjaan_ayah,pekerjaan_ibu,alamat_ortu,tlp_ortu,penghasilan_ortu,asal_sekolah,alamat_asal_sekolah,tahun_lulus,nilai_un)
VALUES('$nis',
'$nama',
'$target_name_save',
'$tahun_ajaran',
'$id_jurusan',
'$j_kelamin',
'$tmp_lahir',
'$tgl_lahir',
'$agama',
'$alamat',
'$tlp',
'$email',
'$nama_ayah',
'$nama_ibu',
'$pekerjaan_ayah',
'$pekerjaan_ibu',
'$alamat_ortu',
'$tlp_ortu',
'$penghasilan_ortu',
'$asal_sekolah',
'$alamat_asal_sekolah',
'$tahun_lulus',
'$nilai_un'
)";*/


$sql = "INSERT INTO `web_sma_ta`.`siswa` 
(`nis`, `password`, `tahun_ajaran`, `id_jurusan`, `nama`, 
`foto`, `j_kelamin`, `tmp_lahir`, `tgl_lahir`, `agama`, 
`alamat`, `tlp`, `email`, `nama_ayah`, `nama_ibu`, 
`pekerjaan_ayah`, `pekerjaan_ibu`, `alamat_ortu`, 
`tlp_ortu`, `penghasilan_ortu`, `asal_sekolah`, 
`alamat_asal_sekolah`, `tahun_lulus`, `nilai_un`) 
VALUES ('".$nis."', '".md5($nis)."', '".$tahun_ajaran."', '".$id_jurusan."', '".$nama."',
 '".$target_name_save."', '".$j_kelamin."', '".$tmp_lahir."', '".$tgl_lahir."', '".$agama."', '".$alamat."', 
 '".$tlp."', '".$email."', '".$nama_ayah."', '".$nama_ibu."',
 '".$pekerjaan_ayah."', '".$pekerjaan_ibu."', '".$alamat_ortu."', '".$tlp_ortu."', '".$penghasilan_ortu."', '".$asal_sekolah."', '".$alamat_asal_sekolah."', '".$tahun_lulus."', '".$nilai_un."');";
            echo $sql;
            $query = mysql_query($sql) or exit(mysql_error());
//jika $query gagal

            if (!$query) {
                echo 'sql gagal,periksa kembali!' . mysql_error();
                echo "<br>";
                echo "<span class=link><a href=tampil_data_siswa.php>ke form tampil data </a></span>";
            }
//jika berhasil
            else {
               	header("location:tampil_data_siswa.php");
                echo "Data telah tesimpan";
                echo "<span class=link><a href=tampil_data_siswa.php>ke form tampil data </a></span>";
            }
            $query = mysql_query($sql);
//jika $query gagal

            if (!$query) {
                echo 'sql gagal,periksa kembali!' . mysql_error();
                echo "<br>";
                echo "<span class=link><a href=tampil_data_siswa.php>ke form tampil data </a></span>";
            }
//jika berhasil
            else {
                header("location:tampil_data_siswa.php");
                echo "Data telah tesimpan";
                echo "<span class=link><a href=tampil_data_siswa.php>ke form tampil data </a></span>";
            }
        }
    }
}
?>