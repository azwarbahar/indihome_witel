<?php
 require_once '../../koneksi.php';

 $id_teknisi = $_GET["id_teknisi"];
 $query = "SELECT * FROM tb_teknisi WHERE id_teknisi = '$id_teknisi' ";

 $result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
if ($row){
    $array = $row;
    echo json_encode(array("kode" => 1, "result_teknisi_id" => $array));
} else{
    echo json_encode(array("kode" => 0, "pesan" => "Data Akun tidak ditemukan"));
}

?>