<?php
require('../koneksi.php');
if (!isset($_SESSION['login_TL'])) {
    header("location: ../login.php");
  }
  $get_id_session = $_SESSION['get_id'];
  $query_header_akun = mysqli_query($conn, "SELECT * FROM tb_admin WHERE id_admin = '$get_id_session'");
  $get_data_akun = mysqli_fetch_assoc($query_header_akun);
  $sales = mysqli_query($conn, "SELECT * FROM tb_sales");
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

        <link href="../assets/plugins/smoothproducts/css/smoothproducts.css" rel="stylesheet" type="text/css" />

        <!-- Plugins css-->
        <link href="../assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link href="../assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
        <link href="../assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />
        <link href="../assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />


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
                                <a href="sales.php" class="waves-effect"><i class="ti-id-badge"></i> <span> Sales </span></a>
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
                                <h4 class="page-title">Sales</h4><br>
                                <ol class="breadcrumb">
									<li>
										<a href="index.php">Beranda</a>
									</li>
									<li class="active">
                                    Sales
									</li>
								</ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">

                                    <!-- MODAL TABAH ADMIN -->
                                    <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title">Tambah Sales</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="controller.php" enctype="multipart/form-data">
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="nb-edt form-control" required="" autocomplete="off" placeholder="Nama Lengkap" name="nama_sales" id="nama_sales">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Foto</label>
                                                            <div class="col-sm-9 bootstrap-filestyle">
                                                                <input type="file" class="filestyle" data-placeholder="Belum ada foto" name="foto_sales" id="foto_sales" required="">
                                                                <div class="row text-info" id="viewProgress" hidden="">
                                                                    <span class="col-sm-5">Sedang mengapload foto... <b><i id="progress">0%</i></b></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">No Telpon</label>
                                                            <div class="col-sm-9">
                                                                <input type="number" class="nb-edt form-control" required="" autocomplete="off" placeholder="Nomor Telpon" name="telpon_sales" id="telpon_sales">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Email</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="nb-edt form-control" required="" autocomplete="off" placeholder="email" name="email_sales" id="email_sales">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Alamat</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="nb-edt form-control" required="" autocomplete="off" placeholder="Alamat" name="alamat_sales" id="alamat_sales">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Username dan Password</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="nb-edt form-control" required="" autocomplete="off" placeholder="Username dan Password" name="username_sales" id="username_sales">
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Batal</button>
                                                            <button type="submit" name="submit_sales" class="btn btn-default waves-effect">Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- AKHIR MODAL TABAH ADMIN -->

                                    <h4 class="m-t-0 header-title"><b>Data Sales</b></h4>
                                    <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light m-t-10 m-b-20" data-toggle="modal" data-target="#con-close-modal"><i class="fa fa-plus-circle"></i> &nbsp;Tambah Sales</button>
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Kode</th>
                                            <th>Nama Lengkap</th>
                                            <th>Telpon</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1; foreach($sales as $dta) { ?>
                                        <tr>
                                            <td style="text-align: center;"><?= $i ?></td>
                                            <td style="text-align: center;">
                                                <div class="sp-wrap">
                                                    <a href="../assets/images/sales/<?php echo $dta['foto_sales'] ?>"><img src="../assets/images/sales/<?php echo $dta['foto_sales'] ?>" alt=""  border=3 height=40 width=40></a>
                                                </div>
                                            </td>
                                            <td><?= $dta['kode_sales'] ?></td>
                                            <td><?= $dta['nama_sales'] ?></td>
                                            <td><?= $dta['telpon'] ?></td>
                                            <td style="text-align: center;">
                                                <div class="text-center">
                                                    <a href="#" type="button" data-toggle="modal" data-target="#detail<?= $dta['id_sales'] ?>" class="btn btn-info btn-sm waves-effect waves-light"><i class="fa fa-eye"></i></a>
                                                    <a href="#" type="button" data-toggle="modal" data-target="#edit<?= $dta['id_sales'] ?>"  class="btn btn-primary btn-sm waves-effect waves-light"><i class="fa fa-edit"></i></a>
                                                    <a href="#" type="button" data-toggle="modal" data-target="#hapus<?= $dta['id_sales'] ?>" class="btn btn-default btn-sm waves-effect waves-light" data-toggle="modal" data-target="#modal-danger" ><i class="fa fa-trash"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- MODAL DETAIL -->
                                        <div id="detail<?= $dta['id_sales'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog" style="width:40%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="custom-width-modalLabel"><strong>Detail</strong> </h4>
                                                    </div>
                                                    <div class="modal-body row" style="padding: 20px 50px 0 50px">
                                                        <div class="col-md-4">
                                                            <div class="sp-wrap">
                                                                <a href="../assets/images/sales/<?php echo $dta['foto_sales'] ?>"><img src="../assets/images/sales/<?php echo $dta['foto_sales'] ?>" alt="user-img" class="img-circle" style="border: 1px solid; height: 100px;"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <h4>Info Sales</h4>
                                                            <p><b>Kode: </b><span class="namaView"><?= $dta['kode_sales'] ?></span></p>
                                                            <p><b>Nama: </b><span class="namaView"><?= $dta['nama_sales'] ?></span></p>
                                                            <p><b>Telpon: </b><span class="usernameView"><?= $dta['telpon'] ?></span></p>
                                                            <p><b>Email: </b><span class="usernameView"><?= $dta['email_sales'] ?></span></p>
                                                            <p><b>Alamat: </b><span class="usernameView"><?= $dta['alamat_sales'] ?></span></p>
                                                            <?php
                                                            if ($dta['status_sales']== "Aktif"){
                                                            ?>
                                                                <p><b>Status: </b><span class="label label-success"><?= $dta['status_sales'] ?></span></p>
                                                            <?php
                                                            } else {
                                                            ?>
                                                                <p><b>Status: </b><span class="label label-danger"><?= $dta['status_sales'] ?></span></p>
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

                                        <!-- MODAL EDIT SALES -->
                                        <div id="edit<?= $dta['id_sales'] ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title">Edit Sales</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="controller.php" enctype="multipart/form-data">
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Kode</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" disabled value="<?= $dta['kode_sales'] ?>" class="nb-edt form-control" required="" autocomplete="off" placeholder="Kode">
                                                                    <input type="hidden" value="<?= $dta['kode_sales'] ?>" class="nb-edt form-control" required="" autocomplete="off" placeholder="Kode" name="kode_sales" id="kode_sales">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" value="<?= $dta['nama_sales'] ?>" class="nb-edt form-control" required="" autocomplete="off" placeholder="Nama Lengkap" name="nama_sales" id="nama_sales">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Foto</label>
                                                                <div class="col-sm-9 bootstrap-filestyle">
                                                                    <input type="file" class="filestyle" data-placeholder="<?= $dta['foto_sales']?>" name="foto_sales" id="foto_sales<?= $dta['id_sales'] ?>">
                                                                    <div class="row text-info" id="viewProgress" hidden="">
                                                                        <span class="col-sm-5">Sedang mengapload foto... <b><i id="progress">0%</i></b></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">No Telpon</label>
                                                                <div class="col-sm-9">
                                                                    <input type="number" value="<?= $dta['telpon'] ?>" class="nb-edt form-control" required="" autocomplete="off" placeholder="Nomor Telpon" name="telpon" id="telpon">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Email</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" value="<?= $dta['email_sales'] ?>" class="nb-edt form-control" required="" autocomplete="off" placeholder="Email" name="email_sales" id="email_sales">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Alamat</label>
                                                                <div class="col-sm-9">
                                                                    <input type="text" value="<?= $dta['alamat_sales'] ?>" class="nb-edt form-control" required="" autocomplete="off" placeholder="Alamat" name="alamat_sales" id="alamat_sales">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Username</label>
                                                                <div class="col-sm-9">

                                                                <?php
                                                                    $username_sales = mysqli_query($conn, "SELECT * FROM tb_auth WHERE id_akun = $dta[id_sales] AND role_auth = 'Sales'");
                                                                    while($row=mysqli_fetch_assoc($username_sales)) {
                                                                ?>
                                                                <input type="text" value="<?= $row['username_auth'] ?>" class="nb-edt form-control" required="" autocomplete="off" placeholder="Username dan Password" name="username_sales" id="username_sales">
                                                                <?php
                                                                    }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-3 col-form-label">Status Akun</label>
                                                                <div class="col-sm-9">
                                                                    <select name="status_sales" id="status_sales" class="form-control">
                                                                    <?php
                                                                    if ($dta['status_sales']=="Aktif"){
                                                                        echo "<option selected='selected' value='Aktif'>Aktif</option>
                                                                        <option value='Suspend'>Suspend</option>";
                                                                    } else{
                                                                        echo "<option value='Aktif'>Aktif</option>
                                                                        <option selected='selected' value='Suspend'>Suspend</option>";
                                                                    }
                                                                    ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                            <input type="hidden" name="foto_now" value="<?= $dta['foto_sales'] ?>" >
                                                            <input type="hidden" name="id_sales" value="<?= $dta['id_sales'] ?>" >
                                                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Batal</button>
                                                                <button type="submit" name="edit_sales" class="btn btn-default waves-effect">Simpan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- AKHIR MODAL EDIT ADMIN -->

                                        <!-- MODAL HAPUS -->
                                        <div class="modal fade" tabindex="-1" id="hapus<?= $dta['id_sales'] ?>">
                                            <div class="modal-dialog">
                                            <div class="modal-content bg-danger">
                                                <div class="modal-header">
                                                <h4 class="modal-title" style="color: white;">Hapus Data Sales</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>
                                                <div class="modal-body">
                                                <p style="color: white;">Yakin Ingin Menghapus Data Sales ?</p>
                                                </div>
                                                <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-dark" style="background-color: silver;" data-dismiss="modal">Batal</button>
                                                <a href="controller.php?hapus_sales=true&id_sales=<?= $dta['id_sales'] ?>" type="button" class="btn btn-outline-dark" style="background-color: white;">Hapus</a>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                        <!-- /.modal -->


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

        <script src="../assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
        <script src="../assets/plugins/switchery/js/switchery.min.js"></script>
        <script type="text/javascript" src="../assets/plugins/multiselect/js/jquery.multi-select.js"></script>
        <script type="text/javascript" src="../assets/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
        <script src="../assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js" type="text/javascript"></script>
        <script src="../assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="../assets/plugins/autocomplete/jquery.mockjax.js"></script>
        <script type="text/javascript" src="../assets/plugins/autocomplete/jquery.autocomplete.min.js"></script>
        <script type="text/javascript" src="../assets/plugins/autocomplete/countries.js"></script>
        <script type="text/javascript" src="../assets/pages/autocomplete.js"></script>
        <script type="text/javascript" src="../assets/pages/jquery.form-advanced.init.js"></script>

        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>

<script src="../assets/plugins/smoothproducts/js/smoothproducts.min.js"></script>
<script type="text/javascript">
// wait for images to load
$(window).load(function() {
$('.sp-wrap').smoothproducts();
});
</script>
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
            ajax: "../assets/plugins/datatables/json/scroller-demo.json",
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