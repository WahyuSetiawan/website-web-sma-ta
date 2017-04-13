<?php 
	include "koneksi.php";
?>

<body>
<?php include "all_psb.php"?>
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
                }
 					},
   	messages: {
   		nip:
 		 {
   		required: "NISN kosong",
   		minlength: "NISN Minimal 4 Karakter",
        maxlength: "NISN Maximal 10 Karakter"
   		},
		nama:
 		 {
   		required: "Nama Siswa Kosong",
   		}
  	}); 
});
</script>


</head>
<body>
<div id="content" class="box">
<h2>Preview Data Calon Siswa</h2>

<?php

$sql = "SELECT d.nis,d.nama,d.tmp_lahir,d.tgl_lahir,d.agama,d.alamat,d.tlp,d.nama_ortu,d.alamat_ortu,d.tlp_ortu,d.pdd_ortu,d.pekerjaan,d.penghasilan,d.nama_sekolah,d.status_sekolah,d.alamat_sekolah,d.nun FROM data_casis d where nis= '".$_GET['nis']."'
order by nis asc";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);


?>

<form action="tampil_data_casis.php" class="jNice" id="validasi" name="validasi" method="POST">
  <table>
  	    <tr valign="top">
  		<td width="200" type="text">NISN  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nis']; ?></td>
</tr>
 	    <tr valign="top">
  	 	<td>Nama Lengkap </td>
  		<td width="18">:&nbsp;</td>
 		<td ><?php echo $data['nama']; ?></td>
  		
</tr>
        <tr valign="top">
  		<td width="108" type="text">Tempat Lahir  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tmp_lahir']; ?></td>
 	    
        <tr valign="top">
  	 	<td>Tanggal Lahir</td>
  		<td width="18">:&nbsp;</td>
 		<td >
        
        <?php
        	echo $data['tgl_lahir'];
		?>
        
        </td>

		<tr valign="top">
  		<td>Agama</td>
 		<td width="18">:&nbsp;</td>
   		<td width="173"><?php echo $data['agama']; ?></td>
  				
        
       <tr valign="top">
  		<td width="108" type="text">Alamat  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['alamat']; ?></td>
        
        <tr valign="top">
  		<td width="108" type="text">No Telepon  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tlp']; ?></td>
   		
        <tr valign="top">
  		<td width="108" type="text">Nama Orang Tua  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nama_ortu']; ?></td>
		
		<tr valign="top">
  		<td width="108" type="text">Alamat Orang Tua  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['alamat_ortu']; ?></td>
		
		<tr valign="top">
  		<td width="108" type="text">No. Telp Orang Tua  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tlp_ortu']; ?></td>
		
		<tr valign="top">
  		<td width="108" type="text">Pendidikan Orang Tua  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['pdd_ortu']; ?></td>
		
		<tr valign="top">
  		<td width="108" type="text">Pekerjaan Orang Tua  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['pekerjaan']; ?></td>
		
		<tr valign="top">
  		<td width="108" type="text">Penghasilan Orang Tua  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['penghasilan']; ?></td>
		
		<tr valign="top">
  		<td width="108" type="text">Sekolah Asal </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nama_sekolah']; ?></td>
		
		<tr valign="top">
  		<td width="108" type="text">Status Sekolah  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['status_sekolah']; ?></td>
		
		<tr valign="top">
  		<td width="108" type="text">Nilai Ujian Nasional  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nun']; ?></td>
  	</table>
  <label for="textfield"></label>
  	<tr>
	<td><input type="submit" value="Kembali" /></td>
	<td> <a href="cek_casis.php?nis=<?php echo $data['nis']; ?>"><input type="button" value="Cek" /></td>
	</tr>
	
	<td>
<p align="center" >[<a href="print_casis.php" target="_blank">Cetak</a>]</p>
	</td>
</form>
</div>
</div>
<?php include "footer.php"; ?> 