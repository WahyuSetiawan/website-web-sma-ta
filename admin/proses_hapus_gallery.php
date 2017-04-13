<?php
    //file delete-gallery.php
    //koneksi ke database
    include "koneksi.php";
    if(isset($_GET['id_foto'])){
    $id = (int) $_GET['id_foto'];
    $sql = "select * from foto where id_foto='$id'";
    $result = mysql_query($sql);
    if(mysql_num_rows($result) > 0 ){
    $data = mysql_fetch_array($result);
    //delete file
    @unlink('photos/'.$data['nama_file']);
    //delete data di database
    mysql_query("delete from foto where id_foto='$id'");
    }
    }
    header("Location: tampil_gallery.php");
?>