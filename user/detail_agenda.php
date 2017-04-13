<?php include "header.php"; ?>
<?php include "menu_info.php"; ?>
<?php include "koneksi.php"; ?>

<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- konten teks -->
    <div id="content">
<!-- isiiiii -->
<h2>Agenda</h2>
<?php
$sql = "SELECT * FROM agenda WHERE id_agenda= ".$_GET['id_agenda'];
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
?>

<form action="index.php" class="jNice" id="validasi" name="validasi" method="post">
<table>
<tbody>
<tr><th colspan=3><strong><h4 class=judul><?php echo $data['tema'] ?></h4></strong></th></tr>
<tr><td><b><span class=posting>Tanggal</b> </td><td> : <span class=posting><?php echo $data['tanggal'] ?></td></tr>
<tr><td><b><span class=posting>Acara</b> </td><td> : <span class=posting><?php echo $data['acara'] ?></td></tr>
<tr><td><b><span class=posting>Tempat</b> </td><td> : <span class=posting><?php echo $data['tempat'] ?> </td></tr>
<tr><td><b><span class=posting>Pukul</b> </td><td> : <span class=posting><?php echo $data['pukul'] ?> </td></tr></tbody></table><hr color=#CCC noshade=noshade />

<!-- akhir isiiiii -->
</div> 
<?php include "right.php"; ?>  
</div>	
</div>  
<?php include "footer.php"; ?>