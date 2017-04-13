<?php include "header.php"; ?>
<?php include "menu_akun.php"; ?>
<?php include "koneksi.php"; ?>

<?php if (isset($_SESSION['nis'])) {
    if ($_SESSION['status'] == 'guru') {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<script src="../admin/js/jquery.js" type="text/javascript"></script>
<script src="../admin/js/jquery.validate.js" type="text/javascript"></script>
<link rel="stylesheet" href="style.css" type="text/css" />
     <script type="text/javascript">

             	$().ready(function() {
            	$("#validasi").validate({
        	 rules: {
     			nip:{
        		required: true,
          		minlength: 4,
				maxlength: 20
                },
     			nama:{
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
   		nip:
 		 {
   		required: "NIP kosong",
   		minlength: "NIP Minimal 4 Karakter",
        maxlength: "NIP Maximal 20 Karakter"
   		},
		nama:
 		 {
   		required: "Nama Siswa kosong",
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

<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- konten teks -->
    <div id="content">
<!-- isiiiii -->
<h2>Akun Guru</h2>

<?php
                    $detail = mysql_query("
					SELECT *
FROM guru where nip='" . $_SESSION['nis'] . "' ") or exit("kesalahan terjadi") or exit(mysql_error());
					
                    $data = mysql_fetch_array($detail);

                    echo "<h2><strong></strong></h2>";
                    ?>

<table>
  	    <tr valign="top">
			<td  align="center" colspan="6" type="text">
		  <?php 
			if($data[foto] == ""){
				echo "<img src='../admin/nothing.jpg' width=100 height=100 alt=''>" ;
			}else{
				echo "<img src='../admin/foto_guru/".$data[foto]."' width=100 height=100 alt=''>" ;
			}
			?>
			</td>      
		 </tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>

  	    <tr valign="top">
  		<td width="200" type="text">NIP  </td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['nip']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
 	    <tr valign="top">
  	 	<td>Nama Guru </td>
  		<td width="18">:&nbsp;</td>
 		<td ><?php echo $data['nama']; ?></td>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>  		
        <tr valign="top">
   		<td height="32">Jenis Kelamin </td>
   		<td width="18">:&nbsp;</td>
  		<td>
        <?php
        	echo $data['j_kelamin'];
		?>
        </td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
        <tr valign="top">
  		<td width="108" type="text">Tempat Lahir  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tmp_lahir']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
        <tr valign="top">
  	 	<td>Tanggal Lahir</td>
  		<td width="18">:&nbsp;</td>
 		<td>
        <?php
        	echo $data['tgl_lahir'];
		?>
        
        </td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
		<tr valign="top">
  		<td>Agama</td>
 		<td width="18">:&nbsp;</td>
   		<td width="173"><?php echo $data['agama']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>  				
        <tr valign="top">
  		<td width="108" type="text">Jabatan  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['jabatan']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
        <tr valign="top">
  		<td width="108" type="text">Pelajaran  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['mapel']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>        
       <tr valign="top">
  		<td width="108" type="text">Alamat  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['alamat']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>        
        <tr valign="top">
  		<td width="108" type="text">No Telepon  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tlp']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>   		
        <tr valign="top">
  		<td width="108" type="text">Email  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['email']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
  	</table>

<tr>
	<td><a href="ubah_guru.php?nip=<?php echo $data['nip']; ?>"><input type="button" value="Ubah" /></a></td>
</tr>
</br>
</br>
</br>

<table>
<form method=POST action='proses_materi.php' enctype='multipart/form-data'>
	<input name="nip" value=<?php echo $_SESSION['nis']?> type="hidden">
<tr>
<td align="center" colspan="3">Upload</td>
</tr>

<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
<tr valign="top">
  		<td width="108" type="text">File  </td>
  		<td width="18">:&nbsp;</td>
  		<td><input type=file name='fupload' size=15 class="form-control"></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
        <tr valign="top">
  		<td width="108" type="text">Tahun Ajaran  </td>
  		<td width="18">:&nbsp;</td>
  		<td>
                    <select name="thn_ajaran" class="form-control">
                        <?php
                        $sql = 'select * from thn_ajaran';
                        $data_mentah = mysql_query($sql) or exit(mysql_error());

                        while ($data_jadi = mysql_fetch_assoc($data_mentah)) {
                            ?>
                            <option value="<?php echo $data_jadi['id_thn_ajaran'] ?>"><?php echo $data_jadi['thn_ajaran'] ?></option>
                        <?php } ?>
                    </select>
         </td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>
        <tr valign="top">
  		<td width="108" type="text">Kelas  </td>
  		<td width="18">:&nbsp;</td>
  		<td>
                    <select name="kelas" class="form-control">
                        <?php
                        $sql = 'select * from kelas';
                        $data_mentah = mysql_query($sql) or exit(mysql_error());

                        while ($data_jadi = mysql_fetch_assoc($data_mentah)) {
                            ?>
                            <option value="<?php echo $data_jadi['id_kelas'] ?>"><?php echo $data_jadi['nama'] ?></option>
                        <?php } ?>
                    </select>
         </td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
</tr>

</table>
<input class="button" type=submit name=submit value=Simpan>
</form>
 <?php
    } else {
echo '<div class="wrapper row4">';
  echo '<div id="container" class="clear">'; 
    echo '<div id="content">';

echo '<h2>Akun Guru</h2>';
        echo 'Anda harus login mengunakan akun Guru !!!';
    }
} else {
echo '<div class="wrapper row4">';
  echo '<div id="container" class="clear">'; 
    echo '<div id="content">';

echo '<h2>Akun Guru</h2>';
    echo 'Anda harus login terlebih dahulu !!!';
}
?>
	<!-- akhir isiiiii -->
</div> 
<?php include "right.php"; ?>  
</div>	
</div>  
<?php include "footer.php"; ?>