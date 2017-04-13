<?php 
	include "koneksi.php";
?>

<body>
<?php include "all_gurudansiswa.php"; ?>
<div id="content" class="box">
<link href="css/cmxform.css" rel="stylesheet" type="text/css">

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<link rel="stylesheet" href="style.css" type="text/css" />
     <script type="text/javascript">

     	$().ready(function() {
        $("#validasi").validate({
        	 rules: {
     			id_mapel:{
        		required: true
                },
     			jurusan:{
        		required: true
                },
 					},
   		messages: {
   			id_mapel:
 			{
   			required: "Mata Pelajaran Kosong"
   			},
			jurusan:
 			{
   			required: "Nama jurusan belum diisi"
   			},
  			}
	  	}); 
	});
</script>

</head>
<body>
<div class="back" style="width: 1000px;">
<h2>Tambah Mapel</h2>
<form action="proses_tambah_mapel.php" class="jNice" id="validasi" name="validasi" method="POST">
  	<table>
  	    <tr valign="top">
  		<td width="200" type="text">Mata Pelajaran  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input type="text" size="30" name="id_mapel"/></td>
        </tr>
        <td width="200" type="text">Jurusan</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input name="jurusan" size="30" class="text-medium" id="jurusan"></td>
        </tr>
  	</table>
    <p> Keterangan Jurusan : </p>
    <p> 1 = -</p>
	<p> 2 = IPA</p>
	<p> 1 = IPS</p>
	</br>
  	<tr>
	<input type="submit" value="Simpan" />
    <a href="tampil_mapel.php"><input type="button" value="Batal"></a>
	<input type="reset" value="Reset" />
	</tr>
</form>
</div>
<?php include "footer.php"; ?>
