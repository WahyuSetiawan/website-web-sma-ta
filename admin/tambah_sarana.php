<?php
include "koneksi.php";
?>

<body>
    <?php
    include "all_profil.php";
    ?>

    <div id="content" class="box">
        <h2>Tambah Sarana dan Prasarana</h2>
        <form action="proses_tambah_sarana.php" method="POST" enctype='multipart/form-data'>
            <table>
                <tr valign="top">
                    <td width="200" type="text">Nama Sarana  </td>
                    <td width="18">:&nbsp;</td>
                    <td width="173"><input name="nama_sarana" size="30" class="text-medium" id="nama_sarana"></td>
                </tr>

                <tr valign="top">
                    <td>Gambar Sarana</td>
                    <td width="18">:&nbsp;</td>
                    <td> <input type=file name='fupload' size=15></td>    
                </tr> 
                <tr valign="top">
                    <td width="200" type="text">Deskripsi Sarana  </td>
                    <td width="18">:&nbsp;</td>
            </table>
            <table>
                <tr valign="top">

                <textarea id="editor1" name="editor1"</textarea></textarea>
                </tr>

            </table>
            <label for="textfield"></label>
            <tr>
            <input type="submit" value="Simpan" />
            <a href="tampil_sarana.php"><input type="button" value="Batal"></a>
            <input type="reset" value="Reset" />
            </tr>
        </form>
        <script type="text/javascript">

            if (typeof CKEDITOR == 'undefined')
            {
                document.write(
                        'CKEditor not found');
            }
            else
            {
                var editor = CKEDITOR.replace('editor1');


                CKFinder.setupCKEditor(editor, '');


            }
        </script>

        <?php
        if (isset($_POST['posting'])) {
            $q = mysql_query("insert into sarana (`entry_sarana`) values('" . $_POST['editor1'] . "') ") or die(mysql_error());

            if ($q) {
                echo "<script>alert('Sarana berhasil di tambah'); window.location = 'tampil_sarana.php'</script>";
            }
        }
        ?>

    </div>
<?php
include "footer.php";
?>