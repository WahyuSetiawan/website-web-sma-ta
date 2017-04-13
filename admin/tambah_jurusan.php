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
     			id_jurusan:{
        		required: true
                },
     			nama_jurusan:{
        		required: true
                },
 					},
   		messages: {
   			id_jurusan:
 			{
   			required: "ID belum diisi"
   			},
			nama_jurusan:
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
<h2>Tambah Jurusan</h2>
<form action="proses_tambah_jurusan.php" class="jNice" id="validasi" name="validasi" method="POST">
  	<table>
  	    <tr valign="top">
  		<td width="200" type="text">ID Jurusan  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input type="text" size="30" name="id_jurusan"/></td>
        </tr>
        <td width="200" type="text">Jurusan</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input name="nama_jurusan" size="30" class="text-medium" id="nama_jurusan"></td>
        </tr>
  	</table>
  <label for="textfield"></label>
  	<tr>
	<input type="submit" value="Simpan" />
    <a href="tampil_jurusan.php"><input type="button" value="Batal"></a>
	<input type="reset" value="Reset" />
	</tr>
</form>
</div>
<?php include "footer.php"; ?>
