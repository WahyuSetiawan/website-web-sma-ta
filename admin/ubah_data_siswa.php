<?php 
	include "koneksi.php";
?>
<body>
<?php include "all_gurudansiswa.php"?>
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
         yearRange:'-25:+2',
         changeMonth: true,
         changeYear: true
         });
        });
        $("#validasi").validate({
        	 rules: {
     			nis:{
        		required: true,
          		minlength: 4,
				maxlength: 10
                },
     			nama:{
        		required: true,
                },
				tahun_ajaran:{
        		required: true
                },
				id_kelas:{
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
   			nis:
 			{
   			required: "NISN kosong",
   			minlength: "NISN Minimal 4 Karakter",
			maxlength: "NISN Maximal 10 Karakter"
   			},
			nama:
 			{
   			required: "Nama Siswa kosong",
   			},
			tahun_ajaran:
 			{
   			required: "Tahun Ajaran kosong",
   			},
			id_kelas:
 			{
   			required: "Kelas belum dipilih",
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

</head>

<div id="content" class="box">
<h2>Ubah Data Siswa</h2>
<div id="content" class="box">

<?php

$sql = "SELECT nis,nama,tmp_lahir,tgl_lahir,j_kelamin,alamat,tlp,email,nama_ayah,nama_ibu,pekerjaan_ayah,pekerjaan_ibu,alamat_ortu,tlp_ortu,penghasilan_ortu,asal_sekolah,alamat_asal_sekolah,tahun_lulus,nilai_un from siswa where nis= ".$_GET['nis'];
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);


?>

<form action="proses_ubah_data_siswa.php" class="jNice" id="validasi" name="validasi" method="POST">
  	<table>
  	    <tr valign="top">
  		<td width="200" type="text">NISN  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input type="text" size="30" name="nis" value="<?php echo $data['nis']; ?>"/></td>
        
        <td width="200" type="text">Nama Ayah</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input name="nama_ayah" size="30" class="text-medium" id="nama_ayah" value="<?php echo $data['nama_ayah']; ?>"/></td>
        
	  	</tr>
 	    <tr valign="top">
  	 	<td>Nama Siswa </td>
  		<td width="18">:&nbsp;</td>
 		<td ><input name="nama" size="30"  class="text-medium" id="nama" value="<?php echo $data['nama']; ?>" /></td>
        
        <td width="200" type="text">Nama Ibu</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input name="nama_ibu" size="30" class="text-medium" id="nama_ibu" value="<?php echo $data['nama_ibu']; ?>"/></td>

        
        </tr>
        <tr valign="top">
  		<td width="108" type="text">Tahun Ajaran  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173">
        
        <select name="tahun_ajaran">
		<?php

		$sql="SELECT * FROM thn_ajaran where status='Y'";
		$hasil_query=mysql_query($sql);

		while($baris=mysql_fetch_object($hasil_query))
		{
		echo "<option value=$baris->id_thn_ajaran>$baris->thn_ajaran</option>";
		}
		?>
		</select>
        
        </td>
        
        <td width="200" type="text">Pekerjaan Ayah</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input name="pekerjaan_ayah" size="30" class="text-medium" id="pekerjaan_ayah" value="<?php echo $data['pekerjaan_ayah']; ?>"/></td>
        
  		</tr>
 	    <tr valign="top">
  	 	<td>Jurusan</td>
  		<td width="18">:&nbsp;</td>
 		<td >
        
        <select name="id_jurusan">
		<?php

		$sql="SELECT * FROM jurusan";
		$hasil_query=mysql_query($sql);

		while($baris=mysql_fetch_object($hasil_query))
		{
		echo "<option value=$baris->id_jurusan>$baris->nama_jurusan</option>";
		}
		?>
		</select>
        
        </td>
        
        <td width="200" type="text">Pekerjaan Ibu</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input name="pekerjaan_ibu" size="30" class="text-medium" id="pekerjaan_ibu" value="<?php echo $data['pekerjaan_ibu']; ?>"/></td>
        
  	    </tr>
 	    <tr valign="top">
   		<td height="61">Jenis Kelamin </td>
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
   		<td>Alamat Orang Tua</td>
  		<td width="18">:&nbsp;</td>
   		<td><textarea name="alamat_ortu" /><?php echo $data['alamat_ortu']; ?></textarea></td>
        
	  </tr>
        <tr valign="top">
  		<td width="108" type="text">Tempat Lahir  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input name="tmp_lahir" size="30" class="text-medium" id="tmp_lahir" value="<?php echo $data['tmp_lahir']; ?>"/></td>
        
        <td>No. Telepon Ortu</td>
  		<td width="18">:&nbsp;</td>
  		<td><input name="tlp_ortu" class="text-long" size="30" id="tlp_ortu" value="<?php echo $data['tlp_ortu']; ?>"/>
        
  		</tr>
 	    <tr valign="top">
  	 	<td>Tanggal Lahir</td>
  		<td width="18">:&nbsp;</td>
 		<td ><input type="text" name="tgl_lahir" id="tgl_lahir" size="30" value="<?php echo $data['tgl_lahir'] ?>" /></td>
        
        <td>Penghasilan Ortu</td>
  		<td width="18">:&nbsp;</td>
  		<td><input name="penghasilan_ortu" class="text-long" size="30" id="penghasilan_ortu" value="<?php echo $data['penghasilan_ortu']; ?>"/>
        
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
        
                 
        <td>Asal Sekolah</td>
  		<td width="18">:&nbsp;</td>
  		<td><input name="asal_sekolah" class="text-long" size="30" id="asal_sekolah" value="<?php echo $data['asal_sekolah']; ?>"/>
                
 		</td>
  		</tr>
  	    <tr valign="top">
   		<td>Alamat</td>
  		<td width="18">:&nbsp;</td>
   		<td><textarea name="alamat" ><?php echo $data['alamat']; ?></textarea></td>
        
        <td>Alamat Sekolah</td>
  		<td width="18">:&nbsp;</td>
   		<td><textarea name="alamat_asal_sekolah" /><?php echo $data['alamat_asal_sekolah']; ?></textarea></td>
        
  	    </tr>
        <tr valign="top">
   		<td>No. Telepon</td>
  		<td width="18">:&nbsp;</td>
  		<td><input name="tlp" class="text-long" size="30" id="tlp" value="<?php echo $data['tlp']; ?>"/>
        
        <td>Tahun Lulus</td>
  		<td width="18">:&nbsp;</td>
  		<td><input name="tahun_lulus" class="text-long" size="30" id="tahun_lulus" value="<?php echo $data['tahun_lulus']; ?>"/>
        
        </td>
        </tr>
   		<tr valign="top">
   		<td>E-mail</td>
  		<td width="18">:&nbsp;</td>
  		<td><input name="email" class="text-long" size="30" id="email onChange=validasiEmail()" value="<?php echo $data['email']; ?>"/>
        
        <td>Nilai UN</td>
  		<td width="18">:&nbsp;</td>
  		<td><input name="nilai_un" class="text-long" size="30" id="nilai_un" value="<?php echo $data['nilai_un']; ?>"/>
        
  		</td>
  		</tr>
  	</table>
  <label for="textfield"></label>
  	<tr>
	<input type="submit" value="Simpan" />
   	<a href="tampil_data_siswa.php"><input type="button" value="Batal"></a>
	<input type="reset" value="Reset" />
	</tr>
</form>
</div>
</div>
<?php include "footer.php"; ?>
