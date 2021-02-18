<?php
require('../koneksi.php');
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
                        <a href="index.html" class="logo"><i class="icon-magnet icon-c-logo"></i><span>Telkom Akses</span></a>
                        <!-- Image Logo here -->
                        <!-- <a href="index.html" class="logo">
                            <i class="icon-c-logo"> <img src="../assets/images/logo_sm.png" height="42"/> </i>
                            <span><img src="../assets/images/logo_light.png" height="20"/></span>
                        </a> -->
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
                                    <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="../assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href=""><strong>Admin</strong></a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
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
                        <a href="../logout.php?logout=true&for=login_TA" type="button" class="btn btn-primary waves-effect waves-light">Logout</a>
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
                                <a href="mitra.php" class="waves-effect"><i class="ti-briefcase"></i> <span> Mitra </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="laporan.php" class="waves-effect"><i class="ti-files"></i> <span> Laporan </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="administrasi.php" class="waves-effect"><i class="ti-user"></i> <span> Administrasi </span></a>
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
                                <h4 class="page-title">Beranda</h4>
                                <a href="" class="list-group-item active">
                                    <h4 class="list-group-item-heading">Welcome,</h4>
                                    <p class="list-group-item-text">Selamat Datang Kembali <b>Admin</b>  </p>
                                </a>
                            </div>
                        </div> <br>

                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-assignment-returned text-primary"></i>
                                    <h2 class="m-0 text-dark counter font-600">100</h2>
                                    <div class="text-muted m-t-5">Proses</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-assignment-turned-in text-success"></i>
                                    <h2 class="m-0 text-dark counter font-600">100</h2>
                                    <div class="text-muted m-t-5">Selesai</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="widget-panel widget-style-2 bg-white">
                                    <i class="md md-assignment-late text-danger"></i>
                                    <h2 class="m-0 text-dark counter font-600">100</h2>
                                    <div class="text-muted m-t-5">Batal</div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-5">
                                <div class="portlet"><!-- /primary heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-dark text-uppercase">
                                            Mitra
                                        </h3>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2" class="" aria-expanded="true"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="portlet2" class="panel-collapse collapse in" aria-expanded="true">
                                        <div class="portlet-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>STO</th>
                                                            <th>Status</th>
                                                            <th>Leader</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $mitra = mysqli_query($conn, "SELECT * FROM tb_admin WHERE role_admin='TL'");
                                                            $i = 1; foreach($mitra as $dta) { ?>
                                                        <tr>
                                                            <td><?= $i ?></td>
                                                            <td>PNK-ANT</td>
                                                            <td><span class="label label-success">Aktif</span></td>
                                                            <td><?= $dta['nama_admin'] ?></td>
                                                        </tr>
                                                        <?php $i = $i + 1; } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-7" ">
                                <div class="portlet" style="background-color: firebrick;"><!-- /primary heading -->
                                    <div class="portlet-heading">
                                        <h3 class="portlet-title text-uppercase">
                                            Data Orderan Terbaru
                                        </h3>
                                        <div class="portlet-widgets">
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#portlet3" class="" aria-expanded="true"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div id="portlet3" class="panel-collapse collapse in" aria-expanded="true">
                                        <div class="portlet-body" style="background-color: firebrick;">
                                            <div class="table-responsive">
                                                <div class="inbox-widget nicescroll " tabindex="100" style="overflow: hidden; max-height: 300px; min-height: 300px; outline: none;">
                                                <?php
                                                    $order = mysqli_query($conn, "SELECT * FROM tb_order WHERE status_order='NEW'");
                                                    $i = 1; foreach($order as $dta) { ?>
                                                    <a href="#">
                                                        <div class="inbox-item card-box" style="padding: 10px; margin: 10px;">
                                                            <!-- <div class="inbox-item-img"><img src="../assets/images/users/avatar-1.jpg" class="img-circle" alt=""></div> -->
                                                            <p class="inbox-item-author" style="font-size: 20px;"><strong><?= $dta['myir'] ?></strong></p>
                                                            <p class="inbox-item-author">Nama : <?= $dta['nama_lengkap'] ?></p>
                                                            <?php
                                                                $query_paket = mysqli_query($conn, "SELECT * FROM tb_paket WHERE id_paket = '$dta[paket_id]'");
                                                                $get_data_paket = mysqli_fetch_assoc($query_paket);
                                                                $nama_paket = $get_data_paket['nama_paket'];
                                                                $kecepatan = $get_data_paket['kecepatan_paket'];
                                                                $kuota_paket = $get_data_paket['kuota_paket'];
                                                                $initPaket = $kecepatan . ", " . $kuota_paket . ", ". $nama_paket;
                                                            ?>
                                                            <p class="inbox-item-text"><?= $initPaket ?></p>
                                                            <p class="inbox-item-date"><?= $dta['tanggal'] ?></p>
                                                        </div>
                                                    </a>
                                                    <?php $i = $i + 1; } ?>
                                                </div>
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