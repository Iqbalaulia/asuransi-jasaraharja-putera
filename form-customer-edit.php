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
                      <h4 class="card-title">Validation Example</h4>
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
                        <form action="form_edit_customer.php" class="steps-validation wizard-notification" method="POST">
                          <!-- Step 1 -->
                          <?php while($form_customer = mysqli_fetch_array($result)) {
                                $nama_lengkap     = $form_customer['nama_lengkap'];
                                $alamat_pemohon   = $form_customer['alamat_pemohon'];
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
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="firstName3">
                                    Nama lengkap pemohon
                                    <span class="danger">*</span>
                                  </label>
                                  <input type="text" class="form-control required" id="firstName3" name="nama_lengkap"
                                    placeholder="Nama lengkap" value="<?php echo $nama_lengkap ?>">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="lastName3">
                                    Alamat :
                                    <span class="danger">*</span>
                                  </label>
                                  <textarea type="text" class="form-control required" id="lastName3" rows="5"
                                    name="alamat_pemohon" placeholder="Alamat"><?php echo $alamat_pemohon ?></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <table style="width:100%;">
                                    <tr>
                                      <td>
                                        <label for="emailAddress5">
                                          Harta benda yang ingin dipertanggungkan
                                          <span class="danger">*</span>
                                        </label>
                                      </td>
                                      <td><label for="emailAddress5">
                                          Nilai yang akan dipertanggungkan
                                          <span class="danger">*</span>
                                        </label></td>
                                    </tr>
                                    <tr>
                                      <td>Bangunan &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="nilai_bangungan" placeholder="Nilai bangunan"value="<?php echo $nilai_bangunan ?>"></td>

                                    </tr>
                                    <tr>
                                      <td>Mesin - mesin &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="nilai_mesin" placeholder="Nilai mesin - mesin" value="<?php echo $nilai_mesin ?>"></td>
                                    </tr>
                                    <tr>
                                      <td>Persedian barang - barang &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="nilai_barang" placeholder="Nilai barang - barang" value="<?php echo $nilai_barang ?>"></td>
                                    </tr>
                                    <tr>
                                      <td>Barang - barang dagangan &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="nilai_dagangan" placeholder="Nilai barang dagangan" value="<?php echo $nilai_dagangan ?>"></td>
                                    </tr>
                                    <tr>
                                      <td>Perabot rumah tangga &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="nilai_perabot_rumah" placeholder="Nilai perabot rumah" value="<?php echo $nilai_perabot_rumah ?>"></td>
                                    </tr>
                                    <tr>
                                      <td>Perabot kantor/toko/gudang &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="nilai_perabot_kantor" placeholder="Nilai perabot kantor/toko/gudang" value="<?php echo $nilai_perabot_kantor ?>">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Dan lain lain &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="nilai_lain" placeholder="Nilai lain - lain" value="<?php echo $nilai_lain ?>"></td>
                                    </tr>
                                    <tr>
                                      <td>Total &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="total_keseluruhan" placeholder="Total keseluruhan" value="<?php echo $total_keseluruhan ?>"></td>
                                    </tr>
                                  </table>

                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="emailAddress5">
                                    Keterangan lengkap mengenai konstruksi bangunan
                                    <span class="danger">*</span>
                                  </label>
                                  <table style="width:100%;">

                                    <tr>
                                      <td>Dinding &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_dinding_luar" placeholder="Keterangan dinding luar"
                                          value="<?php echo $ket_dinding_luar ?>"
                                          ></td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_dinding_dalam" placeholder="Keterangan dinding dalam"
                                          value="<?php echo $ket_dinding_dalam ?>"
                                          ></td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_dinding_pemisah" placeholder="Keterangan dinding pemisah"
                                          value="<?php echo $ket_dinding_pemisah ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Lantai &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_lantai" placeholder="Keterangan lantai"
                                          value="<?php echo $ket_lantai ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Balok &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_balok" placeholder="Keterangan balok"
                                          value="<?php echo $ket_balok ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Balok lantai &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_balok_lantai" placeholder="Keterangan balok lantai"
                                          value="<?php echo $ket_balok_lantai ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Pilar &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_pilar" placeholder="Keterangan pilar"
                                          value="<?php echo $ket_pilar ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Tiang &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_tiang" placeholder="Keterangan tiang"
                                          value="<?php echo $ket_tiang ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Anak tangga &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_antangga" placeholder="Keterangan anak tangga"
                                          value="<?php echo $ket_antangga ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Atap &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_atap" placeholder="Keterangan atap"
                                          value="<?php echo $ket_atap ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Loteng &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_loteng" placeholder="Keterangan loteng"
                                          value="<?php echo $ket_loteng ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Banyaknya tingkat &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_banyaktingkat" placeholder="Keterangan banyak tingkat"
                                          value="<?php echo $ket_banyaktingkat ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Pondasi &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_pondasi" placeholder="Keterangan pondasi"
                                          value="<?php echo $ket_pondasi ?>"
                                          ></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <!-- <div class="col-md-6">
                                <div class="form-group">
                                  <label for="phoneNumber3">Phone Number :</label>
                                  <input type="tel" class="form-control" id="phoneNumber3">
                                </div>
                              </div> -->
                              <div class="col-md-6">
                                <div class="form-group">
                                  <!-- <label for="date3">Date of Birth :</label> -->
                                  <!-- <input type="date" class="form-control" id="date3"> -->
                                </div>
                              </div>
                            </div>
                          </fieldset>
                          <!-- Step 2 -->
                          <h6>Step 2</h6>
                          <fieldset>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <table style="width:100%;">
                                    <tr>
                                      <td>
                                        <label for="emailAddress5">
                                          Jenis penerangan yang dipergunakan
                                          <span class="danger">*</span>
                                        </label>
                                      </td>

                                    </tr>
                                    <tr>
                                      <td>Listrik &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="jenis_penerangan_listrik" placeholder="Jenis penerangan listrik"
                                          value="<?php echo $jenis_penerangan_listrik ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Lampu dengan menggunakan bensin atau minyak tanah atau solar &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="jenis_lampu" placeholder="Jenis bahan bakar lampu"
                                          value="<?php echo $jenis_lampu ?>"
                                          ></td>
                                    </tr>

                                  </table>
                                </div>
                                <div class="form-group">
                                  <table style="width:100%;">
                                    <tr>
                                      <td>
                                        <label for="emailAddress5">
                                          Jarak bangunan yang dipertanggungkan dengan bangunan sekitar
                                          <span class="danger">*</span>
                                        </label>
                                      </td>

                                    </tr>
                                    <tr>
                                      <td>Sebelah kiri &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="jarak_bangunan_kiri" placeholder="Jarak sebalah kiri bangunan"
                                          value="<?php echo $jarak_bangunan_kiri ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Sebalah kanan &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="jarak_bangunan_kanan" placeholder="Jarak sebalah kanan bangunan"
                                          value="<?php echo $jarak_bangunan_kanan ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Dibagian belakang &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="jarak_bangunan_belakang" placeholder="Jarak bagian belakang bangunan"
                                          value="<?php echo $jarak_bangunan_belakang ?>"

                                          >
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Dibagian depan &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="jarak_bangunan_depan" placeholder="Jarak bagian depan bangunan"
                                          value="<?php echo $jarak_bangunan_depan ?>"

                                          ></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="shortDescription3">Bangunan dipergunakan sebagai <span
                                      class="danger">*</span></label>
                                  <textarea name="ket_bangunan_digunakan" id="shortDescription3" rows="4"
                                    class="form-control"
                                    placeholder="Jika sebagai pabrik, sebutkan jenis - jenis komoditi yang dihasilkan"><?php echo $ket_bangunan_digunakan ?>
                                </textarea>
                                </div>
                                <div class="form-group">
                                  <table style="width:100%;">
                                    <tr>
                                      <td>
                                        <label for="emailAddress5">
                                          Letak harta benda yang akan dipertanggungkan
                                          <span class="danger">*</span>
                                        </label>
                                      </td>

                                    </tr>
                                    <tr>
                                      <td>Jalan &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="lokasi_harta_benda_jalan" placeholder="Lokasi jalan"
                                          value="<?php echo $lokasi_harta_benda_jalan ?>
"
                                          ></td>

                                    </tr>
                                    <tr>
                                      <td>Kota &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="lokasi_harta_benda_kota" placeholder="Lokasi kota"
                                          value="<?php echo $lokasi_harta_benda_kota ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Provinsi &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="lokasi_harta_benda_provinsi" placeholder="Lokasi provinsi"
                                          value="<?php echo $lokasi_harta_benda_provinsi ?>"
                                          ></td>
                                    </tr>

                                  </table>
                                </div>
                                <div class="form-group">
                                  <table style="width:100%;">

                                    <tr>
                                      <td> <label for="emailAddress5">Jenis alat pemadam kebakaran yang dimiliki &nbsp;
                                          <span class="danger">*</span></label>
                                      </td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="jenis_pemadam" placeholder="Jenis pemadam yang digunakan"
                                          value="<?php echo $jenis_pemadam ?>"
                                          ></td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="jumlah_alat_pemadam" placeholder="Jumlah alat pemadam"
                                          value="<?php echo $jumlah_alat_pemadam ?>"
                                          ></td>

                                    </tr>
                                    <tr>
                                      <td> <label for="emailAddress5">Jarak pos pemadam kebakaran dari lokasi yang
                                          dipertanggungkan <span class="danger">*</span> &nbsp;</label></td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="jarak_pos_pemadam" placeholder="Jarak pos pemadam kebakaran"
                                          value="<?php echo $jarak_pos_pemadam ?>"
                                          ></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                          <!-- Step 3 -->
                          <h6>Step 3</h6>
                          <fieldset>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="eventName3">
                                    Apakah tersimpan barang milik orang lain dalam bangunan yang akan dipertanggungkan ?
                                    <span class="danger">*</span>
                                  </label>
                                  <textarea placeholder="jika iya, beri penjalasan" rows="4"
                                    class="form-control required" id="eventName3"
                                    name="ket_barang_orang_lain"><?php echo $ket_barang_orang_lain ?></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="eventName3">
                                    Apakah harta benda yang akan dipertanggungkan di atas telah dipertanggungkan kepada
                                    perusahan asuransi lain ?
                                    <span class="danger">*</span>
                                  </label>
                                  <textarea
                                    placeholder="jika iya, beri penjalasan. sebutkan perusahaan, jangka waktu dan nomor polisnya"
                                    rows="4" class="form-control required" id="eventName3"
                                    name="ket_barang_asuransi_lain"><?php echo $ket_barang_asuransi_lain ?></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="eventName3">
                                    Pernahkah terjadi kerugian kebakaran atas harta benda yang dipertanggungkan diatas ?
                                    <span class="danger">*</span>
                                  </label>
                                  <textarea placeholder="jika iya, beri penjalasan." rows="4"
                                    class="form-control required" id="eventName3"
                                    name="ket_kerugian_kebakaran"><?php echo $ket_kerugian_kebakaran ?></textarea>
                                </div>
                                <!-- <div class="form-group">
                                  <label for="eventLocation3">Event Location :</label>
                                  <select class="c-select form-control" id="eventLocation3" name="eventLocation">
                                    <option value="">Select City</option>
                                    <option value="Amsterdam">Amsterdam</option>
                                    <option value="Berlin">Berlin</option>
                                    <option value="Frankfurt">Frankfurt</option>
                                  </select>
                                </div> -->
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="eventName3">
                                    Apakah tersimpan barang berbahaya dalam bangunan yang akan dipertanggungkan?
                                    <span class="danger">*</span>
                                  </label>
                                  <textarea placeholder="jika iya, beri penjalasan" rows="4"
                                    class="form-control required" id="eventName3"
                                    name="ket_barang_berbahaya"><?php echo $ket_barang_berbahaya ?></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="eventName3">
                                    Pernahkah permohonan pertanggungan saudara di tolak atau dibatalkan oleh perusahan
                                    asuransi lain ?
                                    <span class="danger">*</span>
                                  </label>
                                  <textarea placeholder="jika iya, beri penjalasan." rows="4"
                                    class="form-control required" id="eventName3"
                                    name="ket_penolakan_asuransi"><?php echo $ket_penolakan_asuransi ?></textarea>
                                </div>
                                <div class="row">
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
                                </div>

                              </div>
                            </div>
                          </fieldset>
                          <!-- Step 4 -->
                          <h6>Step 4</h6>
                          <fieldset>
                            <div class="row">
                              <div class="col-md-6">
                                <label>Pertanggungan - pertanggungan yang diminta</label>
                                <div class="form-group">
                                  <br>
                                  <label>Kebakaran ( kebakaran, petir, ledakan, kejatuhan pesawat udara )</label>
                                  <div class="c-inputs-stacked">
                                    <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="checkbox" name="pertanggungan_kebakaran" class="custom-control-input"
                                        id="staffing3">
                                      <label class="custom-control-label" for="staffing3">Ya</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="checkbox" name="pertanggungan_kebakaran" class="custom-control-input"
                                        id="catering3">
                                      <label class="custom-control-label" for="catering3">Tidak</label>
                                    </div>
                                  </div>
                                  <br>
                                  <input type="text" class="form-control required" id="meetingLocation3"
                                    name="nilai_pertanggungan_kebakaran" placeholder="Nilai pertanggungan kebakaran"
                                    value="<?php echo $nilai_pertanggungan_kebakaran ?>"
                                    >
                                </div>
                                <div class="form-group">
                                  <br>
                                  <label>Perluasan jaminan ( Kerusuhan, Pemogokan, Akibat perbuatan jahat, tertabrak
                                    kendaraan, asap )</label>
                                  <div class="c-inputs-stacked">
                                    <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="checkbox" name="pertanggungan_kerusakan" class="custom-control-input"
                                        id="staffing3">
                                      <label class="custom-control-label" for="staffing3">Ya</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="checkbox" name="pertanggungan_kerusakan" class="custom-control-input"
                                        id="catering3">
                                      <label class="custom-control-label" for="catering3">Tidak</label>
                                    </div>
                                  </div>
                                  <br>
                                  <input type="text" class="form-control required" id="meetingLocation3"
                                    name="nilai_pertanggungan_kerusakan"
                                    placeholder="Nilai pertanggungan perluasan jaminan"
                                    value="<?php echo $nilai_pertanggungan_kerusakan ?>"
                                    >
                                </div>
                                <div class="form-group">

                                  <label>Gempa bumi, letusan gunung berapi</label>
                                  <div class="c-inputs-stacked">
                                    <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="checkbox" name="pertanggungan_gempa" class="custom-control-input"
                                        id="staffing3">
                                      <label class="custom-control-label" for="staffing3">Ya</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="checkbox" name="pertanggungan_gempa" class="custom-control-input"
                                        id="catering3">
                                      <label class="custom-control-label" for="catering3">Tidak</label>
                                    </div>
                                  </div>
                                  <br>
                                  <input type="text" class="form-control required" id="meetingLocation3"
                                    name="nilai_pertanggungan_gempa"
                                    placeholder="Nilai pertanggungan gempa bumi dan letusan gunung berapi"
                                    value="<?php echo $nilai_pertanggungan_gempa ?>"
                                    >
                                </div>
                                <div class="form-group">

                                  <label>Banjir/angin topan, badai/kerusakan karena air</label>
                                  <div class="c-inputs-stacked">
                                    <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="checkbox" name="pertanggungan_banjir" class="custom-control-input"
                                        id="staffing3">
                                      <label class="custom-control-label" for="staffing3">Ya</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="checkbox" name="pertanggungan_banjir" class="custom-control-input"
                                        id="catering3">
                                      <label class="custom-control-label" for="catering3">Tidak</label>
                                    </div>
                                  </div>
                                  <br>
                                  <input type="text" class="form-control required" id="meetingLocation3"
                                    name="nilai_pertanggungan_banjir"
                                    placeholder="Nilai pertanggungan banjir/angin topan, badai/kerusakan karena air"
                                    value="<?php echo $nilai_pertanggungan_banjir ?>"
                                    >
                                </div>
                                <div class="form-group">

                                  <label>Biaya - biaya pembersihan</label>
                                  <div class="c-inputs-stacked">
                                    <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="checkbox" name="pertanggungan_biaya_pembersihan"
                                        class="custom-control-input" id="staffing3">
                                      <label class="custom-control-label" for="staffing3">Ya</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="checkbox" name="pertanggungan_biaya_pembersihan"
                                        class="custom-control-input" id="catering3">
                                      <label class="custom-control-label" for="catering3">Tidak</label>
                                    </div>
                                  </div>
                                  <br>
                                  <input type="text" class="form-control required" id="meetingLocation3"
                                    name="nilai_pertanggungan_biaya_pembersihan"
                                    placeholder="Nilai pertanggungan biaya pembersihan"
                                    value="<?php echo $nilai_pertanggungan_biaya_pembersihan ?>"
                                    >
                                </div>
                                <!-- <div class="form-group">
                                  <label for="meetingLocation3">
                                    Location :
                                    <span class="danger">*</span>
                                  </label>
                                  <input type="text" class="form-control required" id="meetingLocation3"
                                    name="meetingLocation">
                                </div>
                                <div class="form-group">
                                  <label for="participants3">Names of Participants</label>
                                  <textarea name="participants" id="participants3" rows="4"
                                    class="form-control"></textarea>
                                </div> -->
                              </div>
                              <div class="col-md-6">

                                <div class="form-group">
                                  <table style="width:100%;">
                                    <tr>
                                      <td>
                                        <!-- <label for="emailAddress5">
                                          Jenis penerangan yang dipergunakan
                                          <span class="danger">*</span> -->
                                        </label>
                                      </td>

                                    </tr>
                                    <tr>
                                      <td>Biaya polis &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="biaya_polis" placeholder="Biaya polis"
                                          value="<?php echo $biaya_polis ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Premi dasar &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="premi_dasar" placeholder="Premi dasar"
                                          value="<?php echo $premi_dasar ?>"
                                          ></td>
                                    </tr>
                                    <tr>
                                      <td>Total bayar &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="total_pembayaran" placeholder="Total pembayaran"
                                          value="<?php echo $total_pembayaran ?>"
                                          ></td>
                                    </tr>

                                  </table>
                                </div>

                              </div>
                            </div>
                            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                            <input type="submit" name="update" value="Update">

                          </fieldset>

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