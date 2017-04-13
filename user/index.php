<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Education Time
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>.::SMA INSTITUT INDONESIA "SLEMAN"::.</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="layout/scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />

<?php include "header.php"; ?>
<?php include "menu_home.php"; ?>
<div class="wrapper row3">
  <div id="featured_slide"> 
    <!-- ####################################################################################################### -->
    <ol>
      <li>
        <h2><span>INFO</span></h2>
        <div><img src="images/demo/aa.png" alt="" /></div>
      </li>
      <li>
        <h2><span>BEASISWA</span></h2>
        <div><img src="images/demo/bea.png" alt="" /></div>
      </li>
      <li>
        <h2><span>Laboratorium</span></h2>
        <div><img src="images/demo/lab.png" alt="" /></div>
      </li>
      <li>
        <h2><span>Belajar Mengajar</span></h2>
        <div><img src="images/demo/belajar.png" alt="" /></div>
      </li>
      <li>
        <h2><span>Outdor Activity</span></h2>
        <div><img src="images/demo/out.png" alt="" /></div>
      </li>
    </ol>
    <!-- ####################################################################################################### --> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2 class="title">Agenda Sekolah</h2>
        <div id="hpage_quicklinks">
		<ul class="clear">
		<?php
$sql = "
SELECT * from agenda
order by id_agenda desc limit 6";
$hasil = mysql_query($sql) or exit("Error query: <b>" . $sql . "</b>.");
while ($data = mysql_fetch_assoc($hasil)) {
?>

            <li><a href="detail_agenda.php?id_agenda=<?php echo $data['id_agenda']; ?>"><?php echo $data['tema'];?></a></li>
<?php
}
?>
          </ul>
        </div>
        <h2 class="title">Gallery Foto Terbaru</h2>
        <div id="hpage_gallery">
		<ul class="clear">		
          <?php
$sql = "SELECT id_foto,gbr_foto,jdl_foto,jdl_album from foto f, album a where ((f.id_album=a.id_album)) order by id_foto desc limit 2";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
<!-- isi -->
<li><a href="#"><?php echo "<img src='../admin/photos/$data[gbr_foto]' width=100 height=100 alt=''>" ?></a></li>
<li class="last"><a href="#"><?php echo "<img src='../admin/photos/$data[gbr_foto]' width=100 height=100 alt=''>" ?></a></li>
<?php
}
?>
</ul>
        </div>
      </div>
      <!-- ############### -->
      <div class="fl_right">
        <h2 class="title">Berita Terbaru</h2>
        <div id="hpage_latestnews">
          <ul>
            <?php
$sql = "
SELECT * from berita
order by id_berita desc limit 6";
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
        </div>
       
      </div>
    </div>
    <!-- ####################################################################################################### --> 
  </div>
</div>


<!-- ####################################################################################################### -->
<?php include "footer.php"; ?>
</body>
</html>


<?php include "koneksi.php"; ?>