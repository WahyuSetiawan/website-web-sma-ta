<?php include "header.php"; ?>
<?php include "menu_guru.php"; ?>
<?php include "koneksi.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<script src="../admin/js/jquery.js" type="text/javascript"></script>
<script src="../admin/js/jquery.validate.js" type="text/javascript"></script>
<link rel="stylesheet" href="style.css" type="text/css" />
     <script type="text/javascript">

             	$().ready(function() {
            	$("#validasi").validate({
        	 rules: {
     			nip:{
        		required: true,
          		minlength: 4,
				maxlength: 20
                },
     			nama:{
        		required: true,
                },
     			j_kelamin:{
   				required: true
   				},
  				email:{
    			required: true,
  				email: true
  				}
 					},
   	messages: {
   		nip:
 		 {
   		required: "NIP kosong",
   		minlength: "Masukkan NIP yang valid (min 4 karakter)",
		maxlength: "Masukkan NIP yang valid (max 20 karakter)"
   		},
		nama:
 		 {
   		required: "Nama Guru kosong",
   		},
  		j_kelamin:
   		 {
  		required: "Jenis Kelamin belum dipilih"
  		},
  		email: "email tidak valid"
  			}
  	}); 
});
</script>
<script>
   	function validasiEmail()
  	{
   	var email = document.getElementById('email').value ;
  	var regex =/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
  	if(email == "" || regex.test(email)==false)
  		{
  		alert("email tidak valid");
  		return false;
   	}
  	}
</script>
<!--
Template Name: Education Time
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Education Time | Style Demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- konten teks -->
    <div id="content">
<!-- isiiiii -->
<h2>Detail Guru</h2>

<?php

$sql = "SELECT g.nip, g.nama,g.j_kelamin,g.tmp_lahir,g.tgl_lahir,g.agama,g.jabatan,g.mapel,g.alamat,g.tlp,g.email
FROM guru g where nip= '".$_GET['nip']."'";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);

?>

<form action="guru.php" class="jNice" id="validasi" name="validasi" method="POST">
  <table>
  	    <tr valign="top">
  		<td width="200" type="text">NIP  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nip']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
 	    <tr valign="top">
  	 	<td>Nama Guru </td>
  		<td width="18">:&nbsp;</td>
 		<td ><?php echo $data['nama']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>  		
        <tr valign="top">
   		<td width="32">Jenis Kelamin </td>
   		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['j_kelamin'];?>
        </td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
        <tr valign="top">
  		<td width="108" type="text">Tempat Lahir  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tmp_lahir']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
        <tr valign="top">
  	 	<td>Tanggal Lahir</td>
  		<td width="18">:&nbsp;</td>
 		<td>
        <?php
        	echo $data['tgl_lahir'];
		?>
        </td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>

		<tr valign="top">
  		<td>Agama</td>
 		<td width="18">:&nbsp;</td>
   		<td width="173"><?php echo $data['agama']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr> 				
        <tr valign="top">
  		<td width="108" type="text">Jabatan  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['jabatan']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>        
        <tr valign="top">
  		<td width="108" type="text">Pelajaran  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['mapel']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>        
       <tr valign="top">
  		<td width="108" type="text">Alamat  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['alamat']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>        
        <tr valign="top">
  		<td width="108" type="text">No Telepon  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tlp']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>   		
        <tr valign="top">
  		<td width="108" type="text">Email  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['email']; ?></td>
</tr>		
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
  	</table>
	
	<!-- akhir isiiiii -->
</div> 
<?php include "right.php"; ?>  
</div>	
</div>  
<?php include "footer.php"; ?>