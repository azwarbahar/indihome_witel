<?php
require('../koneksi.php');
if (!isset($_SESSION['login_TA'])) {
    header("location: ../login.php");
  }
  $get_id_session = $_SESSION['get_id'];
  $query_header_akun = mysqli_query($conn, "SELECT * FROM tb_admin WHERE id_admin = '$get_id_session'");
  $get_data_akun = mysqli_fetch_assoc($query_header_akun);
$order = mysqli_query($conn, "SELECT * FROM tb_order ORDER BY id_order DESC");
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

        <!-- DataTables -->
        <link href="../assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

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
                            <span><i class="icon-magnet icon-c-logo"></i>Telkom Akses</span>
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
                                <h4 class="page-title">Laporan</h4><br>
                                <ol class="breadcrumb">
									<li>
										<a href="index.php">Beranda</a>
									</li>
									<li class="active">
										Laporan
									</li>
								</ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <h4 class="m-t-0 header-title"><b>Data Laporan</b></h4>
                                    <br>
                                    <!-- <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light m-t-10 m-b-20" data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-plus-circle"></i> &nbsp;Tambah Mitra</button> -->
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th style="text-align:center">MYIR</th>
                                            <th>Nama</th>
                                            <th>Telpon</th>
                                            <th>STO</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1; foreach($order as $dta) { ?>
                                            <tr>
                                                <td style="text-align:center"><?= $dta['myir'] ?></td>
                                                <td><?= $dta['nama_lengkap'] ?></td>
                                                <td><?= $dta['telpon'] ?></td>
                                                <td><?= $dta['sto'] ?></td>
                                                <td><?= $dta['tanggal'] ?></td>
                                                <?php
                                                if ($dta['status_order'] == "NEW"){
                                                    echo "<td style='text-align:center'><span class='label label-primary'>PROCCESS</span></td>";
                                                } else if ($dta['status_order'] == "PROCCESS"){
                                                    echo "<td style='text-align:center'><span class='label label-primary'>PROCCESS</span></td>";
                                                } else if ($dta['status_order'] == "DONE"){
                                                    echo "<td style='text-align:center'><span class='label label-success'>DONE</span></td>";
                                                } else if ($dta['status_order'] == "CANCEL"){
                                                    echo "<td style='text-align:center'><span class='label label-danger'>CANCEL</span></td>";
                                                }
                                                ?>
                                                <td style="text-align:center">
                                                <button class="btn btn-icon waves-effect waves-light btn-primary" data-toggle="modal" data-target="#detail-modal<?= $i ?>"> <i class="fa fa-eye"></i> Detail</button>
                                                </td>
                                            </tr>

                                            <!-- MODEL DETAIL -->
                                            <div id="detail-modal<?= $i ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                                <div class="modal-dialog" style="width:55%;">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h3 class="modal-title" id="custom-width-modalLabel"><strong>Detail Order</strong></h3>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="clearfix">
                                                            <div class="pull-left">
                                                            <h3 style="color: #850A05 ;" > <strong><?= $dta['myir'] ?></strong></h3>
                                                            <h4> <strong> STO : </strong> <?= $dta['sto'] ?></h4>
                                                            <?php
                                                            if ($dta['status_order'] == "NEW"){
                                                                echo "<span class='label label-primary'>PROCCESS</span>";
                                                            } else if ($dta['status_order'] == "PROCCESS"){
                                                                echo "<span class='label label-primary'>PROCCESS</span>";
                                                            } else if ($dta['status_order'] == "DONE"){
                                                                echo "<span class='label label-success'>DONE</span>";
                                                            } else if ($dta['status_order'] == "CANCEL"){
                                                                echo "<span class='label label-danger'>CANCEL</span>";
                                                            }
                                                            ?>
                                                            </div>
                                                            <div class="pull-right">
                                                                <h4><?= $dta['tanggal'] ?></h4>
                                                            </div>
                                                        </div>
                                                            <hr>
                                                            <h4> <strong> Nama Lengkap : </strong> <?= $dta['nama_lengkap'] ?></h4>
                                                            <h4> <strong> Email : </strong> <?= $dta['email'] ?></h4>
                                                            <h4> <strong> Telpon : </strong> <?= $dta['telpon'] ?></h4>
                                                            <h4> <strong> Alamat : </strong> <?= $dta['alamat'] ?></h4>
                                                            <hr>
                                                            <h4>Paket <br>
                                                            <?php
                                                                $query_paket = mysqli_query($conn, "SELECT * FROM tb_paket WHERE id_paket = '$dta[paket_id]'");
                                                                $get_data_paket = mysqli_fetch_assoc($query_paket);
                                                                $nama_paket = $get_data_paket['nama_paket'];
                                                                $kecepatan = $get_data_paket['kecepatan_paket'];
                                                                $kuota_paket = $get_data_paket['kuota_paket'];
                                                                $initPaket = $kecepatan . ", " . $kuota_paket . ", ". $nama_paket;
                                                            ?>
                                                                <strong><?= $initPaket ?></strong>
                                                            </h4>
                                                            <?php
                                                                $id_mitra = $dta['mitra_id'];
                                                                if (!$id_mitra == ""){
                                                                    $query_mitra = mysqli_query($conn, "SELECT * FROM tb_admin WHERE id_admin = '$dta[mitra_id]' AND role_admin = 'TL'");
                                                                    $get_data_mitra = mysqli_fetch_assoc($query_mitra);
                                                                    echo "<hr>
                                                                        <h4 style='color: #850A05 ;' > <strong> Mitra</strong></h4>
                                                                        <div class='contact-card'>
                                                                            <a class='pull-left' href='#'>
                                                                                <img class='img-circle' src='../assets/images/admin/$get_data_mitra[foto_admin]' alt=''>
                                                                            </a>
                                                                            <div class='member-info'>
                                                                                <h4 class='m-t-0 m-b-5 header-title'><b>$get_data_mitra[nama_admin]</b></h4>
                                                                                <p class='text-muted'>$get_data_mitra[jekel_admin]</b> </p>
                                                                                <p class='text-dark'><i class='md md-business m-r-10'></i><small>$dta[sto]</b></small></p>
                                                                            </div>
                                                                        </div>";
                                                                }
                                                            ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->

                                        <?php $i = $i + 1; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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

        <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.bootstrap.js"></script>

        <script src="../assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.bootstrap.min.js"></script>
        <script src="../assets/plugins/datatables/jszip.min.js"></script>
        <script src="../assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="../assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="../assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="../assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.keyTable.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="../assets/plugins/datatables/responsive.bootstrap.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.scroller.min.js"></script>
        <script src="../assets/plugins/datatables/dataTables.colVis.js"></script>
        <script src="../assets/plugins/datatables/dataTables.fixedColumns.min.js"></script>

        <script src="../assets/pages/datatables.init.js"></script>


        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({keys: true});
        $('#datatable-responsive').DataTable();
        $('#datatable-colvid').DataTable({
            "dom": 'C<"clear">lfrtip',
            "colVis": {
                "buttonText": "Change columns"
            }
        });
        $('#datatable-scroller').DataTable({
            ajax: "assets/plugins/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
        var table = $('#datatable-fixed-col').DataTable({
            scrollY: "300px",
            scrollX: true,
            scrollCollapse: true,
            paging: false,
            fixedColumns: {
                leftColumns: 1,
                rightColumns: 1
            }
        });
    });
    TableManageButtons.init();

</script>

	</body>
</html>