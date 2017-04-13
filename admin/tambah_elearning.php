<?php include './header.php';
?>
<div class="box" id="content">
    <h1>Tambah Materi</h1>
</div>
<hr class="noscreen">
<div class="box" id="content">
    <form action="proses_tambah_materi.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label>file materi</label></td>
                <td><input type="file" name="file"></td>
            </tr>
            <tr>
                <td><label>kelas</label></td>
                <td>
                    <select name="kelas">
                        <?php
                        $sql = 'select * from kelas';
                        $data_mentah = mysql_query($sql) or exit(mysql_error());

                        while ($data_jadi = mysql_fetch_assoc($data_mentah)) {
                            ?>
                            <option value="<?php echo $data_jadi['id_kelas'] ?>"><?php echo $data_jadi['nama'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
			<tr>
                <td><label>Tahun Ajaran</label></td>
                <td>
                    <select name="thn_ajaran">
                        <?php
                        $sql = 'select * from thn_ajaran';
                        $data_mentah = mysql_query($sql) or exit(mysql_error());

                        while ($data_jadi = mysql_fetch_assoc($data_mentah)) {
                            ?>
                            <option value="<?php echo $data_jadi['id_thn_ajaran'] ?>"><?php echo $data_jadi['thn_ajaran'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label>guru</label></td>
                <td>
                    <select name="guru">
                        <?php
                        $sql = 'select * from guru';
                        $data_mentah = mysql_query($sql) or exit(mysql_error());

                        while ($data_jadi = mysql_fetch_assoc($data_mentah)) {
                            ?>
                            <option value="<?php echo $data_jadi['nip'] ?>"><?php echo $data_jadi['nama'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
			
        </table>
        <input type="submit" name="masuk">
    </form>
</div>
<?php include './footer.php'; ?>