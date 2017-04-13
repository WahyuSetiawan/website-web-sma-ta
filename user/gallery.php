<?php include "header.php"; ?>
<?php include "menu_arsip.php"; ?>
<?php include "koneksi.php"; ?>

<script type="text/javascript" charset="utf-8">
    $(document).ready(function () {
        $("a[rel^='prettyPhoto']").prettyPhoto();
    });
</script>

<body id="top">
    <div class="wrapper row4">
        <div id="container" class="clear"> 
            <!-- ########### -->
            <div id="gallery" class="clear">
                <div class="gallerycontainer clear">
                    <div class="fl_left">
                        <h2 class="title">Gallery</h2>
                        <p class="readmore"><a href="#">View All &raquo;</a></p>
                    </div>
                    <div class="fl_right">
                        <ul>
                            <!-- isi --> 
                            <?php
                            $sql = "SELECT id_foto,gbr_foto,jdl_foto,jdl_album from foto f, album a where ((f.id_album=a.id_album)) order by id_foto desc limit 20";
                            $hasil = mysql_query($sql) or exit("Error query: <b>" . $sql . "</b>.");
                            while ($data = mysql_fetch_assoc($hasil)) {
                                ?>
                                <!-- isi -->

                                <a href="../admin/photos/<?php echo $data[gbr_foto] ?>" rel="prettyPhoto[pp_gal]"><img src="../admin/photos/<?php echo $data[gbr_foto] ?>" width="60" height="60" alt="<?php echo $data['jdl_foto'];?>" /></a>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <!-- ########### --> 
            </div>
            <!-- ####################################################################################################### -->
            <div class="pagination">
                <ul>
                    <li class="prev"><a href="#">&laquo; Previous</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="splitter">&hellip;</li>
                    <li><a href="#">6</a></li>
                    <li class="current">7</li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li class="splitter">&hellip;</li>
                    <li><a href="#">14</a></li>
                    <li><a href="#">15</a></li>
                    <li class="next"><a href="#">Next &raquo;</a></li>
                </ul>
            </div>
            <!-- ####################################################################################################### -->
            <div class="clear"></div>
        </div>
    </div>
    <!-- akhir isiiiii --> 
    <?php include "footer.php"; ?>