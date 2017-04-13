<?php include "header.php"; ?>
<?php include "menu_info.php"; ?>
<?php include "koneksi.php"; ?>

<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- konten teks -->
    <div id="content">
<!-- isiiiii -->
<h2>Berita</h2>
<?php
$sql = "SELECT * FROM berita WHERE id_berita= ".$_GET['id_berita'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
?>

<form action="index.php" class="jNice" id="validasi" name="validasi" method="post">
<p>
<strong><h4 class=judul><?php echo $data['judul_berita'] ?></h4></strong></p>
<b><span class=posting></b><span class=posting><?php echo $data['isi'] ?><hr color=#CCC noshade=noshade /></span></span></span>
<!-- akhir isiiiii -->
</div> 
<?php include "right.php"; ?>  
</div>	
</div>  
<?php include "footer.php"; ?>