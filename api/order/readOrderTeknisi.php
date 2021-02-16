<?php
 require_once '../../koneksi.php';

 $teknisi_id = $_GET["teknisi_id"];

 $query = "SELECT * FROM tb_order WHERE teknisi_id = '$teknisi_id' ORDER BY id_order DESC";

 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
    $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "order_teknisi" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "Data tidak ditemukan"));
?>