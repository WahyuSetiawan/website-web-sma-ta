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
     			tema:{
        		required: true
                },
 					},
   		messages: {
   			tema:
 			{
   			required: "Tema kosong"
   			},
  			}
	  	}); 
		});
</script>

<script src="ckeditor/ckeditor.js"></script>

</head>
<body>
<div id="content" class="box">
<h2>Tambah Agenda</h2>
<form action="" class="jNice" id="validasi" name="validasi" method="POST">
  	<table>
	
		<tr>
        <td width="84" type="text">Tanggal</td>
  		<td width="18">:&nbsp;</td>
  		<td width="721"><input type="text" name="tanggal" id="tanggal" size="30"></td>
        </tr>
  	    <tr valign="top">
  		<td width="84" type="text">Tema</td>
  		<td width="18">:&nbsp;</td>
  		<td width="721"><input type="text" name="tema" size="120" /></td>
        </tr>
        <tr>
        <td align="center" width="84" type="text">Acara</td>
  		<td width="18">:&nbsp;</td>
  		<td width="721"><textarea id="editor1" name="editor1" rows="10" cols="80"></textarea></td>
        </tr>
        <tr>
        <td width="84" type="text">Tempat</td>
  		<td width="18">:&nbsp;</td>
  		<td width="721"><input type="text" name="tempat" size="50"></td>
        </tr>
       
        <tr>
        <td width="84" type="text">Pukul</td>
  		<td width="18">:&nbsp;</td>
  		<td width="721"><input type="text" name="pukul" size="30"></td>
        </tr>
  	</table>
	
  <label for="textfield"></label>
  	<tr>
	<input type="submit" name="simpan" value="Simpan" />
    <a href="tampil_agenda.php"><input type="button" value="Batal"></a>
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

	$q=mysql_query("Insert into agenda (`tanggal`,`tema`,`acara`,`tempat`,`pukul`) values 
	('".$_POST['tanggal']."','".$_POST['tema']."','".$_POST['editor1']."','".$_POST['tempat']."','".$_POST['pukul']."')")or die(mysql_error());
	
	if($q)
	{
		echo "<script>alert('Berhasil ditambahkan'); window.location = 'tampil_agenda.php'</script>";
	}
}
?>
</table>
</div>
<?php include "footer.php"; ?>
