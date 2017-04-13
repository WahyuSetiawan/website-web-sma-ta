<?php 
	include "koneksi.php";
?>
<body>
<?php include "all_gurudansiswa.php"?>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jquery.ui.datepicker-id.js"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
     <script type="text/javascript">

				$().ready(function() {
				$("#tgl_lahir").datepicker({
				dateFormat: "dd MM yy",
				yearRange:'-25:+2',
				changeMonth: true,
				changeYear: true
				});
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

<div id="content" class="box">
<h2>Ubah Data Staff</h2>
<div id="content" class="box">
<?php

$sql = "SELECT nik,nama,j_kelamin,tmp_lahir,tgl_lahir,agama,jabatan,alamat,tlp,email from staff where nik= ".$_GET['nik'];
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);


?>

<form action="proses_ubah_data_staff.php" class="jNice" id="validasi" name="validasi" method="POST">
  	<table>
  	    <tr valign="top">
  		<td width="200" type="text">NIK  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input type="text" size="30" name="nik" value="<?php echo $data['nik']; ?>"/></td>
        
        </tr>
 	    <tr valign="top">
  	 	<td width="200" type="text">Nama Staff  </td>
  		<td width="18">:&nbsp;</td>
        <td width="173"><input name="nama" value="<?php echo $data['nama']; ?>" size="30" class="text-medium" id="nama"></td>
  		
        <tr valign="top">
   		<td height="61">Jenis Kelamin </td>
   		<td width="18">:&nbsp;</td>
  		<td>
            <?php
           
			if ($data['j_kelamin']=='Laki-laki'){
      		echo "<input type=radio name='j_kelamin' value='Laki-laki' checked>Laki-laki  
                  <input type=radio name='j_kelamin' value='Perempuan'> Perempuan</td>";
    		}
    		else{
      		echo "<input type=radio name='j_kelamin' value='Laki-laki'>Laki-laki  
                  <input type=radio name='j_kelamin' value='Perempuan' checked>Perempuan</td>";
    		}
		   
		   ?>
        </td>
        
        <tr valign="top">
  		<td width="108" type="text">Tempat Lahir  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input name="tmp_lahir" value="<?php echo $data['tmp_lahir']; ?>" size="30" class="text-medium" id="tmp_lahir"></td>
        
  		</tr>
 	     <tr valign="top">
  	 	<td>Tanggal Lahir</td>
  		<td width="18">:&nbsp;</td>
 		<td ><input type="text" name="tgl_lahir" id="tgl_lahir" size="30" value="<?php echo $data['tgl_lahir'] ?>"/></td>
        

        
        </tr>
        <tr valign="top">
  		<td>Agama</td>
 		<td width="18">:&nbsp;</td>
   		<td>
  		
        
        <select name="agama">
		<?php

		$sql="SELECT * FROM agama";
		$hasil_query=mysql_query($sql);

		while($baris=mysql_fetch_object($hasil_query))
		{
		echo "<option value=$baris->id_agama>$baris->nama_agama</option>";
		}
		?>
		</select>
        
        <tr valign="top">         
        <td>Jabatan</td>
  		<td width="18">:&nbsp;</td>
  		<td><input name="jabatan" value="<?php echo $data['jabatan']; ?>" class="text-long" size="30" id="jabatan">          
 		</td>
  		</tr>
        
        <tr valign="top">
   		<td>Alamat</td>
  		<td width="18">:&nbsp;</td>
   		<td><textarea name="alamat" /><?php echo $data['alamat']; ?></textarea></td>
        
  	    </tr>
        
        <tr valign="top">
   		<td>No. Telepon</td>
  		<td width="18">:&nbsp;</td>
  		<td><input name="tlp" class="text-long" size="30" id="tlp" value="<?php echo $data['tlp']; ?>"/>
        
        </td>
        </tr>
   		<tr valign="top">
   		<td>E-mail</td>
  		<td width="18">:&nbsp;</td>
        <td><input name="email" class="text-long" size="30" id="email onChange=validasiEmail()" value="<?php echo $data['email']; ?>"/>
  		</tr>
  	</table>
  <label for="textfield"></label>
  	<tr>
	<input type="submit" value="Simpan" />
    <a href="tampil_data_staff.php"><input type="button" value="Batal"></a>
	<input type="reset" value="Reset" />
	</tr>
</tr>
</form>
</tr>
<?php include "footer.php"; ?>