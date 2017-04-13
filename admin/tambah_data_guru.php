<?php 
	include "koneksi.php";
?>
<body>
	<?php 
	include "all_gurudansiswa.php";
	?>
	<link type="text/css" rel="stylesheet" href="js/jquery-ui.min.css"/>
	<script src="js/jQuery-2.1.3.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.validate.js" type="text/javascript"></script>
	<script type="text/javascript">
	 $(function () {
            $('#tgl_lahir').datepicker({
         dateFormat: "dd MM yy",
         yearRange:'-50:-20',
         changeMonth: true,
         changeYear: true
         });
        });
     	 function valid() {
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
     			jenis_kelamin:{
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
   			required: "NIP belum diisi",
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
	}
</script>
<script>
        function validasiEmail()
        {
            var email = document.getElementById('email').value;
            var regex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if (email == "" || regex.test(email) == false)
            {
                alert("email tidak valid");
                return false;
            }
        }
    </script>

<div id="content" class="box">
<h2>Tambah Data Guru</h2> 
<form action="proses_tambah_data_guru.php" class="jNice" id="validasi" name="validasi" method="POST" enctype="multipart/form-data">
  	<table>
<tr valign="top">
  	 	<td>Foto Guru</td>
  		<td width="18">:&nbsp;</td>
 		<td> <input type=file name='fupload' size=15></td>    
</tr>
  	    <tr valign="top">
  		<td width="200" type="text">NIP  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input type="text" size="30" name="nip"/></td>
</tr>
 	    <tr valign="top">
  	 	<td width="200" type="text">Nama Guru  </td>
  		<td width="18">:&nbsp;</td>
        <td width="173"><input name="nama" size="30" class="text-medium" id="nama"></td>
  		<tr valign="top">
        <td width="200" type="text">Jenis Kelamin  </td>
  		<td width="18">:&nbsp;</td>
        <td>
            <input type="radio" name="j_kelamin" value="Laki-laki"/>
            Laki-laki
          <br/>
            <input type="radio" name="j_kelamin" value="Perempuan"/>
            Perempuan
        </td>
        
		</tr>
        <tr valign="top">
  		<td width="108" type="text">Tempat Lahir  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input name="tmp_lahir" size="30" class="text-medium" id="tmp_lahir"></td>
        
  		</tr>
 	    <tr valign="top">
  	 	<td>Tanggal Lahir</td>
                    <td width="18">:&nbsp;</td>
                    <td ><input type="text" name="tgl_lahir" id="tgl_lahir" size="30"></td>
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
  		<td><input name="jabatan" class="text-long" size="30" id="jabatan">
                
 		</td>
  		</tr>
        <tr valign="top">
        <td>Mata Pelajaran</td>
  		<td width="18">:&nbsp;</td>
   		<td>
		<select name="mapel">
		<?php

		$sql="SELECT * FROM mata_pelajaran";
		$hasil_query=mysql_query($sql);

		while($baris=mysql_fetch_object($hasil_query))
		{
		echo "<option value=$baris->id_mapel>$baris->id_mapel</option>";
		}
		?>
		</select>
  	    </tr>
        </td>
        <tr valign="top">
   		<td>Alamat</td>
  		<td width="18">:&nbsp;</td>
   		<td><textarea name="alamat" ></textarea></td>
        
  	    </tr>
        
        <tr valign="top">
   		<td>No. Telepon</td>
  		<td width="18">:&nbsp;</td>
  		<td><input name="tlp" class="text-long" size="30" id="tlp">
        
        </td>
        </tr>
   		<tr valign="top">
   		<td>E-mail</td>
  		<td width="18">:&nbsp;</td>
  		<td><input name="email" class="text-long" size="30" id="email onChange=validasiEmail()">
		</td>
  		</tr>
  	</table>
  <label for="textfield"></label>
  	<tr>
            <input name="submit" type="submit" value="Simpan" onClick="valid()" />
            <a href="tampil_data_guru.php"><input type="button" value="Batal"></a>
            <input type="reset" value="Reset" />
            </tr>
</form>
</div>
<?php 
	include "footer.php";
?>