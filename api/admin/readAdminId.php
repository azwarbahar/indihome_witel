<?php
 require_once '../../koneksi.php';

 $id_admin = $_GET["id_admin"];
 $role_admin = $_GET["role_admin"];
 $query = "SELECT * FROM tb_admin WHERE id_admin = '$id_admin' AND role_admin = '$role_admin'";

 $result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
if ($row){
    $array = $row;
    echo json_encode(array("kode" => 1, "result_admin_id" => $array));
} else{
    echo json_encode(array("kode" => 0, "pesan" => "Data Mitra tidak ditemukan"));
}

?>