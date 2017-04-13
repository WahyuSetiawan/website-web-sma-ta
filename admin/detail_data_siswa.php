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
<h2>Detail Data Siswa</h2>

<?php

$sql = "SELECT nis,nama,thn_ajaran,nama_jurusan,j_kelamin,tmp_lahir,tgl_lahir,agama,alamat,tlp,email,nama_ayah,nama_ibu,pekerjaan_ayah,pekerjaan_ibu,
alamat_ortu,tlp_ortu,penghasilan_ortu,asal_sekolah,alamat_asal_sekolah,tahun_lulus,nilai_un
from siswa s,thn_ajaran t,jurusan j where s.tahun_ajaran=t.id_thn_ajaran and s.id_jurusan=j.id_jurusan and nis= ".$_GET['nis'];
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);


?>

<form action="tampil_data_siswa.php" class="jNice" id="validasi" name="validasi" method="POST">
  	<table>
  	    <tr valign="top">
  		<td width="200" type="text">NISN  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nis']; ?></td>
        
        <td width="200" type="text">Nama Ayah</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nama_ayah']; ?></td>
        
	  	</tr>
 	    <tr valign="top">
  	 	<td>Nama Siswa </td>
  		<td width="18">:&nbsp;</td>
 		<td ><?php echo $data['nama']; ?></td>
        
        <td width="200" type="text">Nama Ibu</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nama_ibu']; ?></td>

        
        </tr>
        <tr valign="top">
  		<td width="108" type="text">Tahun Ajaran  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173">
		
		<?php echo $data['thn_ajaran']; ?>
        
        </td>
        
        <td width="200" type="text">Pekerjaan Ayah</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['pekerjaan_ayah']; ?></td>
        
  		</tr>
 	    <tr valign="top">
  	 	<td>Jurusan</td>
  		<td width="18">:&nbsp;</td>
 		<td >
        
        <?php
        	echo $data['nama_jurusan'];
		?>
        
        </td>
        
        <td width="200" type="text">Pekerjaan Ibu</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['pekerjaan_ibu']; ?></td>
        
  	    </tr>
 	    <tr valign="top">
   		<td height="32">Jenis Kelamin </td>
   		<td width="18">:&nbsp;</td>
  		<td>
        <?php
        	echo $data['j_kelamin'];
		?>
        </td>
   		<td>Alamat Orang Tua</td>
  		<td width="18">:&nbsp;</td>
   		<td><?php echo $data['alamat_ortu']; ?></td>
        
	  </tr>
        <tr valign="top">
  		<td width="108" type="text">Tempat Lahir  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tmp_lahir']; ?></td>
        
        <td>No. Telepon Ortu</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['tlp_ortu']; ?>
        
  		</tr>
 	    <tr valign="top">
  	 	<td>Tanggal Lahir</td>
  		<td width="18">:&nbsp;</td>
 		<td >
        
        <?php
        	echo $data['tgl_lahir'];
		?>
        
        </td>
        
        <td>Penghasilan Ortu</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['penghasilan_ortu']; ?>
        
        </tr>
        <tr valign="top">
  		<td>Agama</td>
 		<td width="18">:&nbsp;</td>
   		<td>
  		
        <?php
        echo $data['agama'];
		?>
                 
        <td>Asal Sekolah</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['asal_sekolah']; ?>
                
 		</td>
  		</tr>
  	    <tr valign="top">
   		<td>Alamat</td>
  		<td width="18">:&nbsp;</td>
   		<td><?php echo $data['alamat']; ?></td>
        
        <td>Alamat Sekolah</td>
  		<td width="18">:&nbsp;</td>
   		<td><?php echo $data['alamat_asal_sekolah']; ?></td>
        
  	    </tr>
        <tr valign="top">
   		<td>No. Telepon</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['tlp']; ?>
        
        <td>Tahun Lulus</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['tahun_lulus']; ?>
        
        </td>
        </tr>
   		<tr valign="top">
   		<td>E-mail</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['email']; ?>
        
        <td>Nilai UN</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['nilai_un']; ?>
        
  		</td>
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
