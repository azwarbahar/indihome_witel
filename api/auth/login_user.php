<?php
 require_once '../../koneksi.php';

 $username_auth = $_GET["username_auth"];
 $password_auth = $_GET["password_auth"];
 $ray = array();
 $query = "SELECT * FROM tb_auth WHERE username_auth='$username_auth'";
 $sql = mysqli_query($conn, $query);
 if ($sql){
    $row_pass = mysqli_fetch_assoc($sql);
    if (password_verify($password_auth, $row_pass["password_auth"])) {
            $ray=$row_pass;
    }
    echo json_encode($ray);
    mysqli_close($conn);
 }

?>