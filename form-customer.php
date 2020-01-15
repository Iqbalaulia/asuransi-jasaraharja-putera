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
      <title>Customer</title>
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
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
    </head>


    <body class="vertical-layout vertical-menu-modern 2-columns" data-open="click" data-menu="vertical-menu-modern"
      data-col="2-columns">
      <!-- fixed-top-->

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
                        <form action="form_insert_customer.php" class="steps-validation wizard-notification"
                          method="POST">
                          <!-- Step 1 -->
                          <h6>Step 1</h6>
                          <fieldset>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="firstName3">
                                    Nama lengkap pemohon
                                    <span class="danger">*</span>
                                  </label>
                                  <input type="text" class="form-control required" id="firstName3" name="nama_lengkap"
                                    placeholder="Nama lengkap">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="firstName3">
                                    No Telepon HP
                                    <span class="danger">*</span>
                                  </label>
                                  <input type="text" class="form-control required" id="firstName3" name="no_telp"
                                    placeholder="No telepon HP">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="lastName3">
                                    Alamat Pribadi :
                                    <span class="danger">*</span>
                                  </label>
                                  <textarea type="text" class="form-control required" id="lastName3" rows="5"
                                    name="alamat_pemohon" placeholder="Alamat"></textarea>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="lastName3">
                                    Provinsi :
                                    <span class="danger">*</span>
                                  </label>
                                  <select class="form-control" name="provinsi" id="provinsi"></select>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="lastName3">
                                    Kabupaten / Kota :
                                    <span class="danger">*</span>
                                  </label>
                                  <select class="form-control" name="kabkot" id="kabupaten"></select>
                                </div>
                              </div>



                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="lastName3">
                                    Alamat Bangunan :
                                    <span class="danger">*</span>
                                  </label>
                                  <textarea type="text" class="form-control required" id="lastName3" rows="5"
                                    name="alamat_bangunan" placeholder="Alamat bangunan"></textarea>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">

                                  <div class="row">
                                    <div class="col-md-4">
                                      <label for="lastName3">
                                        Jenis Bangunan :
                                        <span class="danger">*</span>
                                      </label>

                                      <select class="form-control" name="jenis_bangunan" id="jenis_bangunan">
                                      </select>
                                    </div>

                                    <div class="col-md-4">
                                      <label for="lastName3">
                                        Jenis Konstruksi :
                                        <span class="danger">*</span>
                                      </label>
                                      <select class="form-control" name="jenis_konstruksi" id="jenis_konstruksi">

                                      </select>
                                    </div>
                                    <div class="col-md-4">
                                      <label for="lastName3">
                                        Nilai Bangunan :
                                        <span class="danger">*</span>
                                      </label>
                                      <select class="form-control" name="nilai_bangunan"
                                        id="nilai_bangunan" >

                                      </select>
                                    </div>
                                  </div>

                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <table style="width:100%;" class="perhitungan">
                                    <tr>
                                      <td>
                                        <label for="emailAddress5">
                                          Harta benda yang ingin dipertanggungkan
                                          <span class="danger">*</span>
                                        </label>
                                      </td>
                                      <td><label for="emailAddress5">
                                          Harga yang akan dipertanggungkan
                                          <span class="danger">*</span>
                                        </label></td>
                                    </tr>
                                    <div>
                                      <tr>
                                        <td></td>
                                        <td>

                                        </td>
                                        <td>

                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Bangunan &nbsp;</td>
                                        <td> <input type="number" class="form-control required" name="nilai_bangungan"
                                            id="nilai_bangungan" placeholder="Harga bangunan"></td>
                                      </tr>
                                      <tr>
                                        <td>Mesin - mesin &nbsp;</td>
                                        <td> <input type="number" class="form-control required" name="nilai_mesin"
                                            id="nilai_mesin" placeholder="Harga mesin - mesin"></td>
                                      </tr>
                                      <tr>
                                        <td>Persedian barang - barang &nbsp;</td>
                                        <td> <input type="number" class="form-control required" name="nilai_barang"
                                            id="nilai_barang" placeholder="Harga barang - barang"></td>
                                      </tr>
                                      <tr>
                                        <td>Barang - barang dagangan &nbsp;</td>
                                        <td> <input type="number" class="form-control required" name="nilai_dagangan"
                                            id="nilai_dagangan" placeholder="Harga barang dagangan"></td>
                                      </tr>
                                      <tr>
                                        <td>Perabot rumah tangga &nbsp;</td>
                                        <td> <input type="number" class="form-control required"
                                            name="nilai_perabot_rumah" id="nilai_perabot_rumah"
                                            placeholder="Harga perabot rumah"></td>
                                      </tr>
                                      <tr>
                                        <td>Perabot kantor/toko/gudang &nbsp;</td>
                                        <td> <input type="number" class="form-control required"
                                            name="nilai_perabot_kantor" id="nilai_perabot_kantor"
                                            placeholder="Harga perabot kantor/toko/gudang">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Dan lain lain &nbsp;</td>
                                        <td> <input type="number" class="form-control required" name="nilai_lain"
                                            id="nilai_lain" placeholder="Harga lain - lain"></td>
                                      </tr>
                                      <tr>
                                        <td>Total &nbsp;</td>
                                        <td> <input readonly type="number" class="form-control required" name="total_keseluruhan"
                                            id="total_keseluruhan" placeholder="Total keseluruhan" value=""
                                             >
                                        </td>
                                      </tr>
                                    </div>

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
                                      <td> <input type="text" class="form-control required" id="ket_dinding_luar"
                                          name="ket_dinding_luar" placeholder="Keterangan dinding luar"></td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_dinding_dalam" placeholder="Keterangan dinding dalam"></td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_dinding_pemisah" placeholder="Keterangan dinding pemisah"></td>
                                    </tr>
                                    <tr>
                                      <td>Lantai &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="ket_lantai"
                                          name="ket_lantai" placeholder="Keterangan lantai"></td>
                                    </tr>
                                    <tr>
                                      <td>Balok &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_balok" placeholder="Keterangan balok"></td>
                                    </tr>
                                    <tr>
                                      <td>Balok lantai &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_balok_lantai" placeholder="Keterangan balok lantai"></td>
                                    </tr>
                                    <tr>
                                      <td>Pilar &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_pilar" placeholder="Keterangan pilar"></td>
                                    </tr>
                                    <tr>
                                      <td>Tiang &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_tiang" placeholder="Keterangan tiang"></td>
                                    </tr>
                                    <tr>
                                      <td>Anak tangga &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_antangga" placeholder="Keterangan anak tangga"></td>
                                    </tr>
                                    <tr>
                                      <td>Atap &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_atap" placeholder="Keterangan atap"></td>
                                    </tr>
                                    <tr>
                                      <td>Loteng &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_loteng" placeholder="Keterangan loteng"></td>
                                    </tr>
                                    <tr>
                                      <td>Banyaknya tingkat &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_banyaktingkat" placeholder="Keterangan banyak tingkat"></td>
                                    </tr>
                                    <tr>
                                      <td>Pondasi &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="ket_pondasi" placeholder="Keterangan pondasi"></td>
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
                                          name="jenis_penerangan_listrik" placeholder="Jenis penerangan listrik"></td>
                                    </tr>
                                    <tr>
                                      <td>Lampu dengan menggunakan bensin atau minyak tanah atau solar &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="jenis_lampu" placeholder="Jenis bahan bakar lampu"></td>
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
                                          name="jarak_bangunan_kiri" placeholder="Jarak sebalah kiri bangunan"></td>
                                    </tr>
                                    <tr>
                                      <td>Sebalah kanan &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="jarak_bangunan_kanan" placeholder="Jarak sebalah kanan bangunan"></td>
                                    </tr>
                                    <tr>
                                      <td>Dibagian belakang &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="jarak_bangunan_belakang" placeholder="Jarak bagian belakang bangunan">
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Dibagian depan &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="jarak_bangunan_depan" placeholder="Jarak bagian depan bangunan"></td>
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
                                    placeholder="Jika sebagai pabrik, sebutkan jenis - jenis komoditi yang dihasilkan"></textarea>
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
                                          name="lokasi_harta_benda_jalan" placeholder="Lokasi jalan"></td>

                                    </tr>
                                    <tr>
                                      <td>Kota &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="lokasi_harta_benda_kota" placeholder="Lokasi kota"></td>
                                    </tr>
                                    <tr>
                                      <td>Provinsi &nbsp;</td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="lokasi_harta_benda_provinsi" placeholder="Lokasi provinsi"></td>
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
                                          name="jenis_pemadam" placeholder="Jenis pemadam yang digunakan"></td>
                                      <td> <input type="number" class="form-control required" id="emailAddress5"
                                          name="jumlah_alat_pemadam" placeholder="Jumlah alat pemadam"></td>

                                    </tr>
                                    <tr>
                                      <td> <label for="emailAddress5">Jarak pos pemadam kebakaran dari lokasi yang
                                          dipertanggungkan <span class="danger">*</span> &nbsp;</label></td>
                                      <td> <input type="text" class="form-control required" id="emailAddress5"
                                          name="jarak_pos_pemadam" placeholder="Jarak pos pemadam kebakaran"></td>
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
                                    name="ket_barang_orang_lain"></textarea>
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
                                    name="ket_barang_asuransi_lain"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="eventName3">
                                    Pernahkah terjadi kerugian kebakaran atas harta benda yang dipertanggungkan diatas ?
                                    <span class="danger">*</span>
                                  </label>
                                  <textarea placeholder="jika iya, beri penjalasan." rows="4"
                                    class="form-control required" id="eventName3"
                                    name="ket_kerugian_kebakaran"></textarea>
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
                                    name="ket_barang_berbahaya"></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="eventName3">
                                    Pernahkah permohonan pertanggungan saudara di tolak atau dibatalkan oleh perusahan
                                    asuransi lain ?
                                    <span class="danger">*</span>
                                  </label>
                                  <textarea placeholder="jika iya, beri penjalasan." rows="4"
                                    class="form-control required" id="eventName3"
                                    name="ket_penolakan_asuransi"></textarea>
                                </div>
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="date3">Jangka waktu pertanggungan yang diminta <span
                                          class="danger">*</span>
                                      </label>
                                      <input type="date" class="form-control" id="date3" name="jangka_waktu">
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="date3">Batas waktu</label>
                                      <input type="date" class="form-control" id="date3" name="batas_waktu">
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
                                <label>Luas jaminan pertanggungan yang diminta</label>

                                <div class="form-group">
                                  <br>
                                  <label class=""
                                    style="font-weight:bold; font-size:16px;text-transform:uppercase;">Jaminan
                                    pokok</label>
                                  <br>
                                  <label>Kebakaran ( kebakaran, petir, ledakan, kejatuhan pesawat udara )</label>
                                  <div class="c-inputs-stacked">
                                    <!-- <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="checkbox" name="pertanggungan_kebakaran" class="custom-control-input"
                                        id="staffing3">
                                      <label class="custom-control-label" for="staffing3">Ya</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="checkbox" name="pertanggungan_kebakaran" class="custom-control-input"
                                        id="catering3">
                                      <label class="custom-control-label" for="catering3">Tidak</label>
                                    </div> -->
                                  </div>
                                  <br>
                                  <input type="text" class="form-control required" id="meetingLocation3"
                                    name="nilai_pertanggungan_kebakaran" placeholder="Harga pertanggungan kebakaran" value="0">
                                </div>

                                <div class="form-group">
                                  <br>
                                  <label class=""
                                    style="font-weight:bold; font-size:16px;text-transform:uppercase;">Perluasan
                                    Jaminan</label>
                                  <br>


                                  <div class="form-group">

