<?php
require('../koneksi.php');

if (!isset($_SESSION['login_TL'])) {
  header("location: ../login.php");
}

$get_id_session = $_SESSION['get_id'];
$query_header_akun = mysqli_query($conn, "SELECT * FROM tb_admin WHERE id_admin = '$get_id_session'");
$get_data_akun = mysqli_fetch_assoc($query_header_akun);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
		<meta name="author" content="Coderthemes">

		<link rel="shortcut icon" href="../assets/images/favicon-indihome.png">

		<title>TELKOM AKSES WITEL BALAIKOTA MAKASSAR</title>

		<link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="../assets/js/modernizr.min.js"></script>

	</head>

	<body class="fixed-left">

		<!-- Begin page -->
		<div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                    <!-- <a href="index.php" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Team Leader</span></a> -->
                        <!-- Image Logo here -->
                        <a href="index.php" class="logo">
                            <i class="icon-c-logo"> <img src="../assets/images/logo_bg_white.png" height="42"/> </i>
                            <span><i class="icon-magnet icon-c-logo"></i>Team Leader</span>
                        </a>
                    </div>
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="../assets/images/admin/<?= $get_data_akun['foto_admin'] ?>" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href=""><strong><?= $get_data_akun['nama_admin'] ?></strong></a></li>
                                        <li class="divider"></li>
                                        <li><a href="" data-toggle="modal" data-target="#detail-profile" ><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
                                        <li><a href="" data-toggle="modal" data-target=".bs-example-modal-sm" ><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- MODAL DETAIL -->
            <div id="detail-profile" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog" style="width:40%;">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="custom-width-modalLabel"><strong>Detail</strong> </h4>
                        </div>
                        <div class="modal-body row" style="padding: 20px 50px 0 50px">
                            <div class="col-md-4">
                                <img src="../assets/images/admin/<?= $get_data_akun['foto_admin'] ?>" alt="user-img" class="img-circle" style="border: 1px solid; height: 100px;">
                            </div>
                            <div class="col-md-8">
                                <h4>Info Administrator</h4>
                                <p><b>Nama: </b><span class="namaView"><?= $get_data_akun['nama_admin'] ?></span></p>
                                <p><b>Jenis Kelamin: </b><span class="usernameView"><?= $get_data_akun['jekel_admin'] ?></span></p>
                                <p><b>Uesrname: </b><span class="usernameView"><?= $get_data_akun['username_admin'] ?></span></p>
                                <?php
                                if ($get_data_akun['status_admin']== "Aktif"){
                                ?>
                                    <p><b>Status: </b><span class="label label-success"><?= $get_data_akun['status_admin'] ?></span></p>
                                <?php
                                } else {
                                ?>
                                    <p><b>Status: </b><span class="label label-danger"><?= $get_data_akun['status_admin'] ?></span></p>
                                <?php
                                }
                                ?>
                                <hr>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->


            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="mySmallModalLabel">Logout Akun</h4>
                        </div>
                        <div class="modal-body">
                        <p>Yakin Ingin Logout Akun ?</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Batal</button>
                        <a href="../logout.php?logout=true&for=login_TL" type="button" class="btn btn-primary waves-effect waves-light">Logout</a>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->



            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="has_sub">
                                <a href="index.php" class="waves-effect"><i class="ti-home"></i> <span> Beranda </span></span></a>
                            </li>

                            <li class="has_sub">
                                <a href="teknisi.php" class="waves-effect"><i class="ti-id-badge"></i> <span> Teknisi </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="administrasi.php" class="waves-effect"><i class="ti-user"></i> <span> Mitra </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span>Laporan </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="laporan.php"><span>Data Order</span></span></a>
                                    </li>
                                    <li>
                                        <a href="data-sc.php"><span>Data SC</span></a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
			<!-- Left Sidebar End -->

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="content-page">
				<!-- Start content -->
				<div class="content">
					<div class="container">

						<!-- Page-Title -->
						<div class="row">
							<div class="col-sm-12">
                                <h4 class="page-title">Beranda</h4><br>
                                <a href="" class="list-group-item active">
                                    <h4 class="list-group-item-heading">Welcome,</h4>
                                    <p class="list-group-item-text">Selamat Datang Kembali <b><?= $get_data_akun['nama_admin'] ?></b>  </p>
                                </a>
                            </div>
                        </div> <br>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-3 bg-white">
                                    <i class="md md-assignment text-primary"></i>
                                    <?php
                                        $order = mysqli_query($conn, "SELECT * FROM tb_order WHERE mitra_id = '$get_data_akun[id_admin]'");
                                        $row_order = mysqli_num_rows($order);
                                        $row_order_final = $row_order;
                                    ?>
                                    <h2 class="m-0 text-dark counter font-600"><?= $row_order_final ?></h2>
                                    <div class="text-muted m-t-5">Data Orderan</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-3 bg-white">
                                    <i class="md md-assignment-turned-in text-success"></i>
                                    <?php
                                        $sc = mysqli_query($conn, "SELECT * FROM tb_sc WHERE mitra_id = '$get_data_akun[id_admin]'");
                                        $row_sc = mysqli_num_rows($sc);
                                        $row_sc_final = $row_sc;
                                    ?>
                                    <h2 class="m-0 text-dark counter font-600"><?= $row_sc_final ?></h2>
                                    <div class="text-muted m-t-5">Data SC</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-3 bg-white">
                                    <i class="md md-assignment-late text-danger"></i>
                                    <?php
                                        $sc_tolak = mysqli_query($conn, "SELECT * FROM tb_sc WHERE mitra_id = '$get_data_akun[id_admin]' AND status_sc = 'CANCEL'");
                                        $row_sc_tolak = mysqli_num_rows($sc_tolak);
                                        $row_sc_tolak_final = $row_sc_tolak;
                                    ?>
                                    <h2 class="m-0 text-dark counter font-600"><?= $row_sc_tolak_final ?></h2>
                                    <div class="text-muted m-t-5">SC Tolak</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-3 bg-white">
                                    <i class="md md-account-box text-warning"></i>
                                    <?php
                                        $teknisi = mysqli_query($conn, "SELECT * FROM tb_teknisi WHERE id_mitra = '$get_data_akun[id_admin]'");
                                        $row_teknisi = mysqli_num_rows($teknisi);
                                        $row_teknisi_final = $row_teknisi;
                                    ?>
                                    <h2 class="m-0 text-dark counter font-600"><?= $row_teknisi_final ?></h2>
                                    <div class="text-muted m-t-5">Teknisi</div>
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-lg-7">
                                <div class="portlet" style="background-color: firebrick;"><!-- /primary heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-uppercase">
                                            Data Orderan Terbaru
                                        </h3>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet3" class="" aria-expanded="true"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                        </div>
                                        <div class="clearfix">
                                        <a href="laporan.php" class="pull-right btn btn-success btn-sm waves-effect waves-light">Lihat Semua</a>
                                        </div>
                                    </div>

                                    <div id="portlet3" class="panel-collapse collapse in" aria-expanded="true">
                                        <div class="portlet-body" style="background-color: firebrick;">
                                            <div class="table-responsive">
                                                <div class="inbox-widget nicescroll " tabindex="100" style="overflow: hidden; max-height: 300px; min-height: 300px; outline: none;">
                                                <?php
                                                    $order_data = mysqli_query($conn, "SELECT * FROM tb_order WHERE status_order='PROCCESS' AND teknisi_id = '' AND mitra_id = '$get_data_akun[id_admin]' ");
                                                    $row_order_data = mysqli_num_rows($order_data);
                                                    if ($row_order_data < 1){
                                                        echo " <div class='container'>
                                                                    <h3 style='color: white; text-align: center;' ><i> - Tidak Ada Orderan Terbaru - </i></h3>
                                                                </div> ";
                                                    } else {
                                                    $i = 1; foreach($order_data as $dta_order_data) { ?>
                                                        <a href="#">
                                                            <div class="inbox-item card-box" style="padding: 10px; margin: 10px;">
                                                                <p class="inbox-item-author" style="font-size: 20px;"><strong><?= $dta_order_data['myir'] ?></strong></p>
                                                                <button class="pull-right btn btn-danger btn-sm waves-effect waves-light" data-toggle="modal" data-target="#modal-bagikan<?= $i ?>" >  <i class="fa fa-share"></i> Bagikan</button>
                                                                <p class="inbox-item-author">Nama : <?= $dta_order_data['nama_lengkap'] ?></p>
                                                                <?php
                                                                    $query_paket = mysqli_query($conn, "SELECT * FROM tb_paket WHERE id_paket = '$dta_order_data[paket_id]'");
                                                                    $get_data_paket = mysqli_fetch_assoc($query_paket);
                                                                    $nama_paket = $get_data_paket['nama_paket'];
                                                                    $kecepatan = $get_data_paket['kecepatan_paket'];
                                                                    $kuota_paket = $get_data_paket['kuota_paket'];
                                                                    $initPaket = $kecepatan . ", " . $kuota_paket . ", ". $nama_paket;
                                                                ?>
                                                                <p class="inbox-item-text"><?= $initPaket ?></p>
                                                                <p class="inbox-item-date"><?= $dta_order_data['tanggal'] ?></p>
                                                            </div>
                                                        </a>
    
                                                        <!-- MODAL BAGIKAN -->
                                                        <div id="modal-bagikan<?= $i ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                                            <div class="modal-dialog" style="width:55%;">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                        <h4 class="modal-title" id="custom-width-modalLabel">Bagikan Ke Teknisi</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="clearfix">
                                                                            <div class="pull-left">
                                                                            <h3 style="color: #850A05 ;" > <strong><?= $dta_order_data['myir'] ?></strong></h3>
                                                                            <h4><strong>Paket : </strong>
                                                                            <?php
                                                                                $query_paket = mysqli_query($conn, "SELECT * FROM tb_paket WHERE id_paket = '$dta_order_data[paket_id]'");
                                                                                $get_data_paket = mysqli_fetch_assoc($query_paket);
                                                                                $nama_paket = $get_data_paket['nama_paket'];
                                                                                $kecepatan = $get_data_paket['kecepatan_paket'];
                                                                                $kuota_paket = $get_data_paket['kuota_paket'];
                                                                                $initPaket = $kecepatan . ", " . $kuota_paket . ", ". $nama_paket;
                                                                            ?>
                                                                                <?= $initPaket ?>
                                                                            </h4>
                                                                            <h4> <strong> STO : </strong> <?= $dta_order_data['sto'] ?></h4>
                                                                            <?php
                                                                            if ($dta_order_data['status_order'] == "NEW"){
                                                                                echo "<span class='label label-primary'>PROCCESS</span>";
                                                                            } else if ($dta_order_data['status_order'] == "PROCCESS"){
                                                                                echo "<span class='label label-primary'>PROCCESS</span>";
                                                                            } else if ($dta_order_data['status_order'] == "DONE"){
                                                                                echo "<span class='label label-success'>DONE</span>";
                                                                            } else if ($dta_order_data['status_order'] == "CANCEL"){
                                                                                echo "<span class='label label-danger'>CANCEL</span>";
                                                                            }
                                                                            ?>
                                                                            </div>
                                                                            <div class="pull-right">
                                                                                <h4><?= $dta_order_data['tanggal'] ?></h4>
                                                                            </div>
                                                                        </div>
                                                            <hr>
                                                            <h4> <strong> Nama Lengkap : </strong> <?= $dta_order_data['nama_lengkap'] ?></h4>
                                                            <h4> <strong> Email : </strong> <?= $dta_order_data['email'] ?></h4>
                                                            <h4> <strong> Telpon : </strong> <?= $dta_order_data['telpon'] ?></h4>
                                                            <h4> <strong> Alamat : </strong> <?= $dta_order_data['alamat'] ?></h4>
                                                            <hr>
                                                            <h4>Paket <br>
                                                            <?php
                                                                $query_paket = mysqli_query($conn, "SELECT * FROM tb_paket WHERE id_paket = '$dta_order_data[paket_id]'");
                                                                $get_data_paket = mysqli_fetch_assoc($query_paket);
                                                                $nama_paket = $get_data_paket['nama_paket'];
                                                                $kecepatan = $get_data_paket['kecepatan_paket'];
                                                                $kuota_paket = $get_data_paket['kuota_paket'];
                                                                $initPaket = $kecepatan . ", " . $kuota_paket . ", ". $nama_paket;
                                                            ?>
                                                                <strong><?= $initPaket ?></strong>
                                                            </h4>
                                                                        <hr>
                                                                        <h4><strong>Pilih Mitra</strong></h4>
                                                                        <div class="inbox-widget nicescroll " tabindex="100" style="overflow: hidden; max-height: 250px; padding: 10px; min-height: 250px; background-color: cornsilk; outline: none;">
                                                                        <?php
                                                                            $teknisi_pilih = mysqli_query($conn, "SELECT * FROM tb_teknisi WHERE id_mitra = '$get_data_akun[id_admin]' AND status_teknisi = 'Aktif' ");
                                                                            $row_teknisi_pilih = mysqli_num_rows($teknisi_pilih);
                                                                            if ($row_teknisi_pilih < 1){
                                                                                echo " <div class='container'>
                                                                                            <h4 style='color: red; text-align: center;' ><i> - Teknisi tidak tersedia - </i></h4>
                                                                                        </div> ";
                                                                            } else {
                                                                            foreach($teknisi_pilih as $dta_order_data_teknisi) { ?>
                                                                            <div class="card-box m-b-10">
                                                                                <div class="table-box opport-box">
                                                                                    <div class="table-detail">
                                                                                        <img src="../assets/images/teknisi/<?= $dta_order_data_teknisi['foto_teknisi'] ?>" alt="img" class="img-circle thumb-lg m-r-15">
                                                                                    </div>
                                                                                    <div class="table-detail">
                                                                                        <div class="member-info">
                                                                                            <h4 class="m-t-0"><b><?= $dta_order_data_teknisi['nama_teknisi'] ?></b></h4>
                                                                                            <p class="text-dark m-b-5"><b>STO: </b> <span class="text-muted">PNK-ANT</span></p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="table-detail table-actions-bar">
                                                                                        <a href="#" data-toggle="modal" data-target="#pilih<?= $i ?><?= $dta_order_data_teknisi['id_teknisi'] ?>"  class="btn btn-sm btn-primary waves-effect waves-light">Pilih</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
    
                                                                            <!-- MODAL PILIH TEKNISI -->
                                                                            <div class="modal fade" tabindex="-1" id="pilih<?= $i ?><?= $dta_order_data_teknisi['id_teknisi'] ?>">
                                                                                <div class="modal-dialog">
                                                                                <div class="modal-content bg-primary">
                                                                                    <div class="modal-header">
                                                                                    <h4 class="modal-title" style="color: white;">Pilih Teknisi</h4>
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                    <p style="color: white;">Yakin Ingin Memilih <strong><?= $dta_order_data_teknisi['nama_teknisi'] ?> </strong> ?</p>
                                                                                    </div>
                                                                                    <div class="modal-footer justify-content-between">
                                                                                    <button type="button" class="btn btn-outline-light" style="background-color: silver;" data-dismiss="modal">Batal</button>
                                                                                    <a href="controller.php?kirim_order_teknisi=true&id_teknisi=<?= $dta_order_data_teknisi['id_teknisi'] ?>&id_order=<?= $dta_order_data['id_order'] ?>" type="button" class="btn btn-outline-light" style="background-color: white;">Kirim</a>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- /.modal-content -->
                                                                                </div>
                                                                                <!-- /.modal-dialog -->
                                                                            </div>
                                                                            <!-- /.modal -->
                                                                        <?php } } ?>
                                                                        </div>
    
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div><!-- /.modal -->
                                                        <?php $i = $i + 1; } } ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                            
                            <div class="col-lg-5">
                                <div class="portlet"><!-- /primary heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            Teknisi
                                        </h3>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2" class="" aria-expanded="true"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                        <a style="margin-left: 16px;" href="teknisi.php" class="btn btn-primary btn-sm waves-effect waves-light">Lihat Semua</a>
                                    <div id="portlet2" class="panel-collapse collapse in" aria-expanded="true">
                                        <div class="portlet-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Foto</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $teknisi1 = mysqli_query($conn, "SELECT * FROM tb_teknisi WHERE id_mitra ='$get_data_akun[id_admin]'");
                                                            $i = 1; foreach($teknisi1 as $dta_teknisi) { ?>
                                                        <tr>
                                                            <td><?= $i ?></td>
                                                            <td><img src="../assets/images/teknisi/<?= $dta_teknisi['foto_teknisi'] ?>" alt="contact-img" title="contact-img" class="img-circle thumb-sm"></td>
                                                            <td><?= $dta_teknisi['nama_teknisi'] ?></td>
                                                            <td>
                                                            <?php
                                                                            if ($dta_teknisi['status_teknisi']== "Aktif"){
                                                                            ?>
                                                                                <span class="label label-success"><?= $dta_teknisi['status_teknisi'] ?></span>
                                                                            <?php
                                                                            } else {
                                                                            ?>
                                                                                <span class="label label-danger"><?= $dta_teknisi['status_teknisi'] ?></span>
                                                                            <?php
                                                                            }
                                                                            ?>
                                                            </td>
                                                        </tr>
                                                        <?php $i = $i + 1; } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div>

                    </div> <!-- container -->
                </div> <!-- content -->

                <footer class="footer">
                Copyright 2021 PT Telkom Indonesia (Persero) Tbk All Right Reserved.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar nicescroll">
                <h4 class="text-center">Chat</h4>
                <div class="contact-list nicescroll">
                    <ul class="list-group contacts-list">
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-1.jpg" alt="">
                                </div>
                                <span class="name">Chadengle</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-2.jpg" alt="">
                                </div>
                                <span class="name">Tomaslau</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-3.jpg" alt="">
                                </div>
                                <span class="name">Stillnotdavid</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-4.jpg" alt="">
                                </div>
                                <span class="name">Kurafire</span>
                                <i class="fa fa-circle online"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-5.jpg" alt="">
                                </div>
                                <span class="name">Shahedk</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-6.jpg" alt="">
                                </div>
                                <span class="name">Adhamdannaway</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-7.jpg" alt="">
                                </div>
                                <span class="name">Ok</span>
                                <i class="fa fa-circle away"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-8.jpg" alt="">
                                </div>
                                <span class="name">Arashasghari</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-9.jpg" alt="">
                                </div>
                                <span class="name">Joshaustin</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                        <li class="list-group-item">
                            <a href="#">
                                <div class="avatar">
                                    <img src="../assets/images/users/avatar-10.jpg" alt="">
                                </div>
                                <span class="name">Sortino</span>
                                <i class="fa fa-circle offline"></i>
                            </a>
                            <span class="clearfix"></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Right-bar -->


        </div>
        <!-- END wrapper -->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/detect.js"></script>
        <script src="../assets/js/fastclick.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>
        <script src="../assets/js/jquery.blockUI.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/wow.min.js"></script>
        <script src="../assets/js/jquery.nicescroll.js"></script>
        <script src="../assets/js/jquery.scrollTo.min.js"></script>


        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

	</body>
</html>