<?php
 require_once '../../koneksi.php';

 $sales_id = $_GET["sales_id"];
 $order_all = mysqli_query($conn,"SELECT * FROM tb_order WHERE sales_id = '$sales_id'");
 $order_done = mysqli_query($conn,"SELECT * FROM tb_order WHERE status_order = 'DONE' AND sales_id = '$sales_id'");

 $row_order_all = mysqli_num_rows($order_all);
 $row_order_done = mysqli_num_rows($order_done);

     $resul_row = (object)['row_order_all' => $row_order_all,
                    'row_order_done' => $row_order_done
        ];

 echo ($row_order_all) ?
 json_encode(array("kode" => 1, "result_row" => $resul_row)) :
 json_encode(array("kode" => 0, "pesan" => "Data tidak ditemukan"));
?>