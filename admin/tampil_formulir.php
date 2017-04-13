<?php
include "koneksi.php";
?>
<?php
include "all_psb.php";
?>
<link type="text/css" rel="stylesheet" href="js/jquery-ui.min.css"/>
<script src="js/jQuery-2.1.3.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        $('#tgl_lahir').datepicker({
            dateFormat: "dd MM yy",
            yearRange: '-25:-5',
            changeMonth: true,
            changeYear: true
        });
    });
    /*
     * 
     * @returns {undefined}
     * 
     * required – Makes the element required.
     remote – Requests a resource to check the element for validity.
     minlength – Makes the element require a given minimum length.
     maxlength – Makes the element require a given maxmimum length.
     rangelength – Makes the element require a given value range.
     min – Makes the element require a given minimum.
     max – Makes the element require a given maximum.
     range – Makes the element require a given value range.
     email – Makes the element require a valid email
     url – Makes the element require a valid url
     date – Makes the element require a date.
     dateISO – Makes the element require an ISO date.
     number – Makes the element require a decimal number.
     digits – Makes the element require digits only.
     creditcard – Makes the element require a credit card number.
     equalTo – Requires the element to be the same as another one
     */
    function valid() {
        $(".validasiform").validate({
            rules: {
                nis: {
                    required: true,
                    minlength: 4,
                    maxlength: 10
                }, nama: {
                    required: true
                }, tlp: {
                    number: true
                },nun:{
                    required:true,
                    number:true
                }
            },
            messages: {
                nis: {
                    required: "NISN kosong",
                    minlength: "NISN Minimal 4 Karakter",
                    maxlength: "NISN Maximal 10 Karakter"
                }, nama: {
                    required: "Nama Siswa kosong"
                }, tlp: {
                    number: "harus angka"
                },nun:{
                    required:"dibutuhkan",
                    number:"harus digit"
                }
            }
        });
    }
</script>
<form action="proses_tambah_data_casis.php" class="jNice validasiform" name="validasi" method="post" >
    <div id="content" class="box">
        <h2>Data Calon Siswa Baru</h2>
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
                            <tr><td>No. Telp</td><td>: <input type="text" name="tlp" size="40" id="telp"></td></tr>
                        </table>
                    </fieldset>
                </td></tr>

            <tr><td colspan="2">
                    <fieldset>
                        <h5>IDENTITAS ORANG TUA WALI</h5>
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
                            <tr><td>Status (sekolah)</td><td>: <input type="text" name="status_sekolah" size="40"></td></tr>
                            <tr><td>Alamat Sekolah</td><td>: <input type="text" name="alamat_sekolah" size="40"></td></tr>
                        </table>
                    </fieldset>
                </td></tr>

            <tr><td colspan="2">
                    <fieldset>
                        <table>
                            <tr><td width="200">NUN</td><td>: <input type="text" name="nun" size="40" id="nun"></td></tr>
                        </table>
                    </fieldset>
                </td></tr>
        </table>
</form>
<tr valign="top">
<tr><td></td><td><input type="submit" value="Daftar" onclick="valid()" class="button"/></td></tr>

</fieldset>
</form>
<?php include "footer.php"; ?>