<label>Gempa bumi, letusan gunung berapi</label>
<div class="row">
    <div class="col-md-3">
      <select style="" class="form-control"  name="jaminan_gempa" id="jaminan_gempa"></select>
    </div>
    <div class="col-md-3">
      <select style="" class="form-control"  name="jenis_jaminan_gempa" id="jenis_jaminan_gempa"></select>
    </div>
    <div class="col-md-3">
      <select style="" class="form-control"  name="zona_gempa"
        id="zona_gempa"></select>

    </div>
    <div class="col-md-3">
      <select style="" class="form-control"  name="nilai_jaminan_gempa"
        id="nilai_jaminan_gempa"></select>
    </div>
  </div>

<div class="c-inputs-stacked mt-2">
  <div class="d-inline-block custom-control custom-checkbox">
    <input type="radio" name="pertanggungan_gempa" class="custom-control-input"
      id="staffing4" onclick="ShowHideDivGempaBumi()">
    <label class="custom-control-label" for="staffing4">Ya</label>
  </div>
  <div class="d-inline-block custom-control custom-checkbox">
    <input type="radio" name="pertanggungan_gempa" class="custom-control-input"
      id="catering4" value="0" onclick="ShowHideDivGempaBumi()">
    <label class="custom-control-label" for="catering4">Tidak</label>
  </div>
