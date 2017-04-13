<?php 
	include "koneksi.php";
?>

<body>
<link rel="stylesheet" type="text/css" href="css/par.css">
<link rel="stylesheet" type="text/css" href="css/print.css">
<div id="content" class="box">

</head>
<body onLoad="window.print()">
<div id="content" class="box">
<h3 align="center"> YAYASAN INSTITUT INDONESIA </h3>
<h3 align="center"> SMA "INSTITUT INDONESIA" SLEMAN </h3>
<h3 align="center"> JENJANG : TERAKREDITASI A </h3>
<p align="center">Alamat : Jl. Wonosari Km.8 Sekarsuli, Sendangtirto, Berbah, Sleman, Yogyakarta 55573 </p>
<p align="center">Telp.(0274) 383232 </p>
<p align="center">---------------------------------------------------------------------------------------------------</p>
<p align="center">FORMULIR PENDAFTARAN SISWA BARU</p>
<p align="center"> SMA "INSTITUT INDONESIA" SLEMAN </p>
<p align="center"> TAHUN AJARAN 2015/2016 </p>

<?php

$sql = "SELECT d.nis,d.nama,d.tmp_lahir,d.tgl_lahir,d.agama,d.alamat,d.tlp,d.nama_ortu,d.alamat_ortu,d.tlp_ortu,d.pdd_ortu,d.pekerjaan,d.penghasilan,d.nama_sekolah,d.status_sekolah,d.alamat_sekolah,d.nun FROM data_casis d
order by nis asc";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);


?>

<form action="tampil_data_casis.php" class="jNice" id="validasi" name="validasi" method="POST">
</br>
  <table class="krs_box" width="700" align="center">
  	    <tr valign="top">
		<td colspan="3" type="text">IDENTITAS PESERTA DIDIK  </td>
  	    </tr>
  		<td width="175" type="text">	1. NIS  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nis']; ?></td>
</tr>
 	    <tr valign="top">
  	 	<td>	2. Nama Lengkap </td>
  		<td width="18">:&nbsp;</td>
 		<td ><?php echo $data['nama']; ?></td>
</tr>
        <tr valign="top">
  		<td width="175" type="text">	3. Tempat Lahir  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tmp_lahir']; ?></td>
        <tr valign="top">
  	 	<td>	4. Tanggal Lahir</td>
  		<td width="18">:&nbsp;</td>
 		<td >
        
        <?php
        	echo $data['tgl_lahir'];
		?>        </td>
		<tr valign="top">
  		<td>	5. Agama</td>
 		<td width="18">:&nbsp;</td>
   		<td width="173"><?php echo $data['agama']; ?></td>
       <tr valign="top">
  		<td width="175" type="text">	6. Alamat  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['alamat']; ?></td>
        <tr valign="top">
  		<td width="175" type="text">	7. No Telepon  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tlp']; ?></td>

        <tr valign="top">
		<td colspan="3" type="text">IDENTITAS ORANG TUA</td>
		</tr>
  		<td width="175" type="text">	1. Nama Orang Tua  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nama_ortu']; ?></td>
		
		<tr valign="top">
  		<td width="175" type="text">	2. Alamat Orang Tua  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['alamat_ortu']; ?></td>
		<tr valign="top">
  		<td width="175" type="text">	3. No. Telp Orang Tua  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tlp_ortu']; ?></td>
		<tr valign="top">
  		<td width="175" type="text">	4. Pendidikan Orang Tua  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['pdd_ortu']; ?></td>
		<tr valign="top">
  		<td width="175" type="text">	5. Pekerjaan Orang Tua  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['pekerjaan']; ?></td>
		<tr valign="top">
  		<td width="175" type="text">	6. Penghasilan Orang Tua  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['penghasilan']; ?></td>
</br>		
		<tr valign="top">
		<td colspan="3" type="text">SEKOLAH ASAL  </td>
		</tr>
  		<td width="175" type="text">	1. Nama Sekolah </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nama_sekolah']; ?></td>
		
		<tr valign="top">
  		<td width="175" type="text">	2. Status Sekolah  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['status_sekolah']; ?></td>
		
		<tr valign="top">
		<td colspan="3" type="text">NILAI UASBN  </td>
		</tr>
  		<td width="175" type="text">	1. Nilai Ujian Nasional  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nun']; ?></td>
  	</table>
</br>
  <label for="textfield"></label>
	
	<tr align="center">
	<p align="center">[<a href="print_casis.php">Cetak</a>]</p>
	</tr>
</form>
</div>
</div>