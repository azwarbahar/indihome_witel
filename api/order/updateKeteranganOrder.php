<?php
 require_once '../../koneksi.php';

 $id_order = $_POST["id_order"];
 $status_order = $_POST["status_order"];
 $keterangan = $_POST["keterangan"];
 $query = "UPDATE tb_order SET status_order = '$status_order',
							    keterangan = '$keterangan' WHERE id_order = '$id_order'";
//  $result = mysqli_query($conn, $query);
 $exeQuery =  mysqli_query($conn, $query);
 echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Menambahkan Data'
 )) : json_encode(array('kode' => 2, 'pesan' => 'Proses gagal'));
?>