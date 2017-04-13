<?php 
	include "koneksi.php";
?>
<body>
<?php 
	include "all_profil.php";
?>
<div id="content" class="box">
<h2>Struktur Organisasi</h2>
<p><a href="ubah_struktur.php"><img src="icon/u.png" alt="" width="15" /> Ubah Struktur Organisasi Sekolah</a></p>

<?php
$sql = "SELECT * FROM struktur";
$hasil = mysql_query($sql) or exit("Error query: <b>".$sql."</b>.");
while($data = mysql_fetch_assoc($hasil)){
?>
<tr>
    <td align="center"><?php echo "<img src='gambar_struktur/$data[gbr_struktur]' width=650 height=650 alt=''>" ?></td>
</tr>
<?php
}
?>
</table>
</div>
<?php include "footer.php"; ?>