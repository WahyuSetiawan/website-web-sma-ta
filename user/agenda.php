<?php include "header.php"; ?>
<?php include "menu_info.php"; ?>
<?php include "koneksi.php"; ?>


<div class="wrapper row4">
  <div id="container" class="clear"> 
    <!-- konten teks -->
    <div id="content">
<!-- isiiiii -->
<h2>Agenda</h2>
<?php
$result=mysql_query("SELECT * from agenda order by id_agenda desc");
while ($data=mysql_fetch_assoc($result)){


echo "<table>";
echo "<tbody>";
echo "<tr><td colspan=3><strong><h4 class=judul>$data[tema]</h4></strong></td></tr>";
echo "<tr>
		<td></td>
		<td></td>
		<td></td>
	</tr>";
echo "<tr>
		<td><b><span class=posting>Tanggal</b> </td>
		<td>&nbsp;:</td>
		<td><span class=posting>$data[tanggal] </td>
		</tr>";
echo "<tr>
		<td><b><span class=posting>Acara</b> </td>
		<td>&nbsp;:</td>
		<td><span class=posting>$data[acara] </td>
		</tr>";
echo "<tr>
		<td><b><span class=posting>Tempat</b> </td>
		<td>&nbsp;:</td>
		<td><span class=posting>$data[tempat] </td>
		</tr>";
echo "<tr>
		<td><b><span class=posting>Pukul</b> </td>
		<td>&nbsp;:</td>
		<td><span class=posting>$data[pukul] </td>
		</tr>
		</tbody></table><hr color=#CCC noshade=noshade />";
}
?>
<!-- akhir isiiiii -->
</div> 
<?php include "right.php"; ?>  
</div>	
</div>  
<?php include "footer.php"; ?>