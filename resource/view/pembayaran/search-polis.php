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
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/line-awesome/css/line-awesome.min.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../assets/css/search-polis.css">

    <!-- END Custom CSS-->
</head>

<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- fixed-top-->
    <?php 
	session_start();
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}
	?>
    <?php include('navbar_pembayaran.php') ?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <?php include('navbar_pembayaran_right.php')?>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <?php
// Create database connection using config file
include_once("../../../connection.php");


// search data
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	$data = mysqli_query($koneksi,"SELECT * FROM form_polis WHERE no_polis LIKE '%".$cari."%'");				
}else{
	$data = mysqli_query($koneksi,"SELECT * FROM form_polis");		
}

?>

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
                                    <h4 class="card-title">Pencarian Polis</h4>
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
                                        <!-- search -->
                                        <form action="search-polis.php" method="get">
                                            <div class="row">
                                                <div class="col-md-11">
                                                    <input type="text" class="form-control" name="cari"
                                                        placeholder="Pencarian berdasarkan nomor polis">
                                                </div>
                                                <div class="col-md-1">
                                                    <button type="submit" class="btn btn-primary"
                                                        style="width: 100%; height:auto;">
                                                        <i class="la la-search"></i>&nbsp; Search

                                                    </button>

                                                </div>
                                            </div>
                                        </form>
                                        <?php if(isset($_GET['cari'])){ ?>

                                        <div class="table-review mt-5 mb-5">
                                            <?php 
                                                $no_urut = 0;
                                                while($form_polis = mysqli_fetch_array($data)) {   
                                                    $no_urut++;
                                                    ?>
                                            <h1>POLIS CUSTOMER</h1>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Nomor Polis :&nbsp;</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <p><?php echo $form_polis['no_polis'] ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Tertanggung :&nbsp;</label> </div>
                                                <div class="col-md-8">
                                                    <p><?php echo $form_polis['tertanggung'] ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Nomor Telepon :&nbsp;</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <p><?php echo $form_polis['no_telp'] ?></p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Obyek Pertanggungan :&nbsp;</label> </div>
                                                <div class="col-md-8">
                                                    <p><?php echo $form_polis['obyek_pertanggungan'] ?></p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Harga Pertanggungan :&nbsp;</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <p><?php echo $form_polis['harga_pertanggungan'] ?></p>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Luas Jaminan :&nbsp;</label> </div>
                                                <div class="col-md-8">
                                                    <p><?php echo $form_polis['luas_jaminan'] ?></p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Jangka Waktu :&nbsp;</label> </div>
                                                <div class="col-md-8">
                                                    <p><?php echo $form_polis['jangka_waktu'] ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Batas Waktu :&nbsp;</label> </div>
                                                <div class="col-md-8">
                                                    <p><?php echo $form_polis['batas_waktu'] ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Lokasi Obyek :&nbsp;</label> </div>
                                                <div class="col-md-8">
                                                    <p><?php echo $form_polis['lokasi_obyek'] ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Total Kembalian :&nbsp;</label> </div>
                                                <div class="col-md-8">
                                                    <p><?php echo $form_polis['total_kembalian'] ?></p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Alamat :&nbsp;</label> </div>
                                                <div class="col-md-8">
                                                    <p><?php echo $form_polis['alamat'] ?></p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Status Pembayaran :&nbsp;</label> </div>
                                                <div class="col-md-8">
                                                    <p><?php echo $form_polis['status_pembayaran'] ?></p>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Status Polis :&nbsp;</label> </div>
                                                <div class="col-md-8">
                                                    <p><?php echo $form_polis['status_polis'] ?></p>
                                                </div>
                                            </div>

                                            <form class="mt-2" action="cetak-nota.php?id=<?php echo $form_polis['id'];?>"
                                                method="post" align="center">
                                                <a href="">
                                                    <button type="submit" name="approved"
                                                        class="btn btn-success mr-1 mb-1"> <i class="icon-printer"></i>
                                                        Cetak Nota
                                                        <input type="text" name="status_nota" hidden
                                                            value="Telah Dicetak">

                                                    </button>
                                                </a>
                                            </form>

                                            <?php } ?>

                                        </div>

                                        <?php }else if(isset($_GET['cari']) == ''){ ?>

                                        <?php }else{ ?>

                                        <?php } ?>
                                        <!-- search -->

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
    <script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/scripts/customizer.js" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
</body>

</html>