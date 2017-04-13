<?php include "header.php"; ?>
<?php include "menu_akun.php"; ?>
<?php include "koneksi.php"; ?>

<?php if (isset($_SESSION['nis'])) {
    if ($_SESSION['status'] == 'guru') {
?>
<link type="text/css" rel="stylesheet" href="js/jquery-ui.min.css"/>
<script src="js/jQuery-2.1.3.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/jquery-ui-1.10.4.min.js"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
     <script type="text/javascript">
$(function () {
         $('#tgl_lahir').datepicker({
         dateFormat: "dd MM yy",
         yearRange:'-50:-15',
         changeMonth: true,
         changeYear: true
         });
        });
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
   			minlength: "NIP Minimal 4 Karakter",
			maxlength: "NIP Maximal 20 Karakter"
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
	}
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
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- konten teks -->
    <div id="content">
<!-- isiiiii -->
<h2> Ubah Akun Guru</h2>

<?php

$sql = "SELECT * from guru where nip= '".$_GET['nip'] ."'";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);


?>

<form action="proses_ubah_guru.php" class="jNice" id="validasi" name="validasi" method="POST">
  	<table>
  	    <tr valign="top">
  		<td width="200" type="text">NIP  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input type="text" size="30" name="nip" value="<?php echo $data['nip']; ?>"/></td>
        
	  	</tr>
		<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
 	    <tr valign="top">
  	 	<td>Nama </td>
  		<td width="18">:&nbsp;</td>
 		<td ><input name="nama" size="30"  class="text-medium" id="nama" value="<?php echo $data['nama']; ?>" /></td>
        
  		</tr>
		<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
	    <tr valign="top">
   		<td>Jenis Kelamin </td>
   		<td width="18">:&nbsp;</td>
  		<td>
            <?php
           
			if ($data['j_kelamin']=='Laki-laki'){
      		echo "<input type=radio name='j_kelamin' value='Laki-laki' checked>Laki-laki  
                  <input type=radio name='j_kelamin' value='Perempuan'> Perempuan";
				  
    		}
    		else{
      		echo "<input type=radio name='j_kelamin' value='Laki-laki'>Laki-laki  
                  <input type=radio name='j_kelamin' value='Perempuan' checked>Perempuan";
    		}
		   
		   ?>
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
  		<td width="173"><input name="tmp_lahir" size="30" class="text-medium" id="tmp_lahir" value="<?php echo $data['tmp_lahir']; ?>"/></td>

  		</tr>
		<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
 	    <tr valign="top">
  	 	<td>Tanggal Lahir</td>
  		<td width="18">:&nbsp;</td>
 		<td ><input type="text" name="tgl_lahir" id="tgl_lahir" size="30" value="<?php echo $data['tgl_lahir'] ?>" /></td>
   
        </tr>
		<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
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
		</td>
 	</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
        <tr valign="top">
  		<td width="108" type="text">Jabatan  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input name="jabatan" size="30" class="text-medium" id="jabatan" value="<?php echo $data['jabatan']; ?>"/></td>

  		</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
        <td>Pelajaran</td>
  		<td width="18">:&nbsp;</td>
  		<td>
        
        <select name="mapel">
		<?php

		$sql="SELECT * FROM mata_pelajaran";
		$hasil_query=mysql_query($sql);

		while($baris=mysql_fetch_object($hasil_query))
		{
		echo '<option value="'.$baris->id_mapel.'">'.$baris->id_mapel."</option>";
		}
		?>
		</select>
		</td>
        </tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
   		<tr valign="top">
   		<td>Alamat </td>
  		<td width="18">:&nbsp;</td>
   		<td><textarea name="alamat" /><?php echo $data['alamat']; ?></textarea></td>

  		</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
   		<tr valign="top">
   		<td>No.Telepon </td>
  		<td width="18">:&nbsp;</td>
   		<td><textarea name="tlp" /><?php echo $data['tlp']; ?></textarea></td>

  		</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
   		<tr valign="top">
   		<td>E-mail </td>
  		<td width="18">:&nbsp;</td>
   		<td><textarea name="email" /><?php echo $data['email']; ?></textarea></td>

  		</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>		
		<tr valign="top">
   		<td>Password</td>
  		<td width="18">:&nbsp;</td>
  		<td><input name="password" class="text-long" size="30" id="password" value=""/>
        
  		</td>
		</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>		
  	</table>
  <label for="textfield"></label>
  	<tr>
	<input type="submit" value="Simpan" />
   	<a href="akun_guru.php"><input type="button" value="Batal"></a>
	<input type="reset" value="Reset" />
	</tr>
</form>
<?php } ?>
<?php } ?>
	<!-- akhir isiiiii -->
</div> 
<?php include "right.php"; ?>  
</div>	
</div>  
<?php include "footer.php"; ?>