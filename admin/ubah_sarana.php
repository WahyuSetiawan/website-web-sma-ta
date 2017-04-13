<?php 
  include "koneksi.php";
?>
<body>
<?php 
  include "all_profil.php";
?>
    
<?php
$sql =mysql_query("SELECT * FROM sarana WHERE id_sarana='$_GET[id_sarana]' ");	
$data=mysql_fetch_array($sql);
?>
<form method=POST action='proses_ubah_sarana.php' enctype='multipart/form-data'>
<div id="content" class="box">
    <form action="" method="post">
    <label> <h2>Sarana Dan Prasarana</h2></label>
<table>	
	<tr valign="top">
  	 	<td>Nama Sarana</td>
  		<td width="18">:&nbsp;</td>
 		<td><input type=text name='nama_sarana' value=<?php echo $data['nama_sarana'] ?> width="300"></td>    
	</tr>
		</br>
<tr valign="top">
  	 	<td>Gambar Sarana</td>
  		<td width="18">:&nbsp;</td>
		<td> <?php echo "<img src='gambar_sarana/$data[gbr_sarana]' width=100 height=100 alt=''>" ?></td>
		</tr>
		</br>
		<tr valign="top">
  	 	<td>Ganti Gambar</td>
  		<td width="18">:&nbsp;</td>
 		<td> <input type=file name='fupload' size=15></td>   
	</tr>
</table>
	</br>
<table>
	<tr valign="top">
  	 	<td>Diskripsi Sarana</td>
  		<td width="18">:&nbsp;</td>
	</tr>
</table>	
	</br>
	</form>
    <textarea id="editor1" name="editor1" value=<?php echo $data['entry_sarana'] ?></textarea></textarea>
    <p></p>
    <input type="submit" name="posting" value="SIMPAN">
    </form>
</div>
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

    <?php
    if(isset($_POST['posting']))
    {
        $q=mysql_query("update sarana set entry_sarana='".$_POST['editor1']."' where id_sarana='".$_GET['id_sarana']."'") or die(mysql_error());
       
        if($q)
        {
            echo "<script>alert('Berhasil diubah'); window.location = 'tampil_prestasi.php'</script>";
        }
    }
    ?>
    
    
</div>
<?php include "footer.php"; ?>
