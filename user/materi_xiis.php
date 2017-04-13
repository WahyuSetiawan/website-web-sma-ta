<?php include "header.php"; ?>
<?php include "menu_materi.php"; ?>
<?php include "koneksi.php"; ?>

<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- konten teks -->
    <div id="content">
<!-- isiiiii -->

<h2>Materi Kelas XII-IPA</h2>
<?php
echo "<div id='content'><div id='content-detail'>";
echo '<div id="widget-title"></div><ul> '; 
$i = 0;
            $download = mysql_query("SELECT * FROM materi  where kelas= 'XII-IPS' ORDER BY id_materi DESC LIMIT 100");
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
/*$download = mysql_query("SELECT * FROM materi where kelas= 'XII-IPS' ORDER BY id_materi DESC LIMIT 100");
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