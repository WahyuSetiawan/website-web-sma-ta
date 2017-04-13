<?php 
	include "koneksi.php";
?>

<body>
<?php include "all_gurudansiswa.php"?>
<div id="content" class="box">

<script src="js/jquery.js" type="text/javascript"></script>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
<div id="content" class="box">
<h2>Detail Agenda</h2>

<?php

$sql = "SELECT *
FROM agenda where id_agenda= '".$_GET['id_agenda']."'";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);

?>

<form action="tampil_agenda.php" class="jNice" method="POST">
  <table>
  	    
 	    <tr valign="top">
  	 	<td>Tanggal </td>
  		<td width="18">:&nbsp;</td>
 		<td ><?php echo $data['tanggal']; ?></td>
  		
        <tr valign="top">
   		<td height="32">Tema </td>
   		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['tema'];?></td>
        <tr valign="top">
  		<td width="108" type="text">Acara  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['acara']; ?></td>
 	    
        <tr valign="top">
  	 	<td>Tempat</td>
  		<td width="18">:&nbsp;</td>
 		<td>
        <?php
        	echo $data['tempat'];
		?>
        
        </td>

		<tr valign="top">
  		<td>Pukul</td>
 		<td width="18">:&nbsp;</td>
   		<td width="173"><?php echo $data['pukul']; ?></td>
  		</tr>		
  	</table>
  <label for="textfield"></label>
  	<tr>
	<input type="submit" value="Kembali" />
	</tr>
</form>
</div>
</div>
<?php include "footer.php"; ?> 