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
      <title>Notification Style - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template +
        Bitcoin Dashboard</title>
      <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
      <link rel="shortcut icon" type="image/x-icon" href=" app-assets/images/ico/favicon.ico">
      <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
      <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
      <!-- BEGIN VENDOR CSS-->
      <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.css">
      <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/daterange/daterangepicker.css">
      <!-- END VENDOR CSS-->
      <!-- BEGIN MODERN CSS-->
      <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
      <!-- END MODERN CSS-->
      <!-- BEGIN Page Level CSS-->
      <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
      <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
      <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
      <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/pickers/daterange/daterange.css">
      <!-- END Page Level CSS-->
      <!-- BEGIN Custom CSS-->
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <!-- END Custom CSS-->
    </head>

    <body class="vertical-layout vertical-menu-modern 2-columns" data-open="click" data-menu="vertical-menu-modern"
      data-col="2-columns">
      <?php
      // include database connection file
      include_once("connection.php");
      $id = $_GET['id'];
      // Fetech user data based on id
      $result = mysqli_query($koneksi, "SELECT * FROM form_customer WHERE id=$id");
      ?>
       <?php include('navbar.php') ?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->
  <?php include('navbar_right.php')?>
  <!-- ////////////////////////////////////////////////////////////////////////////-->

      <div class="app-content content">
        <div class="content-wrapper">
          <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
              <h3 class="content-header-title mb-0 d-inline-block">Customer Form Asuransi</h3>
              <div class="row breadcrumbs-top d-inline-block">

              </div>
            </div>

          </div>
          <div class="content-body">
            <!-- Form wzard with step validation section start -->
            <section id="validation">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h4 class="card-title">Form Polis</h4>
                      <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                      <div class="heading-elements">
                        <ul class="list-inline mb-0">
                          <li><a data-action="coll  apse"><i class="ft-minus"></i></a></li>
                          <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                          <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                          <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="card-content collapse show">
                      <div class="card-body">
                        <form action="form_insert_polis.php" class="steps-validation wizard-notification" method="POST">
                          <!-- Step 1 -->
                          <?php while($form_customer = mysqli_fetch_array($result)) {
                                $nama_lengkap     = $form_customer['nama_lengkap'];
                                $alamat_pemohon   = $form_customer['alamat_pemohon'];

                                $no_telp          = $form_customer['no_telp'];
                                $nilai_bangunan   = $form_customer['nilai_bangunan'];
                                $nilai_mesin = $form_customer['nilai_mesin'];
                                $nilai_barang = $form_customer['nilai_barang'];
                                $nilai_dagangan = $form_customer['nilai_dagangan'];
                                
                                 $nilai_perabot_rumah = $form_customer['nilai_perabot_rumah'];
                                 $nilai_perabot_kantor = $form_customer['nilai_perabot_kantor'];
                                 $nilai_lain = $form_customer['nilai_lain'];
                                 $total_keseluruhan = $form_customer['total_keseluruhan'];
                                 $ket_dinding_luar = $form_customer['ket_dinding_luar'];
                                 $ket_dinding_dalam = $form_customer['ket_dinding_dalam'];
                                 $ket_dinding_pemisah = $form_customer['ket_dinding_pemisah'];
                                 $ket_lantai = $form_customer['ket_lantai'];
                                 $ket_balok = $form_customer['ket_balok'];
                                 $ket_balok_lantai = $form_customer['ket_balok_lantai'];
                                 $ket_pilar = $form_customer['ket_pilar'];
                                 $ket_tiang = $form_customer['ket_tiang'];
                                 $ket_antangga = $form_customer['ket_antangga'];
                                 $ket_atap = $form_customer['ket_atap'];
                                 $ket_loteng = $form_customer['ket_loteng'];
                                 $ket_banyaktingkat = $form_customer['ket_banyaktingkat'];
                                 $ket_pondasi = $form_customer['ket_pondasi'];
                             
                                 $jenis_penerangan_listrik = $form_customer['jenis_penerangan_listrik'];
                                 $jenis_lampu = $form_customer['jenis_lampu'];
                                 $jarak_bangunan_kiri = $form_customer['jarak_bangunan_kiri'];
                                 $jarak_bangunan_kanan = $form_customer['jarak_bangunan_kanan'];
                                 $jarak_bangunan_belakang = $form_customer['jarak_bangunan_belakang'];
                                 $jarak_bangunan_depan = $form_customer['jarak_bangunan_depan'];
                                 $ket_bangunan_digunakan = $form_customer['ket_bangunan_digunakan'];
                                 $lokasi_harta_benda_jalan = $form_customer['lokasi_harta_benda_jalan'];
                                 $lokasi_harta_benda_kota = $form_customer['lokasi_harta_benda_kota'];
                                 $lokasi_harta_benda_provinsi = $form_customer['lokasi_harta_benda_provinsi'];
                                 $jenis_pemadam = $form_customer['jenis_pemadam'];

                                 $jumlah_alat_pemadam = $form_customer['jumlah_alat_pemadam'];
                                 $jarak_pos_pemadam = $form_customer['jarak_pos_pemadam'];
                                 $ket_barang_orang_lain = $form_customer['ket_barang_orang_lain'];
                                 $ket_barang_berbahaya = $form_customer['ket_barang_berbahaya'];
                                 $ket_barang_asuransi_lain = $form_customer['ket_barang_asuransi_lain'];
                                 $ket_penolakan_asuransi = $form_customer['ket_penolakan_asuransi'];
                                 $ket_kerugian_kebakaran = $form_customer['ket_kerugian_kebakaran'];
                                 $jangka_waktu = $form_customer['jangka_waktu'];
                                 $batas_waktu = $form_customer['batas_waktu'];
                                 $pertanggungan_kebakaran = $form_customer['pertanggungan_kebakaran'];
                                 $nilai_pertanggungan_kebakaran = $form_customer['nilai_pertanggungan_kebakaran'];
                                 $pertanggungan_kerusakan = $form_customer['pertanggungan_kerusakan'];
                                 $nilai_pertanggungan_kerusakan = $form_customer['nilai_pertanggungan_kerusakan'];
                                 $pertanggungan_gempa = $form_customer['pertanggungan_gempa'];
                                 $nilai_pertanggungan_gempa = $form_customer['nilai_pertanggungan_gempa'];
                                 $pertanggungan_banjir = $form_customer['pertanggungan_banjir'];
                                 $nilai_pertanggungan_banjir = $form_customer['nilai_pertanggungan_banjir'];
                                 $pertanggungan_biaya_pembersihan = $form_customer['pertanggungan_biaya_pembersihan'];
                                 $nilai_pertanggungan_biaya_pembersihan = $form_customer['nilai_pertanggungan_biaya_pembersihan'];
                                 $biaya_polis = $form_customer['biaya_polis'];
                                 $premi_dasar = $form_customer['premi_dasar'];
                                 $total_pembayaran = $form_customer['total_pembayaran'];
                                 $status_form = 'Pending';
                          } ?>
                          <h6>Step 1</h6>
                          <fieldset>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="firstName3">
                                    Tertanggung
                                    <span class="danger">*</span>
                                  </label>
                                  <input type="text" class="form-control required" id="firstName3" name="tertanggung"
                                    placeholder="Nama tertanggung" value="<?php echo $nama_lengkap ?>">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="firstName3">
                                    Nomor Telepon
                                    <span class="danger">*</span>
                                  </label>
                                  <input type="text" class="form-control required" id="firstName3" name="no_telp"
                                    placeholder="Nama lengkap" value="<?php echo $no_telp ?>">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="firstName3">
                                    Obyek Pertanggungan
                                  <span class="danger">*</span>
                                  </label>
                                  <input type="text" class="form-control required" id="firstName3" name="obyek_pertanggungan"
                                    placeholder="Nama lengkap" value="<?php echo $no_telp ?>">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="firstName3">
                                    Harga Pertanggungan
                                  <span class="danger">*</span>
                                  </label>
                                  <input type="number" class="form-control required" id="firstName3" name="harga_pertanggungan"
                                    placeholder="Nama lengkap" value="">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="firstName3">
                                    Luas Jaminan
                                  <span class="danger">*</span>
                                  </label>
                                  <input type="number" class="form-control required" id="firstName3" name="luas_jaminan"
                                    placeholder="Nama lengkap" value="">
                                </div>
                              </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="date3">Jangka waktu pertanggungan yang diminta <span
                                          class="danger">*</span>
                                      </label>
                                      <input type="date" class="form-control" id="date3" name="jangka_waktu" value="<?php echo $jangka_waktu ?>">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="date3">Batas waktu</label>
                                      <input type="date" class="form-control" id="date3" name="batas_waktu" value="<?php echo $batas_waktu ?>">
                                    </div>
                                  </div>
                              
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="lastName3">
                                    Lokasi Obyek :
                                    <span class="danger">*</span>
                                  </label>
                                  <textarea type="text" class="form-control required" id="lastName3" rows="5"
                                    name="lokasi_obyek" placeholder="Alamat"><?php echo $alamat_pemohon ?></textarea>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="lastName3">
                                    Alamat :
                                    <span class="danger">*</span>
                                  </label>
                                  <textarea type="text" class="form-control required" id="lastName3" rows="5"
                                    name="alamat" placeholder="Alamat"><?php echo $alamat_pemohon ?></textarea>
                                </div>
                              </div>
                            </div>
                            
                          </fieldset>
                          <input type="text" class="form-control" id="date3" name="id" value="<?php echo $id ?>" hidden>

                          
                          
                          <Button type="submit">Simpen</Button>

                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Form wizard with vertical tabs section end -->
          </div>
        </div>
      </div>
      <!-- ////////////////////////////////////////////////////////////////////////////-->
      <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
          <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2018 <a
              class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent"
              target="_blank">PIXINVENT </a>, All
            rights reserved. </span>
          <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i
              class="ft-heart pink"></i></span>
        </p>
      </footer>
      <!-- BEGIN VENDOR JS-->
      <script src=" app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
      <!-- BEGIN VENDOR JS-->
      <!-- BEGIN PAGE VENDOR JS-->
      <script src=" app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
      <script src=" app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
      <script src=" app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
      <script src=" app-assets/vendors/js/forms/validation/jquery.validate.min.js" type="text/javascript"></script>
      <!-- END PAGE VENDOR JS-->
      <!-- BEGIN MODERN JS-->
      <script src=" app-assets/js/core/app-menu.js" type="text/javascript"></script>
      <script src=" app-assets/js/core/app.js" type="text/javascript"></script>
      <script src=" app-assets/js/scripts/customizer.js" type="text/javascript"></script>
      <!-- END MODERN JS-->
      <!-- BEGIN PAGE LEVEL JS-->
      <!-- <script src=" app-assets/js/scripts/forms/wizard-steps.js" type="text/javascript"></script> -->
      <!-- END PAGE LEVEL JS-->
    </body>

    </html>