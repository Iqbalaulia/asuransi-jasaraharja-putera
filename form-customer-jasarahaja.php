<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard sales - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin
        Dashboard
    </title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.min.css">

    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">
    <?php
// Create database connection using config file
include_once("connection.php");

// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT id,nama_lengkap,no_telp,alamat_pemohon,biaya_polis,premi_dasar,total_pembayaran,status_form,status_polis FROM form_customer");
?>

    <!-- fixed-top-->
    <?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
	?>
    <?php include('navbar.php') ?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php include('navbar_right.php')?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">


                <section id="configuration">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Customer Jasarahaja</h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Biaya Polis</th>
                                                    <th>Premi Dasar</th>
                                                    <th>Total Pembayaran</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php while($form_customer = mysqli_fetch_array($result)) {    ?>
                                                <tr>
                                                    <td><?php echo $form_customer['nama_lengkap'] ?></td>
                                                    <td><?php echo $form_customer['alamat_pemohon'] ?></td>
                                                    <td><?php echo $form_customer['biaya_polis'] ?></td>
                                                    <td><?php echo $form_customer['premi_dasar'] ?></td>
                                                    <td><?php echo $form_customer['total_pembayaran'] ?></td>
                                                    <td><?php echo $form_customer['status_form'] ?></td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <a
                                                                    href='form-customer-edit.php?id=<?php echo $form_customer['id'] ?>'>
                                                                    <button type="button"
                                                                        class="btn btn-primary mr-1 mb-1"><i
                                                                            class="icon-pencil"></i></button>
                                                                </a>


                                                            </div>
                                                            <div class="col-md-2">
                                                                <a
                                                                    href='form_delete_customer.php?id=<?php echo $form_customer['id'] ?>'>
                                                                    <button type="button"
                                                                        class="btn btn-danger mr-1 mb-1"><i
                                                                            class="icon-trash"></i></button>

                                                                </a>

                                                            </div>
                                                            <?php if($form_customer['status_form'] == "Approved" ){ ?>

                                                                    <?php if($form_customer['status_polis'] == "Telah dibuat"){ ?>
                                                                           
                                                                    <?php }else{ ?>
                                                                        <div class="col-md-2">
                                                                        <a
                                                                            href="form-polis-customer.php?id=<?php echo $form_customer['id'] ?>">
                                                                            <button type="submit" name="approved"
                                                                                class="btn btn-info mr-1 mb-1"> <i
                                                                                    class="icon-docs"></i></button>
                                                                        </a>
                                                                    </div>
                                                                    <?php } ?>
                                                                    
                                                            <?php }else{ ?>

                                                            <div class="col-md-2">
                                                                <form action="form_approved_customer.php">
                                                                    <input type="hidden" name="id"
                                                                        value=<?php echo $form_customer['id'];?>>
                                                                    <button type="submit" name="approved"
                                                                        class="btn btn-success mr-1 mb-1"> <i
                                                                            class="icon-check"></i></button>
                                                                </form>
                                                            </div>
                                                            &nbsp;
                                                            <div class="col-md-2">
                                                                <a
                                                                    href="https://api.whatsapp.com/send?phone=<?php echo $form_customer['no_telp'] ?>&text=Kepada%20Bapak/Ibu%20<?php echo $form_customer['nama_lengkap'] ?>%20diberitahukan,%20bahwa%20pengajuan%20Asuransi%20anda%20telah%20kami%20terima.%20Mohon%20segera%20konfirmasi%20pengajuannya%20dengan%20membalas%20pesan%20ini.">
                                                                    <button type="submit" name="approved"
                                                                        class="btn btn-success mr-1 mb-1"> <i
                                                                            class="icon-call-out"></i></button>
                                                                </a>
                                                            </div>
                                                            <?php } ?>

                                                        </div>

                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Biaya Polis</th>
                                                    <th>Premi Dasar</th>
                                                    <th>Total Pembayaran</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
            <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a
                    class="text-bold-800 grey darken-2"
                    href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT
                </a>, All rights reserved. </span>
            <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i
                    class="ft-heart pink"></i></span>
        </p>
    </footer>
    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/tables/datatables/datatable-basic.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>