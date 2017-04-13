<?php 
  include "koneksi.php";
?>

<body>

<?php include "all_fitur.php"; ?>

<link href="css/cmxform.css" rel="stylesheet" type="text/css">

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
  				},
				alamat:{
   				required: true
   				},
				komentar:{
   				required: true
   				}
 					},
   		messages: {
			nama:
 			{
   			required: "Nama Pengunjung belum diisi",
   			},
  			email: "Mohon Masukkan alamat email dengan valid"
  			},
			alamat:
   			{
  			required: "Alamat belum diisi"
  			},
			komentar:
   			{
  			required: "Komentar masih kosong"
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
<div id="content" class="box">
<h2>Buku Tamu</h2>
<form action="proses_tambah_buku_tamu.php" class="jNice" id="validasi" name="validasi" method="POST">

<table width="590" border="1">
  <tr>
    <th width="119" scope="row">Nama</th>
    <td width="31">:</td>
    <td width="418"><input type="text" size="30" name="nama"/></td>
  </tr>
  <tr>
    <th scope="row">Email</th>
    <td>:</td>
    <td><input name="email" class="text-long" size="30" id="email onChange=validasiEmail()">
  </tr>
  <tr>
    <th scope="row">Subjek</th>
    <td>:</td>
    <td><textarea name="subjek" ></textarea></td>
  </tr>
  <tr>
    <th scope="row">Komentar</th>
    <td>:</td>
    <td><textarea name="komentar" ></textarea></td>
  </tr>
</table>
<input type="submit" value="Simpan" />
<input type="reset" value="Reset" />

<p>[ <a href="tampil_buku_tamu.php">Lihat Komentar Tamu</a> ] </p>
</div>
<?php include "footer.php"; ?>
