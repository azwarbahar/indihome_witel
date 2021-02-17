<?php
 require_once '../../koneksi.php';

 $status_order = $_GET["status_order"];
 $sales_id = $_GET["sales_id"];
 if ($status_order == "PROCCESS"){
   $query = "SELECT * FROM tb_order WHERE status_order='PROCCESS' OR status_order='NEW' AND sales_id='$sales_id' ORDER BY id_order DESC";
 } else{
   $query = "SELECT * FROM tb_order WHERE status_order='$status_order' AND sales_id='$sales_id' ORDER BY id_order DESC";
 }

 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
    $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "order" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "Data tidak ditemukan"));
?>