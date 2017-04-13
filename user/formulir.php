<?php include "header.php"; ?>
<?php include "menu_psb.php"; ?>
<?php include "koneksi.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Education Time
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Education Time | Style Demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
    <link type="text/css" rel="stylesheet" href="js/jquery-ui.min.css"/>
	<script src="js/jQuery-2.1.3.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.validate.js" type="text/javascript"></script>
	<script type="text/javascript">
	 $(function () {
            $('#tgl_lahir').datepicker({
         dateFormat: "dd MM yy",
         yearRange:'-25:-5',
         changeMonth: true,
         changeYear: true
         });
       
            $(".validasi").validate({
                rules: {
                    nis: {
                        required: true,
                        minlength: 4,
                        maxlength: 10
                    }, nama: {
                        required: true
                    }
                },
                messages: {
                    nis: {
                        required: "NISN kosong",
                        minlength: "NISN Minimal 4 Karakter",
        				maxlength: "NISN Maximal 10 Karakter"
                    }, nama: {
                        required: "Nama Siswa kosong"
                    }
                }
            });
        });
    </script>
<form action="proses_tambah_casis.php" class="jNice validasi" name="validasi" method="post" >
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- konten teks -->
    <div id="content">
<!-- isiiiii -->
<h2>Formulir Pendaftaran</h2>

        <div id="content" class="box">
            <h3>Silahkan Isi Form Pendaftaran di Bawah Ini</h3>
            <table>
                <tr><td colspan="2">
                        <fieldset>
                            <h5>IDENTITAS CALON SISWA</h5>
                            <table>
                                <tr><td width="200">NISN</td><td>: <input type="text" id="nis" name="nis" size="40" /></td></tr>
                                <tr><td>Nama Lengkap</td><td>: <input type="text" name="nama" size="40"></td></tr>
                                <tr><td>Tempat Lahir</td><td>: <input type="text" name="tmp_lahir" size="40"></td></tr>
                                <tr><td>Tanggal Lahir</td><td>: <input type="text" name="tgl_lahir" size="40" id="tgl_lahir"></td></tr>
                                <tr><td>Agama</td><td>:
                                        <select name="agama">
                                            <?php
                                            $sql = "SELECT * FROM agama";
                                            $hasil_query = mysql_query($sql);

                                            while ($baris = mysql_fetch_object($hasil_query)) {
                                                echo "<option value=$baris->id_agama>$baris->nama_agama</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                <tr><td>Alamat</td><td>: <input type="text" name="alamat" size="40"></td></tr>
                                <tr><td>No. Telp</td><td>: <input type="text" name="tlp" size="40"></td></tr>
                            </table>
                        </fieldset>
                    </td></tr>

                <tr><td colspan="2">
                        <fieldset>
                            <h5>IDENTITAS ORANG TUA / WALI</h5>
                            <table>
                                <tr><td width="200">Nama Orang Tua / Wali</td><td>: <input type="text" name="nama_ortu" size="40"></td></tr>
                                <tr><td>Alamat Orang Tua</td><td>: <input type="text" name="alamat_ortu" size="40"></td></tr>
                                <tr><td>No. Telp</td><td>: <input type="text" name="tlp_ortu" size="40"></td></tr>
                                <tr><td>Pendidikan Terakhir</td><td>: <input type="text" name="pdd_ortu" size="40"></td></tr>
                                <tr><td>Pekerjaan</td><td>: <input type="text" name="pekerjaan" size="40"></td></tr>
                                <tr><td>Penghasilan Orang Tua</td><td>: <input type="text" name="penghasilan" size="40"></td></tr>
                            </table>
                        </fieldset>
                    </td></tr>

                <tr><td colspan="2">
                        <fieldset>
                            <h5>SEKOLAH ASAL</h5>
                            <table>
                                <tr><td width="200">Nama Sekolah</td><td>: <input type="text" name="nama_sekolah" size="40"></td></tr>
                                <tr><td>Status (sekolah)</td><td>: <input type="radio" name="status_sekolah" value="Negeri"/>Negeri <input type="radio" name="status_sekolah" value="Swasta"/>Swasta</td></tr>
								
                                <tr><td>Alamat Sekolah</td><td>: <input type="text" name="alamat_sekolah" size="40"></td></tr>
                            </table>
                        </fieldset>
                    </td></tr>

                <tr><td colspan="2">
                        <fieldset>
                            <table>
                                <tr><td width="200">NUN</td><td>: <input type="text" name="nun" size="40"></td></tr>
                            </table>
                        </fieldset>
                    </td></tr>
            </table>

<tr valign="top">
<tr><td></td><td><input type="submit" value="Daftar" onclick="valid()" class="button"/></td></tr>
</tr>
<!-- akhir isiiiii -->
</div> 
</div> 
</form>
<?php include "right.php"; ?>  
</div>	
</div>  

<?php include "footer.php"; ?>