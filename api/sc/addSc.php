<?php
 require_once '../../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $randNumber =  rand(1000, 9999);
    $kode_sc = "SC-". $randNumber;
    $order_id = $_POST['order_id'];
    $myir_sc = $_POST['myir_sc'];
    $nama_sc= $_POST['nama_sc'];
    $sto_sc = $_POST['sto_sc'];
    $telpon_sc = $_POST['telpon_sc'];
    $alamat_sc = $_POST['alamat_sc'];
    $keterangan_sc = $_POST['keterangan_sc'];
    $teknisi_id = $_POST['teknisi_id'];
    $status_sc = $_POST['status_sc'];

    $query = "INSERT INTO tb_sc values('','$kode_sc',
                                            '$order_id',
                                            '$myir_sc',
                                            '$nama_sc',
                                            '$sto_sc',
                                            '$telpon_sc',
                                            '$alamat_sc',
                                            '$keterangan_sc',
                                            null,
                                            '$teknisi_id',
                                            '$status_sc')";

    $exeQuery =  mysqli_query($conn, $query);
    echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Menambahkan Data'
    )) : json_encode(array('kode' => 2, 'pesan' => 'Proses gagal'));
} else {
    echo json_encode(array(' kode ' =>101, ' pesan ' => ' Request Tidak Valid' ));
}

?>