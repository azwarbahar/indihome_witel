<?php
 require_once '../../koneksi.php';

 $teknisi_id = $_GET["teknisi_id"];
 $status_order = $_GET["status_order"];
if ($status_order == "RIWAYAT"){
   $query = "SELECT * FROM tb_order WHERE ( status_order = 'DONE' OR status_order = 'CANCEL' ) AND teknisi_id = '$teknisi_id' ORDER BY id_order DESC";
} else {
   $query = "SELECT * FROM tb_order WHERE status_order = 'PROCCESS' AND teknisi_id = '$teknisi_id' ORDER BY id_order DESC";
}

 $result = mysqli_query($conn, $query);

 $array = array();
 while($row = mysqli_fetch_assoc($result)){
    $array[] = $row;
 }

 echo ($result) ?
 json_encode(array("kode" => 1, "order_teknisi" => $array)) :
 json_encode(array("kode" => 0, "pesan" => "Data tidak ditemukan"));
?>