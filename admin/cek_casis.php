<?php
include "koneksi.php";
?>
    <?php
    include "all_psb.php";
    ?>
    <link type="text/css" rel="stylesheet" href="js/jquery-ui.min.css"/>
	<script src="js/jQuery-2.1.3.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/jquery.validate.js" type="text/javascript"></script>
	<script type="text/javascript">
	 $(function () {
            $('#tgl_lahir').datepicker({
         dateFormat: "dd MM yy",
         yearRange:'-25:-5',
         changeMonth: true,
         changeYear: true
         });
        });
        function valid(){
            $(".validasiform").validate({
                rules: {
                    nis: {
                        required: true,
                        minlength: 10,
                        maxlength: 10
                    }, nama: {
                        required: true
                    }
                },
                messages: {
                    nis: {
                        required: "NIS kosong",
                        minlength: "NIS Harus 10 Karakter",
                        maxlength: "NIS Harus 10 Karakter"
                    }, nama: {
                        required: "Nama Siswa kosong"
                    }
                }
            });
        }
    </script>

</head>
<body>
<div class="back" style="width: 1000px;">
<div id="content" class="box">
<h2>Cek Data Calon Siswa</h2>

<?php
$sql = "SELECT * FROM data_casis where nis= ".$_GET['nis'];
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
$data = mysql_fetch_assoc($hasil);
?>
<form action="proses_cek_casis.php" class="jNice" id="validasi" name="validasi" method="POST">
  	<table>
  	    <tr valign="top">
  		<td width="200" type="text">NIS </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input type="text" size="30" name="nis" value="<?php echo $data['nis'] ?>"/></td>
        </tr>
        <td width="200" type="text">Nama </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input name="nama" size="30" class="text-medium" id="nama" value="<?php echo $data ['nama'] ?>"></td>
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
    <a href="tampil_data_casis.php"><input type="button" value="Batal"></a>
	</tr>
</form>
</div>
<?php include "footer.php"; ?>