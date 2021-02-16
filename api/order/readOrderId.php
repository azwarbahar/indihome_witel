<?php
 require_once '../../koneksi.php';

 $id_order = $_GET["id_order"];
 $query = "SELECT * FROM tb_order WHERE id_order = '$id_order'";

 $result = mysqli_query($conn, $query);

 while($row = mysqli_fetch_assoc($result)){
     $array = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "result_order_id" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "Data tidak ditemukan"));
?>