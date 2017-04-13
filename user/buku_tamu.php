<?php include "header.php"; ?>
<?php include "menu_arsip.php"; ?>
<?php include "koneksi.php"; ?>


<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<link rel="stylesheet" href="style.css" type="text/css" />
     <script type="text/javascript">

     	$().ready(function() {
        $("#validasi").validate({
        	 rules: {
     			nama:{
        		required: true,
                },
  				email:{
    			required: true,
  				email: true
  				}
 					},
   		messages: {
			nama:
 			{
   			required: "Nama Pengunjung belum diisi",
   			},
  			email: "Mohon Masukkan alamat email dengan valid"
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
</head>
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- konten teks -->
    <div id="content">
<!-- isiiiii -->
 <h2>Write A Comment</h2>
      <div id="respond">
<form action="proses_buku_tamu.php" class="jNice" id="validasi" name="validasi" method="POST">
          <p>
            <input type="text" name="nama" value="" size="22" />
            <label for="name"><small>Nama (required)</small></label>
          </p>
          <p>
            <input type="text" name="email" id="email onChange=validasiEmail()" value="" size="22" />
            <label for="email"><small>e-Mail (required)</small></label>
          </p>
		  <p>
            <input type="text" name="subjek" id="nama" value="" size="22" />
            <label for="nama"><small>Subjek</small></label>
          </p>
          <p>
            <textarea name="komentar" id="comment" cols="100%" rows="10"></textarea>
            <label for="comment" style="display:none;"><small>Komentar (required)</small></label>
          </p>
          <p>
            <input name="submit" type="submit" id="submit" value="Simpan" onClick="validasi()" />
            &nbsp;
            <input name="reset" type="reset" id="reset" tabindex="5" value="Reset" />
          </p>
        </form>
      </div>
<!-- akhir isiiiii -->
</div> 
<?php include "right.php"; ?>  
</div>	
</div>
<?php include "footer.php"; ?>