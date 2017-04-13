<?php include './header.php'; ?>
<?php include './tray_home.php'; ?>
<div id="content" class="box">
<h2>Data Admin</h2>
        <p><a href="tambah_admin.php"><img src="icon/t.png" alt="" width="15" /> Tambah Admin</a></p>
        <table scope="col" border="1">
            <tr style="background:#ccc">
				<th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th align="center" scope="col">Aksi</th>
            </tr>
            <?php
            $sql = "
SELECT * from admin 
order by id_admin asc";
            $hasil = mysql_query($sql) or exit("Error query: <b>" . $sql . "</b>.");
            while ($data = mysql_fetch_assoc($hasil)) {
                ?>
                <tr>
                    <td align="center">
                    <?php echo $data['id_admin']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['username']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td scope="col">
                       <p align="center">

						<a href="hapus_admin.php?id_admin=<?php echo $data['id_admin']; ?>" onClick="return confirm('Hapus data ini ?')"><img src="icon/h.png" alt="" width="15" /></a>

					</p>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
</div>
<?php include "footer.php"; ?>