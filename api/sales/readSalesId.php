<?php
 require_once '../../koneksi.php';

 $id_sales = $_GET["id_sales"];
 $query = "SELECT * FROM tb_sales WHERE id_sales = '$id_sales' ";

 $result = mysqli_query($conn, $query);

//  $array = array();
 while($row = mysqli_fetch_assoc($result)){
     $array = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "result_sales_id" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "Data tidak ditemukan"));
?>