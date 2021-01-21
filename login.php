<?php
require 'koneksi.php';

if (isset($_COOKIE['login_TA'])) $_SESSION['login_TA'] = $_COOKIE['login_TA'];
else if (isset($_COOKIE['login_TL'])) $_SESSION['login_TL'] = $_COOKIE['login_TL'];

if (isset($_COOKIE['get_id'])) $_SESSION['get_id'] = $_COOKIE['get_id'];

if (isset($_SESSION['login_TA'])) header("location: telkom-akses/");
else if (isset($_SESSION['login_TL'])) header("location: team-leader/");

$password = null;
$username = null;
$err_user = false;
$err_pass = false;
$err_stss = false;

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username_admin = '$username' AND status_admin = 'Aktif'");
  $get = mysqli_fetch_assoc($result);

  if ($get) {
    $get_password = $get['password_admin'];
    $get_id = $get['id_admin'];
    $role_admin = $get['role_admin'];
    $status = $get['status_admin'];

    if (password_verify($password, $get_password)) {
      $_SESSION['get_id'] = $get_id;
      setcookie('get_id', $get_id, time()+172800);

      if ($role_admin == 'TA') {
        if ($status != 'Aktif') $err_stss = true;
        else {
          $_SESSION['login_TA'] = $get_password;
          if (isset($_POST['remember'])) {
            setcookie('login_TA', $get_password, time()+172800);
          }
          header("location: telkom-akses/");
          exit();
        }
      } else if ($role_admin == 'TL') {
        if ($status != 'Aktif') $err_stss = true;
        else {
          $_SESSION['login_TL'] = $get_password;
          if (isset($_POST['remember'])) {
            setcookie('login_TL', $get_password, time()+172800);
          }
          header("location: team-leader/");
          exit();
        }
      }
    } else $err_pass = true;
  } else $err_user = true;
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Login | Indihome</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
        	<div class=" card-box">
            <div class="panel-heading">
                <h3 class="text-center"> Login to <strong class="text-custom">Admin</strong> </h3>
            </div>


            <div class="panel-body">
            <form method="POST" class="form-horizontal m-t-20">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="username" id="username" tabindex="1" required autofocus placeholder="Username">
                    </div>
                    <?php if ($err_user == true) { ?>
                        <div class="text-danger">
                        Username tidak ditemukan
                        </div>
                    <?php } ?>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" id="password" name="password" tabindex="2" required type="password" placeholder="Password">
                    </div>
                    <?php if ($err_pass == true) { ?>
                    <div class="text-danger">
                    Password tidak sesuai
                    </div>
                    <?php } ?>

                    <?php if ($err_stss == true) { ?>
                    <div class="text-danger">
                    Akun belum diverifikasi atau sedang dinonaktifkan
                    </div>
                    <?php } ?>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button name="login" class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
	
	</body>
</html>