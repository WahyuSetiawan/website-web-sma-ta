<?php 
include "koneksi.php";
include "config/library.php";
include "config/fungsi_thumb.php";
include "config/fungsi_indotgl.php";
?>
<body>
    <?php include "all_gurudansiswa.php"; ?>
    <div id="content" class="box">
        <h2>Data Guru</h2>
        <p><a href="tambah_data_guru.php"><img src="icon/t.png" alt="" width="15" /> Tambah Data Guru Sekolah</a></p>
        <table scope="col" border="1">
            <tr style="background:#ccc">
                <th scope="col">NIP</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Agama</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Pelajaran</th>
                <th scope="col">Alamat</th>
                <th scope="col">Telepon</th>
                <th width="75">Aksi</th>
            </tr>
            <?php
            $sql = "
SELECT g.nip,g.nama,g.j_kelamin,g.tmp_lahir,g.tgl_lahir,g.agama,g.jabatan,g.mapel,g.alamat,g.tlp
FROM guru g
order by nama asc";
            $hasil = mysql_query($sql) or exit("Error query: <b>" . $sql . "</b>.");
            while ($data = mysql_fetch_assoc($hasil)) {
                ?>
                <tr>
                    <td align="center">
                        <?php echo $data['nip']; ?></td>
                    <td><?php echo $data['nama']; ?></td>
                    <td><?php echo $data['j_kelamin']; ?></td>
                    <td><?php echo $data['tmp_lahir']; ?></td>
                    <td><?php echo $data['tgl_lahir']; ?></td>
                    <td><?php echo $data['agama']; ?></td>
                    <td><?php echo $data['jabatan']; ?></td>
                    <td><?php echo $data['mapel']; ?></td>
                    <td><?php echo $data['alamat']; ?></td>
                    <td><?php echo $data['tlp']; ?></td>
                    <td scope="col">
                       <p><a href="detail_data_guru.php?nip=<?php echo $data['nip']; ?>"><img src="icon/d.png" alt="" width="15" />&nbsp;&nbsp;</a>

						<a href="ubah_data_guru.php?nip=<?php echo $data['nip']; ?>"><img src="icon/u.png" alt="" width="15" />&nbsp;&nbsp;</a>

						<a href="hapus_data_guru.php?nip=<?php echo $data['nip']; ?>" onClick="return confirm('Hapus data ini ?')"><img src="icon/h.png" alt="" width="15" /></a>

					</p>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </div>
    <?php include "footer.php"; ?>