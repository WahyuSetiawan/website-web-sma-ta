<?php include "header.php"; ?>
<?php include "menu_guru.php"; ?>
<?php include "koneksi.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Education Time
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Education Time | Style Demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
</head>
<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- konten teks -->
    <div id="content">
<!-- isiiiii -->
<h2>Direktori Staff</h2>
      <table summary="Summary Here" cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th>NIK</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Jabatan</th>
			<th>Detail</th>
          </tr>
        </thead>
		
<?php
$sql = "
SELECT s.nik,s.nama,s.j_kelamin,s.agama,s.jabatan
FROM staff s
order by nama asc";
$hasil = mysql_query($sql) or exit("Error query: <b>" . $sql . "</b>.");
while ($data = mysql_fetch_assoc($hasil)) {
?>
        <tbody>
          <tr class="light">
            <td><?php echo $data['nik']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['j_kelamin']; ?></td>
			<td><?php echo $data['agama']; ?></td>
			<td><?php echo $data['jabatan']; ?></td>
			<td align="center"><a href="detail_staff.php?nik=<?php echo $data['nik']; ?>"><img src="../admin/icon/d.png" alt="" width="15" />&nbsp;&nbsp;</a></td>
          </tr>
		  <tr class="dark">
            <td></td>
            <td></td>
            <td></td>
			<td></td>
			<td></td>
			<td></td>
          </tr>
        </tbody>
<?php
}
?>
      </table>
<!-- akhir isiiiii -->
</div> 
<?php include "right.php"; ?>  
</div>	
</div>  
<?php include "footer.php"; ?>