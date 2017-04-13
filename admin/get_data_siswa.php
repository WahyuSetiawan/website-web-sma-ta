<?php
include './koneksi.php';
header('Content-Type: application/json');

if(isset($_GET['id'])){
    getNISdata($_GET['id']);
}

function getNISdata($id) {
    $sql = "select * from data_casis where nis = '" . $id . "'";
    $data = mysql_query($sql);
    $data = mysql_fetch_assoc($data);
    echo json_encode($data);
}