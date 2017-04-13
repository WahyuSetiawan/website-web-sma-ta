<?php include './header.php'; ?>
<?php include './tray_home.php'; ?>
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
     			nama:{
        		required: true,
                },
     			username:{
   				required: true
   				},
  				password:{
    			required: true
  				}
 					},
   		messages: {
   			nama:
 			{
   			required: "Nama Belum Diisi"
   			},
			username:
 			{
   			required: "Username kosong",
   			},
  			password:
   			{
  			required: "Password kosong"
   			},
  			}
	  	}); 
		});
	</script>
	
<div id="content" class="box">
<h2>Tambah Admin</h2>
<form action="proses_tambah_admin.php" class="jNice" id="validasi" name="validasi" method="POST">
<table>
  	    <tr valign="top">
  		<td width="200" type="text">Nama  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><input type="text" size="30" name="nama" id="nama"/></td>
</tr>
 	    <tr valign="top">
  	 	<td width="200" type="text">Username  </td>
  		<td width="18">:&nbsp;</td>
        <td width="173"><input type="text" size="30" name="username" id="username"></td>
</tr>
 <tr valign="top">
  	 	<td width="200" type="text">Password  </td>
  		<td width="18">:&nbsp;</td>
        <td width="173"><input type="typr" size="30" name="password" id="password"></td>
</tr>
</table>
</br>

  <label for="textfield"></label>
  	<tr>
	<input type="submit" name="simpan" value="Simpan" />
    <a href="admin.php"><input type="button" value="Batal"></a>
	<input type="reset" value="Reset" />
	</tr>
</form>

</div>
<?php include "footer.php"; ?>