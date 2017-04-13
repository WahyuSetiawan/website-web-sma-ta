<?php 
  include "koneksi.php";
?>
<body>
<?php 
  include "all_profil.php";
?>
    
<?php
$sql =mysql_query("SELECT * FROM profil_sekolah WHERE id_profil='3' ");	
$data=mysql_fetch_array($sql);
?>
<form method=POST action='proses_ubah_prestasi.php' enctype='multipart/form-data'>
<div id="content" class="box">
    <form action="" method="post">
    <label> <h2>Prestasi Sekolah</h2></label>
<tr valign="top">
  	 	<td>Gambar Prestasi</td>
  		<td width="18">:&nbsp;</td>
		<td> <?php echo "<img src='gambar_prestasi/$data[gbr]' width=100 height=100 alt=''>" ?></td>
		</tr>
		</br>
		<tr valign="top">
  	 	<td>Ganti Gambar</td>
  		<td width="18">:&nbsp;</td>
 		<td> <input type=file name='fupload' size=15></td>   
	</tr>
	</br>
	</br>
	</br>
	</form>
    <textarea id="editor1" name="editor1" value=<?php echo $data['entry_profil'] ?></textarea></textarea>
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
        $q=mysql_query("update profil_sekolah set entry_profil='".$_POST['editor1']."' where id_profil=3") or die(mysql_error());
       
        if($q)
        {
            echo "<script>alert('Berhasil diubah'); window.location = 'tampil_prestasi.php'</script>";
        }
    }
    ?>
    
    <?php
/*        <label>Judul</label>
    	<input name="judul" value="<?php echo $data['title_berita']; ?>" type="text" size="80">
		
		title_berita='".$_POST['judul']."',
		
		*/
	?>
    
</div>
<?php include "footer.php"; ?>
