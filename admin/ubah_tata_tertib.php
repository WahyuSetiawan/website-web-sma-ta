<?php 
  include "koneksi.php";
?>
<body>
<?php 
  include "all_profil.php";
?>
    
<?php
	$sql="select entry_profil from profil_sekolah where id_profil=4";
	
	$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
	$data = mysql_fetch_assoc($hasil);
?>
<div id="content" class="box">
    <form action="" method="post">
    <label> <h2>Tata Tertib Sekolah</h2></label>

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
        $q=mysql_query("update profil_sekolah set entry_profil='".$_POST['editor1']."' where id_profil=4") or die(mysql_error());
       
        if($q)
        {
            echo "<script>alert('Berhasil diubah'); window.location = 'tampil_tata_tertib.php'</script>";
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
