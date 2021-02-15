<?php
 require_once '../../koneksi.php';

 $id_paket = $_GET["id_paket"];
 $query = "SELECT * FROM tb_paket WHERE id_paket = '$id_paket' ";

 $result = mysqli_query($conn, $query);

//  $array = array();
 while($row = mysqli_fetch_assoc($result)){
     $array = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "result_paket_id" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "Data tidak ditemukan"));
?>