</div>
<br>
<input readonly style="display: none" type="text" class="form-control required"
  id="nilai_pertanggungan_gempa" name="nilai_pertanggungan_gempa"
  placeholder="Harga pertanggungan gempa bumi dan letusan gunung berapi">
</div>
                                  <div class="form-group">

                                    <label>Banjir/angin topan, badai/kerusakan karena air</label>

                                    <div class="row">
                                      <div class="col-md-4">
                                        <select style="display: none;" class="form-control" onclick="ShowHideDivBanjir()" name="zona_banjir" id="zona_banjir"></select>
                                      </div>
                                      <div class="col-md-4">
                                        <select style="display: none;" class="form-control" onclick="ShowHideDivBanjir()" name="daerah_banjir" id="daerah_banjir"></select>

                                      </div>
                                      <div class="col-md-4">
                                        <select style="display: none;" class="form-control" onclick="ShowHideDivBanjir()" name="nilai_zona_banjir"
                                          id="nilai_zona_banjir"></select>

                                      </div>
                                    </div>

                                    <div class="c-inputs-stacked mt-2">
                                      <div class="d-inline-block custom-control custom-checkbox">
                                        <input type="radio" name="pertanggungan_banjir" class="custom-control-input"
                                          id="staffing5" onclick="ShowHideDivBanjir()">
                                        <label class="custom-control-label" for="staffing5">Ya</label>
                                      </div>
                                      <div class="d-inline-block custom-control custom-checkbox">
                                        <input type="radio" name="pertanggungan_banjir" class="custom-control-input"
                                          id="catering5" value="0" onclick="ShowHideDivBanjir()">
                                        <label class="custom-control-label" for="catering5">Tidak</label>
                                      </div>
                                    </div>
                                    <br>
                                    <input readonly style="display: none;" type="text" class="form-control required"
                                      id="nilai_pertanggungan_banjir" name="nilai_pertanggungan_banjir"
                                      placeholder="Harga pertanggungan banjir/angin topan, badai/kerusakan karena air">
                                  </div>
                                  <label>Perluasan jaminan ( Kerusuhan, Pemogokan, Akibat perbuatan jahat, tertabrak
                                    kendaraan, asap )</label>
                                  <div class="c-inputs-stacked">
                                    <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="radio" name="pertanggungan_kerusakan" class="custom-control-input"
                                        id="staffing3" value="" id="chkYes" onclick="ShowHideDivPerluasanJaminan()">
                                      <label class="custom-control-label" for="staffing3">Ya</label>
                                    </div>
                                    <div class="d-inline-block custom-control custom-checkbox">
                                      <input type="radio" name="pertanggungan_kerusakan" class="custom-control-input"
                                        id="catering3" value="0" onclick="ShowHideDivPerluasanJaminan()">
                                      <label class="custom-control-label" for="catering3">Tidak</label>
                                    </div>
                                  </div>
                                  <br>
                                  <input readonly style="display: none" type="text" class="form-control required"
                                    id="nilai_pertanggungan_kerusakan" name="nilai_pertanggungan_kerusakan"
                                    placeholder="Harga pertanggungan perluasan jaminan" >
                                </div>





                                <!-- <div class="form-group">

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
                                  <input type="text" class="form-control required"
                                    id="nilai_pertanggungan_biaya_pembersihan"
                                    name="nilai_pertanggungan_biaya_pembersihan"
                                    placeholder="Harga pertanggungan biaya pembersihan">
                                </div> -->
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
                                          name="biaya_polis" value="50.000" readonly></td>
                                    </tr>
                                    <tr>
                                      <td>Premi dasar &nbsp;</td>
                                      <td> <input type="number" class="form-control required" id="premi_dasar"
                                          name="premi_dasar" placeholder="Premi dasar"></td>
                                    </tr>
                                    <tr>
                                      <td>Total bayar &nbsp;</td>
                                      <td> <input readonly type="number" class="form-control required" id="total_pembayaran"
                                          name="total_pembayaran" placeholder="Total pembayaran" ></td>
                                    </tr>

                                  </table>
                                </div>

                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 col-lg-12">
                                <div class="button-save-form-customer mb-2" align="right">
                                  <Button type="submit" id="btn-show" class="btn btn-success">Simpan</Button>
                                </div>
                              </div>
                            </div>
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
      <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
      <!-- BEGIN VENDOR JS-->
      <!-- BEGIN PAGE VENDOR JS-->
      <script src="app-assets/vendors/js/extensions/jquery.steps.min.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/pickers/daterange/daterangepicker.js" type="text/javascript"></script>
      <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js" type="text/javascript"></script>
      <!-- END PAGE VENDOR JS-->
      <!-- BEGIN MODERN JS-->
      <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
      <script src="app-assets/js/core/app.js" type="text/javascript"></script>
      <script src="app-assets/js/scripts/customizer.js" type="text/javascript"></script>
      <!-- END MODERN JS-->
      <!-- BEGIN PAGE LEVEL JS-->
      <!-- <script src=" app-assets/js/scripts/forms/wizard-steps.js" type="text/javascript"></script> -->
      <!-- END PAGE LEVEL JS-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      

      <script type="text/javascript">
        // $("#btn-show").keyup(function () {
        //        let sasa = 'sdadwa';
        //        alert(sasa);
        //         }
        let nilai_bangunan = 0;
        let nilai_banjir = 0;
        let total_nilai_bangunan = 0;
        let premi_dasar = 0;
        let huru_hara = 0;
        let biaya_polis = 0;
        let nilai_jaminan_gempa = 0;

        $(".perhitungan").keyup(function () {
          
          let nilai_bangungan = parseInt($("#nilai_bangungan").val())
          let nilai_mesin = parseInt($("#nilai_mesin").val())
          let nilai_barang = parseInt($("#nilai_barang").val())
          let nilai_dagangan = parseInt($("#nilai_dagangan").val())
          let nilai_perabot_rumah = parseInt($("#nilai_perabot_rumah").val())
          let nilai_perabot_kantor = parseInt($("#nilai_perabot_kantor").val())
          let nilai_lain = parseInt($("#nilai_lain").val())
          


          // let total_keseluruhan = nilai_bangungan + nilai_mesin + nilai_barang + nilai_dagangan +
          //   nilai_perabot_rumah + nilai_perabot_kantor + nilai_lain  ;

          let total_keseluruhan = nilai_bangungan + nilai_mesin + nilai_barang + nilai_dagangan +
            nilai_perabot_rumah + nilai_perabot_kantor + nilai_lain;
          $("#premi_dasar").attr("value", total_keseluruhan * (nilai_bangunan / 100));
          $("#total_keseluruhan").attr("value", total_keseluruhan)
          $("#total_pembayaran").attr("value", total_keseluruhan * (nilai_bangunan / 100));

          
          premi_dasar = total_keseluruhan * (nilai_bangunan / 100);
          total_nilai_bangunan = total_keseluruhan;
          huru_hara = (total_keseluruhan * (nilai_bangunan / 100)) * 100/100;
          biaya_polis = 50000;
          // $("#ket_lantai").attr("value", sasa)

          console.log(total_keseluruhan);
        });
      </script>
      
 <!-- Gempa -->

 <script type="text/javascript">
        $(document).ready(function () {
          $("#jaminan_gempa").append('<option value="">Jaminan gempa</option>');
          url = 'get_jaminan_gempa.php';
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
              for (var i = 0; i < result.length; i++)
                $("#jaminan_gempa").append('<option value="' + result[i].id_jaminan_gempa + '">' + result[i]
                  .nama_jaminan +
                  '</option>');
            }
          });
        });

        $("#jaminan_gempa").change(function () {
          var id_jaminan_gempa = $("#jaminan_gempa").val();
          var url = 'get_jenis_jaminan_gempa.php?id_jaminan_gempa=' + id_jaminan_gempa ;
          $("#jenis_jaminan_gempa").append('<option value="">Jenis Jaminan Gempa</option>');
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
              for (var i = 0; i < result.length; i++)
                $("#jenis_jaminan_gempa").append('<option value="' + result[i].id_jenis_jaminan_gempa + '">' + result[i].nama_jenis_jaminan +
                  '</option>');
    
            }      
          });
        });

        $(document).ready(function () {
          $("#zona_gempa").append('<option value="">Zona Gempa</option>');
          url = 'get_zona_gempa.php';
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
              for (var i = 0; i < result.length; i++)
                $("#zona_gempa").append('<option value="' + result[i].id_zona + '">' + result[i]
                  .nama_zona_gempa +
                  '</option>');
            }
          });
        });

        $("#zona_gempa").change(function () {
          var id_zona = $("#zona_gempa").val();
          var id_jaminan_gempa = $("#jaminan_gempa").val();
          var id_jenis_jaminan_gempa = $("#jenis_jaminan_gempa").val();

          var url = 'get_nilai_jaminan_gempa.php?id_zona=' + id_zona + '&id_jenis_jaminan_gempa=' + id_jenis_jaminan_gempa + '&id_jaminan_gempa=' + id_jaminan_gempa ;
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
              for (var i = 0; i < result.length; i++)
                $("#nilai_jaminan_gempa").append('<option value="' + result[i].id_nilai_gempa + '">' + result[i].nilai_zona_gempa +
                  '</option>');

                  nilai_jaminan_gempa = result[0].nilai_zona_gempa;  
                  // nilaiGempa = total_nilai_bangunan * (nilai_jaminan_gempa/100);
                  // $("#nilai_pertanggungan_gempa").attr("value", nilaiGempa);

            }      
          });
        });
      </script>
      <!-- Banjir -->
      <script type="text/javascript">
        $(document).ready(function () {
          $("#zona_banjir").append('<option value="">Zona Banjir</option>');
          url = 'get_zona_banjir.php';
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
              for (var i = 0; i < result.length; i++)
                $("#zona_banjir").append('<option value="' + result[i].id_zona_banjir + '">' + result[i]
                  .nilai_zona +
                  '</option>');
            }
          });
        });

        $(document).ready(function () {
          $("#daerah_banjir").append('<option value="">Daerah Banjir</option>');
          url = 'get_daerah_zona_banjir.php';

          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
              for (var i = 0; i < result.length; i++)
                $("#daerah_banjir").append('<option value="' + result[i].id_daerah + '">' + result[i]
                  .nama +
                  '</option>');
            }
          });
        });

        $("#daerah_banjir").change(function () {
          var id_daerah = $("#daerah_banjir").val();
          var id_zona_banjir = $("#zona_banjir").val();
          var url = 'get_nilai_zona_banjir.php?id_daerah=' + id_daerah + '&id_zona_banjir=' + id_zona_banjir;
          $("#nilai_zona_banjir").html('');
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
              for (var i = 0; i < result.length; i++)
                $("#nilai_zona_banjir").append('<option value="' + result[i].id_nilai_banjir + '">' + result[
                    i].nilai +'</option>');

                    nilai_banjir = result[0].nilai;
                    perluasanJaminanBanjir = total_nilai_bangunan * (nilai_banjir / 100);
                    premiDasar = premi_dasar;
                    huruHara = huru_hara;
                    biayaPolis = biaya_polis;                  
                    nilaiGempa = total_nilai_bangunan * (nilai_jaminan_gempa/100);
                    
                    total_pembayaran = nilaiGempa + perluasanJaminanBanjir + premiDasar + huruHara +biayaPolis;

                    $("#nilai_pertanggungan_gempa").attr("value", nilaiGempa);
                    $("#nilai_pertanggungan_kerusakan").attr("value", huruHara);
                    $("#total_pembayaran").attr("value", total_pembayaran);
                    $("#nilai_pertanggungan_banjir").attr("value", perluasanJaminanBanjir);

            }
          });
        });
      </script>
     




      <!-- Bangunan -->
      <script type="text/javascript">
        $(document).ready(function () {
          $("#jenis_bangunan").append('<option value="">Pilih</option>');
          url = 'get_jenis_bangunan.php';
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
              for (var i = 0; i < result.length; i++)
                $("#jenis_bangunan").append('<option value="' + result[i].id_bangunan + '">' + result[i]
                  .tipe_bangunan +
                  '</option>');
            }
          });
        });

        $(document).ready(function () {
          $("#jenis_konstruksi").append('<option value="">Pilih</option>');
          url = 'get_jenis_konstruksi.php';

          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
              for (var i = 0; i < result.length; i++)
                $("#jenis_konstruksi").append('<option value="' + result[i].id_jenis + '">' + result[i]
                  .jenis +
                  '</option>');
            }
          });
        });

        $("#jenis_konstruksi").change(function () {
          var id_jenis = $("#jenis_konstruksi").val();
          var id_bangunan = $("#jenis_bangunan").val();
          var url = 'get_nilai_bangunan.php?id_jenis=' + id_jenis + '&id_bangunan=' + id_bangunan;
          $("#nilai_bangunan").html('');
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
              for (var i = 0; i < result.length; i++)
                $("#nilai_bangunan").append('<option value="' + result[i].id_nilai + '">' + result[i].nilai +
                  '</option>');

                  // Global
                  nilai_bangunan = result[0].nilai;  
    
            }
            
          });
        });
      </script>


      <!-- Pronvinsi -->
      <script type="text/javascript">
        $(document).ready(function () {
          $("#provinsi").append('<option value="">Pilih</option>');
          $("#kabupaten").html('');
          $("#kecamatan").html('');
          $("#kelurahan").html('');
          $("#kabupaten").append('<option value="">Pilih</option>');
          $("#kecamatan").append('<option value="">Pilih</option>');
          $("#kelurahan").append('<option value="">Pilih</option>');
          url = 'get_provinsi.php';
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
              for (var i = 0; i < result.length; i++)
                $("#provinsi").append('<option value="' + result[i].id_prov + '">' + result[i].nama +
                  '</option>');
            }
          });
        });
        $("#provinsi").change(function () {
          var id_prov = $("#provinsi").val();
          var url = 'get_kabupaten.php?id_prov=' + id_prov;
          $("#kabupaten").html('');
          $("#kecamatan").html('');
          $("#kelurahan").html('');
          $("#kabupaten").append('<option value="">Pilih</option>');
          $("#kecamatan").append('<option value="">Pilih</option>');
          $("#kelurahan").append('<option value="">Pilih</option>');
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'json',
            success: function (result) {
              for (var i = 0; i < result.length; i++)
                $("#kabupaten").append('<option value="' + result[i].id_kab + '">' + result[i].nama +
                  '</option>');
            }
          });
        });
      </script>



      <!-- onclick -->

      <script type="text/javascript">
      function ShowHideDivBanjir() {
          var chkYes = document.getElementById("staffing5");
          var dvPassport = document.getElementById("nilai_pertanggungan_banjir");
          var dvZonaBanjir = document.getElementById("zona_banjir");
          var dvDaerahBanjir = document.getElementById("daerah_banjir");
          var dvNilaiZonaBanjir = document.getElementById("nilai_zona_banjir");

          dvPassport.style.display = chkYes.checked ? "block" : "none";
          dvZonaBanjir.style.display = chkYes.checked ? "block" : "none";
          dvDaerahBanjir.style.display = chkYes.checked ? "block" : "none";
          dvNilaiZonaBanjir.style.display = chkYes.checked ? "block" : "none";
        }
        function ShowHideDivPerluasanJaminan() {
          var chkYes = document.getElementById("staffing3");
          var dvPassport = document.getElementById("nilai_pertanggungan_kerusakan");
          dvPassport.style.display = chkYes.checked ? "block" : "none";
        }

        function ShowHideDivGempaBumi() {
          var chkYes = document.getElementById("staffing4");
          var dvPassport = document.getElementById("nilai_pertanggungan_gempa");
          dvPassport.style.display = chkYes.checked ? "block" : "none";
        }

        
      </script>

    
    </body>

    </html>