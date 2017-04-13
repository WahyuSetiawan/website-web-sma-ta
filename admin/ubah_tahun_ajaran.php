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
     			id_thn_ajaran:{
        		required: true
                },
     			thn_ajaran:{
        		required: true,
				minlength: 9,
				maxlength: 9
                },
				status:{
        		required: true,
                }
 					},
   		messages: {
   			id_thn_ajaran:
 			{
   			required: "ID kosong"
   			},
			thn_ajaran:
 			{
   			required: "Tahun ajaran belum diisi",
			minlength: "Masukkan dengan valid",
			maxlength: "Masukkan dengan valid"
   			},
  			status:
   			{
  			required: "Status belum dipilih"
  			},
  			}
	  	}); 
	});
</script>

</head>
<body>
<div class="back" style="width: 1000px;">
<h2>Ubah Tahun Ajaran</h2>

<?php
$sql = "SELECT * FROM thn_ajaran where id_thn_ajaran= ".$_GET['id_thn_ajaran'];
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
?>

<form action="proses_ubah_tahun_ajaran.php" class="jNice" id="validasi" name="validasi" method="POST">
  	<table>
  	    <tr valign="top">
  		<td width="200" type="text">ID Tahun Ajaran  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input type="text" size="30" name="id_thn_ajaran" value="<?php echo $data['id_thn_ajaran'] ?>"/></td>
        </tr>
        <td width="200" type="text">Tahun Ajaran</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input name="thn_ajaran" size="30" class="text-medium" id="thn_ajaran" value="<?php echo $data ['thn_ajaran'] ?>"></td>
        </tr>
        <tr valign="top">
   		<td height="35">Status </td>
   		<td width="18">:&nbsp;</td>
        <td>
            <?php
           
			if ($data['status']=='Y'){
      		echo "<input type=radio name='status' value='Y' checked>Y  
                  <input type=radio name='status' value='N'> N</td></tr>";
    		}
    		else{
      		echo "<input type=radio name='status' value='Y'>Y  
                  <input type=radio name='status' value='N' checked>N</td></tr>";
    		}
		   
		   ?>
        </td>       
  	</table>
  <label for="textfield"></label>
  	<tr>
	<input type="submit" value="Simpan" />
    <a href="tampil_tahun_ajaran.php"><input type="button" value="Batal"></a>
	<input type="reset" value="Reset" />
	</tr>
</form>
</div>
<?php include "footer.php"; ?>