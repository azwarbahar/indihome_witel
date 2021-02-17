<?php
 require_once '../../koneksi.php';
 $username_auth = $_GET["username_auth"];
 $password_auth = $_GET["password_auth"];
 $ray = array();
 $query = "SELECT * FROM tb_auth WHERE username_auth='$username_auth'";
 $sql = mysqli_query($conn, $query);
 $row_pass = mysqli_fetch_assoc($sql);
 if ($row_pass){
    if (password_verify($password_auth, $row_pass["password_auth"])) {
        $ray=$row_pass;
        echo json_encode(array("kode" => 1, "auth_user" => $ray));
    } else{
        echo json_encode(array("kode" => 2, "pesan" => "Password tidak sesuai"));
    }
 } else {
    echo json_encode(array("kode" => 0, "pesan" => "Username tidak ditemukan"));
 }
?>