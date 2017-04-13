<?php 
	include "koneksi.php";
?>
<body>
<?php include "all_berita.php"?>
    <link type="text/css" rel="stylesheet" href="js/jquery-ui.min.css"/>
    <script src="js/jQuery-2.1.3.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $('#tanggal').datepicker({
         dateFormat: "dd MM yy",
         yearRange:'-25:+2',
         changeMonth: true,
         changeYear: true
         });
		
		$("#validasi").validate({
        	 rules: {
     			judul_berita:{
        		required: true
                },
 					},
   		messages: {
   			judul_berita:
 			{
   			required: "Judul kosong"
   			},
  			}
	  	}); 
		});
</script>

<script src="ckeditor/ckeditor.js"></script>

</head>
<body>
<div id="content" class="box">
<h2>Tambah Berita</h2>
<form action="" class="jNice" id="validasi" name="validasi" method="POST">
  	<table>

  	    <tr valign="top">
  		<td width="84" type="text">Judul</td>
  		<td width="18">:&nbsp;</td>
  		<td width="721"><input type="text" name="judul_berita" size="120" /></td>
        </tr>
        <tr>
        <td align="center" width="84" type="text">Isi</td>
  		<td width="18">:&nbsp;</td>
  		<td width="721"><textarea id="editor1" name="editor1" rows="10" cols="80"></textarea></td>
        </tr>

  	</table>
	
  <label for="textfield"></label>
  	<tr>
	<input type="submit" name="simpan" value="Simpan" />
    <a href="tampil_berita.php"><input type="button" value="Batal"></a>
	<input type="reset" value="Reset" />
	</tr>
</form>
<script type="text/javascript">


if ( typeof CKEDITOR == 'undefined' )
{
	document.write(
		'CKEditor not found');
}
else
{
	var editor = CKEDITOR.replace( 'editor1' );	

	
	CKFinder.setupCKEditor( editor, '' ) ;

	
}
</script>
</div>
<?php
if(isset($_POST['simpan']))
{

	$q=mysql_query("insert into berita (`judul_berita`,`isi`) values 
	('".$_POST['judul_berita']."','".$_POST['editor1']."')")or die(mysql_error());
	
	if($q)
	{
		echo "<script>alert('Berhasil ditambahkan'); window.location = 'tampil_berita.php'</script>";
	}
}
?>
</table>
</div>
<?php include "footer.php"; ?>
