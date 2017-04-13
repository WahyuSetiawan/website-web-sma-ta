<?php include "header.php"; ?>
<?php include "menu_materi.php"; ?>
<?php include "koneksi.php"; ?>

<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- konten teks -->
    <div id="content">
<!-- isiiiii -->

<h2>Semua Materi</h2>
    <form method="post" action="#" id="sAkedemik">
        <select name="akademik" onchange="document.getElementById('sAkedemik').submit()">
            <option>-</option>
            <?php
            $akad = mysql_query('select * from thn_ajaran');
            while ($ak = mysql_fetch_assoc($akad)) {
                ?>
                <option value=<?php
                echo '"' . $ak['id_thn_ajaran'] . '"';
                if (isset($_POST['akademik'])) {
                    if ($ak['id_thn_ajaran'] == $_POST['akademik']) {
                        echo ' selected="true"';
                    }
                }
                ?>><?php echo $ak['thn_ajaran'] ?></option>
                    <?php } ?>
        </select>
		
		<select name="kelas" onchange="document.getElementById('sAkedemik').submit()">
            <option>-</option>
            <?php
            $akad = mysql_query('select * from kelas');
            while ($ak = mysql_fetch_assoc($akad)) {
                ?>
                <option value=<?php
                echo '"' . $ak['id_kelas'] . '"';
                if (isset($_POST['kelas'])) {
                    if ($ak['id_kelas'] == $_POST['kelas']) {
                        echo ' selected="true"';
                    }
                }
                ?>><?php echo $ak['nama'] ?></option>
                    <?php } ?>
        </select>
		
		<select name="mapel" onchange="document.getElementById('sAkedemik').submit()">
            <option>-</option>
            <?php
            $akad = mysql_query('select * from mata_pelajaran');
            while ($ak = mysql_fetch_assoc($akad)) {
                ?>
                <option value=<?php
                echo '"' . $ak['id_mapel'] . '"';
                if (isset($_POST['mapel'])) {
                    if ($ak['id_mapel'] == $_POST['mapel']) {
                        echo ' selected="true"';
                    }
                }
                ?>><?php echo $ak['id_mapel'] ?></option>
                    <?php } ?>
        </select>
    </form>
    </table>	
	
	
<?php
echo "<div id='content'><div id='content-detail'>";
echo '<div id="widget-title"></div><ul> '; 

if (isset($_POST['akademik']) && isset($_POST['kelas']) && isset($_POST['mapel'])) {
$i = 0;
            $download = mysql_query("SELECT * FROM materi join guru on guru.nip = materi.nip where tahun_ajaran = ".
			$_POST['akademik']." and kelas = '".$_POST['kelas']."' and guru.mapel = '".
			$_POST['mapel']."'") or exit(mysql_error());
            while ($d = mysql_fetch_array($download)) {
                ?>
				<li>
                <td><a onclick="<?php
                    if (!isset($_SESSION['nis'])) {
                        echo "alert('Anda harus login !')";
                    }
                    ?>" 
                       href="<?php 
					   if (isset($_SESSION['nis'])) {
                        echo "download.php?file=" . $d['file_materi'];
                    }
                    ?>">
                        <?php echo $d['file_materi'] 
						?>
                    </a>
                </td>
				</li>
                    <?php
                    $i++;
                    if (($i % 2) == 0) {
                        echo '</tr><tr>';
                    }
                } 
}
/*$download = mysql_query("SELECT * FROM materi ORDER BY id_materi DESC LIMIT 100");
while($d=mysql_fetch_array($download)){
echo '<li><a class="ease" href="download.php?file='.$d['file_materi'].'">'.$d['file_materi'].'</a></li>';
			}*/
echo '</ul>';	

echo "</div></div>";
?>

<!-- akhir isiiiii -->
</div> 
<?php include "right_materi.php"; ?>  
</div>	
</div>  
<?php include "footer.php"; ?>