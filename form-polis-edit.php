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
$result = mysqli_query($koneksi, "SELECT id,no_polis,tertanggung,no_telp,obyek_pertanggungan,harga_pertanggungan,luas_jaminan,jangka_waktu,batas_waktu,lokasi_obyek,alamat FROM form_polis");
?>

    <!-- fixed-top-->
    <?php
      // include database connection file
      include_once("connection.php");
      $id = $_GET['id'];
      // Fetech user data based on id
      $result = mysqli_query($koneksi, "SELECT * FROM form_polis WHERE id=$id");
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
                                    <h4 class="card-title">Preview Polis Jasarahaja</h4>
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
                                        <div class="">
                                            <table style="width:100%">
                                                <form action="form_edit_polis.php" method="post">
                                                    <?php while($form_polis = mysqli_fetch_array($result)) { ?>

                                                    <tr>
                                                        <td style="width:30%"><label>Nomor Polis &nbsp;</label></td>
                                                        <td>
                                                            <input type="text" class="form-control required"
                                                                id="emailAddress5" name="no_polis"
                                                                value="<?php echo $form_polis['no_polis'] ?>">

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:30%"><label>Tertanggung &nbsp;</label></td>
                                                        <td>
                                                            <input type="text" class="form-control required"
                                                                id="emailAddress5" name="tertanggung"
                                                                value="<?php echo $form_polis['tertanggung'] ?>">

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:30%"><label>Nomor Telepon &nbsp;</label></td>
                                                        <td>
                                                            <input type="text" class="form-control required"
                                                                id="emailAddress5" name="no_telp"
                                                                value="<?php echo $form_polis['no_telp'] ?>">

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:30%"><label>Obyek Pertanggungan &nbsp;</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control required"
                                                                id="emailAddress5" name="obyek_pertanggungan" value="<?php echo $form_polis['obyek_pertanggungan'] ?>">

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:30%"><label>Harga Pertanggungan &nbsp;</label>
                                                        </td>
                                                        <td>
                                                            <input type="text" class="form-control required"
                                                                id="emailAddress5" name="harga_pertanggungan" value="<?php echo $form_polis['harga_pertanggungan'] ?>">

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:30%"><label>Luas Jaminan &nbsp;</label></td>
                                                        <td>
                                                            <input type="text" class="form-control required"
                                                                id="emailAddress5" name="luas_jaminan"
                                                                value="<?php echo $form_polis['luas_jaminan'] ?>">

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:30%"><label>Jangka Waktu &nbsp;</label></td>
                                                        <td>
                                                            <input type="date" class="form-control" id="date3"
                                                                name="jangka_waktu"
                                                                value="<?php echo $form_polis['jangka_waktu'] ?>">

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:30%"><label>Batas Waktu &nbsp;</label></td>
                                                        <td>
                                                            <input type="date" class="form-control" id="date3"
                                                                name="batas_waktu"
                                                                value="<?php echo $form_polis['batas_waktu'] ?>">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:30%"><label>Lokasi Obyek &nbsp;</label></td>
                                                        <td>
                                                            <input type="text" class="form-control required"
                                                                id="emailAddress5" name="lokasi_obyek"" value="<?php echo $form_polis['lokasi_obyek'] ?>">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="width:30%"><label>Alamat &nbsp;</label></td>
                                                        <td>
                                                            <textarea name="alamat" id="shortDescription3" rows="4"
                                                                class="form-control"> <?php echo $form_polis['alamat'] ?></textarea>
                                                        </td>
                                                    </tr>

                                            </table>

                                            <div class="row">
                                                <div class="col-md-12 mt-2 p-0" align="right">

                                                    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                                                    <input type="submit" class="btn btn-primary mr-1 mb-1" name="update" value="Simpan Perubahan"> </input>
                                           
                                                  
                                                   
                                                </div>
                                            </div>
                                            <?php } ?>
                                            </form>
                                        </div>
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