<?php 
	include "koneksi.php";
?>

<body>
<?php include "all_gurudansiswa.php"?>
<div id="content" class="box">

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<link rel="stylesheet" href="style.css" type="text/css" />
     <script type="text/javascript">

             	$().ready(function() {
            	$("#validasi").validate({
        	 rules: {
     			nik:{
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
   		nik:
 		 {
   		required: "NIK kosong",
   		minlength: "Masukkan NIK yang valid (min 4 karakter)",
		maxlength: "Masukkan NIK yang valid (max 20 karakter)"
   		},
		nama:
 		 {
   		required: "Nama Staff kosong",
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

</head>
<body>
<div id="content" class="box">
<h2>Detail Data Staff</h2>

<?php

$sql = "SELECT s.nik,s.nama,s.j_kelamin,s.tmp_lahir,s.tgl_lahir,s.agama,s.jabatan,s.alamat,s.tlp,s.email
FROM staff s where nik=".$_GET['nik'];
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);


?>

<form action="tampil_data_staff.php" class="jNice" id="validasi" name="validasi" method="POST">
  <table>
  	    <tr valign="top">
  		<td width="200" type="text">NIK  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nik']; ?></td>
</tr>
 	    <tr valign="top">
  	 	<td>Nama Staff </td>
  		<td width="18">:&nbsp;</td>
 		<td ><?php echo $data['nama']; ?></td>
  		
        <tr valign="top">
   		<td height="32">Jenis Kelamin </td>
   		<td width="18">:&nbsp;</td>
  		<td>
        <?php
        	echo $data['j_kelamin'];
		?>
        </td>
        <tr valign="top">
  		<td width="108" type="text">Tempat Lahir  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tmp_lahir']; ?></td>
 	    
        <tr valign="top">
  	 	<td>Tanggal Lahir</td>
  		<td width="18">:&nbsp;</td>
 		<td ><?php echo $data['tgl_lahir'];?></td>

		<tr valign="top">
  		<td>Agama</td>
 		<td width="18">:&nbsp;</td>
   		<td width="173"><?php echo $data['agama']; ?></td>
  				
        <tr valign="top">
  		<td width="108" type="text">Jabatan  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['jabatan']; ?></td>
        
       <tr valign="top">
  		<td width="108" type="text">Alamat  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['alamat']; ?></td>
        
        <tr valign="top">
  		<td width="108" type="text">No Telepon  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tlp']; ?></td>
   		
        <tr valign="top">
  		<td width="108" type="text">Email  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['email']; ?></td>
  	</table>
  <label for="textfield"></label>
  	<tr>
	<input type="submit" value="Kembali" />
	</tr>
</form>
</div>
</div>
<?php include "footer.php"; ?> 