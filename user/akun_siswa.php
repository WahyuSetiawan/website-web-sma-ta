<?php include "header.php"; ?>
<?php include "menu_akun.php"; ?>
<?php include "koneksi.php"; ?>

<?php if (isset($_SESSION['nis'])) {
    if ($_SESSION['status'] == 'siswa') {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<script src="../admin/js/jquery.js" type="text/javascript"></script>
<script src="../admin/js/jquery.validate.js" type="text/javascript"></script>
<link rel="stylesheet" href="style.css" type="text/css" />
     <script type="text/javascript">

             	$().ready(function() {
            	$("#validasi").validate({
        	 rules: {
     			nis:{
        		required: true,
          		minlength: 4,
				maxlength: 10
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
   		nis:
 		 {
   		required: "NISN kosong",
   		minlength: "NISN Minimal 4 Karakter",
        maxlength: "NISN Maximal 10 Karakter"
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
<h2>Akun Siswa</h2>

<?php
                    $detail = mysql_query("
					SELECT nis,foto,nama,password,thn_ajaran,nama_jurusan,j_kelamin,tmp_lahir,tgl_lahir,agama,alamat,tlp,email,nama_ayah,nama_ibu,pekerjaan_ayah,pekerjaan_ibu,
alamat_ortu,tlp_ortu,penghasilan_ortu,asal_sekolah,alamat_asal_sekolah,tahun_lulus,nilai_un
from siswa s,thn_ajaran t,jurusan j where s.tahun_ajaran=t.id_thn_ajaran and s.id_jurusan=j.id_jurusan and nis='" . $_SESSION['nis'] . "' ") or exit("kesalahan terjadi");
					
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
				echo "<img src='../admin/foto_siswa/".$data[foto]."' width=100 height=100 alt=''>" ;
			}
		  ?>
		  </td>
        </tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>
</tr>

  	    <tr valign="top">
          <td type="text">NISN </td>
  	      <td>:&nbsp;</td>
  	      <td><?php echo $data['nis']; ?></td>
  	      <td type="text">Nama Ayah</td>
  	      <td>:&nbsp;</td>
  	      <td><?php echo $data['nama_ayah']; ?></td>
        </tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>
</tr>
 	    <tr valign="top">
  	 	<td>Nama Siswa </td>
  		<td width="18">:&nbsp;</td>
 		<td ><?php echo $data['nama']; ?></td>
        
        <td width="200" type="text">Nama Ibu</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['nama_ibu']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>
</tr>
        <tr valign="top">
  		<td width="200" type="text">Tahun Ajaran  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173">
		
		<?php echo $data['thn_ajaran']; ?>        </td>
        
        <td width="200" type="text">Pekerjaan Ayah</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['pekerjaan_ayah']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>
</tr>
 	    <tr valign="top">
  	 	<td>Jurusan</td>
  		<td width="18">:&nbsp;</td>
 		<td >
        
        <?php
        	echo $data['nama_jurusan'];
		?>        </td>
        
        <td width="200" type="text">Pekerjaan Ibu</td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['pekerjaan_ibu']; ?></td>
 </tr>
 <tr class="dark">
            <td></td>
            <td></td>
            <td></td>
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
		?>        </td>
   		<td>Alamat Orang Tua</td>
  		<td width="18">:&nbsp;</td>
   		<td><?php echo $data['alamat_ortu']; ?></td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>
</tr>
        <tr valign="top">
  		<td width="200" type="text">Tempat Lahir  </td>
  		<td width="18">:&nbsp;</td>
  		<td width="173"><?php echo $data['tmp_lahir']; ?></td>
        
        <td>No. Telepon Ortu</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['tlp_ortu']; ?></tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>
</tr>
 	    <tr valign="top">
  	 	<td>Tanggal Lahir</td>
  		<td width="18">:&nbsp;</td>
 		<td >
        
        <?php
        	echo $data['tgl_lahir'];
		?>        </td>
        
        <td>Penghasilan Ortu</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['penghasilan_ortu']; ?></tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>
</tr>
        <tr valign="top">
  		<td>Agama</td>
 		<td width="18">:&nbsp;</td>
   		<td>
  		
        <?php
        echo $data['agama'];
		?>
        <td>Asal Sekolah</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['asal_sekolah']; ?>		</td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>
</tr>
  	    <tr valign="top">
   		<td>Alamat</td>
  		<td width="18">:&nbsp;</td>
   		<td><?php echo $data['alamat']; ?></td>
        
        <td>Alamat Sekolah</td>
  		<td width="18">:&nbsp;</td>
   		<td><?php echo $data['alamat_asal_sekolah']; ?></td>
 </tr>
 <tr class="dark">
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>
</tr>
        <tr valign="top">
   		<td>No. Telepon</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['tlp']; ?>
        <td>Tahun Lulus</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['tahun_lulus']; ?>		</td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>
</tr>
   		<tr valign="top">
   		<td>E-mail</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['email']; ?>
        <td>Nilai UN</td>
  		<td width="18">:&nbsp;</td>
  		<td><?php echo $data['nilai_un']; ?>		</td>
</tr>
<tr class="dark">
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>
</tr>
		
<tr>	
		<td>Password </td>
  		<td width="18">:&nbsp;</td>
 		<td ><?php echo $data['password']; ?></td>
		<td></td>
		<td></td>
		<td></td>
</tr>
<tr class="dark">
            <td></td>
			<td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>
</tr>
</table>

<tr>
	<td><a href="ubah_siswa.php?nis=<?php echo $data['nis']; ?>"><input type="button" value="Ubah" /></a></td>
</tr>

 <?php
    } else {
echo '<div class="wrapper row4">';
  echo '<div id="container" class="clear">'; 
    echo '<div id="content">';

echo '<h2>Akun Siswa</h2>';
        echo 'Anda harus login mengunakan akun siswa !!!';
    }
} else {
echo '<div class="wrapper row4">';
  echo '<div id="container" class="clear">'; 
    echo '<div id="content">';

echo '<h2>Akun Siswa</h2>';
    echo 'Anda harus login terlebih dahulu !!!';
}
?>
	<!-- akhir isiiiii -->
</div> 
<?php include "right.php"; ?>  
</div>	
</div>  
<?php include "footer.php"; ?>