<?php include "header.php"; ?>
<?php include "menu_info.php"; ?>
<?php include "koneksi.php"; ?>


<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- konten teks -->
    <div id="content">
<!-- isiiiii -->
<h2>Berita</h2>
        <div id="hpage_latestnews">
          <ul>
            <?php
$sql = "
SELECT * from berita
order by id_berita desc";
$hasil = mysql_query($sql) or exit("Error query: <b>" . $sql . "</b>.");
while ($data = mysql_fetch_assoc($hasil)) {
?>

            <li><a href="detail_berita.php?id_berita=<?php echo $data['id_berita']; ?>"><?php echo $data['judul_berita'];?></a></li>
			<table>
			<tr class="dark">
            <td></td>
</tr></table>
<?php
}
?>
</ul>
<!-- akhir isiiiii -->
</div> 
</div>
<?php include "right.php"; ?>  
</div>	
</div>  
<?php include "footer.php"; ?>