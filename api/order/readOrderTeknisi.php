<?php
 require_once '../../koneksi.php';

 $status_order = $_GET["status_order"];
 $teknisi_id = $_GET["teknisi_id"];

 $query = "SELECT * FROM tb_order WHERE status_order='$status_order' AND teknisi_id='$teknisi_id' ORDER BY id_order DESC";

 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
    $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "order" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "Data tidak ditemukan"));
?>