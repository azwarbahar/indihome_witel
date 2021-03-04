<?php
 require_once '../../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $myir = "MYIR-".$_POST['myir'];
    $nama_lengkap= $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $sto = "PNK-ANT";
    $status_order = "NEW";
    $paket_id = $_POST['paket_id'];
    $sales_id = $_POST['sales_id'];
    $teknisi_id = null;
    $mitra_id = null;
    $keterangan = "";

    $query = "INSERT INTO tb_order values(null,'$myir',
                                            '$nama_lengkap',
                                            '$email',
                                            '$telpon',
                                            '$alamat',
                                            '$sto',
                                            '$status_order',
                                            null,
                                            '$paket_id',
                                            '$sales_id',
                                            '$teknisi_id',
                                            '$mitra_id',
                                            '$keterangan')";

    $exeQuery =  mysqli_query($conn, $query);
    echo ($exeQuery) ? json_encode(array('kode' =>1, 'pesan' => 'Berhasil Menambahkan Data'
    )) : json_encode(array('kode' => 2, 'pesan' => 'Data Gagal Ditambahkan'));
} else {
    echo json_encode(array(' kode ' =>101, ' pesan ' => ' Request Tidak Valid' ));
}

?>