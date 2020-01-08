<?php 


    // koneksi database
include 'connection.php';
 
// menangkap data yang di kirim dari form
 $nama_lengkap = $_POST['nama_lengkap'];
 $no_telp = $_POST['no_telp'];
 $alamat_pemohon = $_POST['alamat_pemohon'];
 $provinsi = $_POST['provinsi'];
 $kabkot = $_POST['kabkot'];
 $alamat_bangunan = $_POST['alamat_bangunan'];
 $nilai_bangungan = $_POST['nilai_bangungan'];
 $nilai_mesin = $_POST['nilai_mesin'];
 $nilai_barang = $_POST['nilai_barang'];
 $nilai_dagangan = $_POST['nilai_dagangan'];
 
    $nilai_perabot_rumah = $_POST['nilai_perabot_rumah'];
    $nilai_perabot_kantor = $_POST['nilai_perabot_kantor'];
    $nilai_lain = $_POST['nilai_lain'];
    $total_keseluruhan = $_POST['total_keseluruhan'];
    $ket_dinding_luar = $_POST['ket_dinding_luar'];
    $ket_dinding_dalam = $_POST['ket_dinding_dalam'];
    $ket_dinding_pemisah = $_POST['ket_dinding_pemisah'];
    $ket_lantai = $_POST['ket_lantai'];
    $ket_balok = $_POST['ket_balok'];
    $ket_balok_lantai = $_POST['ket_balok_lantai'];
    $ket_pilar = $_POST['ket_pilar'];
    $ket_tiang = $_POST['ket_tiang'];
    $ket_antangga = $_POST['ket_antangga'];
    $ket_atap = $_POST['ket_atap'];
    $ket_loteng = $_POST['ket_loteng'];
    $ket_banyaktingkat = $_POST['ket_banyaktingkat'];
    $ket_pondasi = $_POST['ket_pondasi'];

    $jenis_penerangan_listrik = $_POST['jenis_penerangan_listrik'];
    $jenis_lampu = $_POST['jenis_lampu'];
    $jarak_bangunan_kiri = $_POST['jarak_bangunan_kiri'];
    $jarak_bangunan_kanan = $_POST['jarak_bangunan_kanan'];
    $jarak_bangunan_belakang = $_POST['jarak_bangunan_belakang'];
    $jarak_bangunan_depan = $_POST['jarak_bangunan_depan'];
    $ket_bangunan_digunakan = $_POST['ket_bangunan_digunakan'];
    $lokasi_harta_benda_jalan = $_POST['lokasi_harta_benda_jalan'];
    $lokasi_harta_benda_kota = $_POST['lokasi_harta_benda_kota'];
    $lokasi_harta_benda_provinsi = $_POST['lokasi_harta_benda_provinsi'];
    $jenis_pemadam = $_POST['jenis_pemadam'];

    $jumlah_alat_pemadam = $_POST['jumlah_alat_pemadam'];
    $jarak_pos_pemadam = $_POST['jarak_pos_pemadam'];
    $ket_barang_orang_lain = $_POST['ket_barang_orang_lain'];
    $ket_barang_berbahaya = $_POST['ket_barang_berbahaya'];
    $ket_barang_asuransi_lain = $_POST['ket_barang_asuransi_lain'];
    $ket_penolakan_asuransi = $_POST['ket_penolakan_asuransi'];
    $ket_kerugian_kebakaran = $_POST['ket_kerugian_kebakaran'];
    $jangka_waktu = $_POST['jangka_waktu'];
    $batas_waktu = $_POST['batas_waktu'];
    $pertanggungan_kebakaran = $_POST['pertanggungan_kebakaran'];
    $nilai_pertanggungan_kebakaran = $_POST['nilai_pertanggungan_kebakaran'];
    $pertanggungan_kerusakan = $_POST['pertanggungan_kerusakan'];
    $nilai_pertanggungan_kerusakan = $_POST['nilai_pertanggungan_kerusakan'];
    $pertanggungan_gempa = $_POST['pertanggungan_gempa'];
    $nilai_pertanggungan_gempa = $_POST['nilai_pertanggungan_gempa'];
    $pertanggungan_banjir = $_POST['pertanggungan_banjir'];
    $nilai_pertanggungan_banjir = $_POST['nilai_pertanggungan_banjir'];
    $pertanggungan_biaya_pembersihan = $_POST['pertanggungan_biaya_pembersihan'];
    $nilai_pertanggungan_biaya_pembersihan = $_POST['nilai_pertanggungan_biaya_pembersihan'];
    $biaya_polis = $_POST['biaya_polis'];
    $premi_dasar = $_POST['premi_dasar'];
    $total_pembayaran = $_POST['total_pembayaran'];
    $status_form = 'Pending';

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO form_customer 
(id,nama_lengkap,no_telp,alamat_pemohon,provinsi,kabkot,alamat_bangunan,nilai_bangunan,nilai_mesin,nilai_barang,nilai_dagangan,
nilai_perabot_rumah,nilai_perabot_kantor,nilai_lain,total_keseluruhan,ket_dinding_luar,
ket_dinding_dalam,ket_dinding_pemisah,ket_lantai,ket_balok,ket_balok_lantai,ket_pilar,
ket_tiang,ket_antangga,ket_atap,ket_loteng,ket_banyaktingkat,ket_pondasi,jenis_penerangan_listrik,
jenis_lampu,jarak_bangunan_kiri,jarak_bangunan_kanan,jarak_bangunan_belakang,jarak_bangunan_depan,
ket_bangunan_digunakan,lokasi_harta_benda_jalan,lokasi_harta_benda_kota,lokasi_harta_benda_provinsi,
jenis_pemadam,jumlah_alat_pemadam,jarak_pos_pemadam,ket_barang_orang_lain,ket_barang_berbahaya,ket_barang_asuransi_lain,
ket_penolakan_asuransi,ket_kerugian_kebakaran,jangka_waktu,batas_waktu,pertanggungan_kebakaran,nilai_pertanggungan_kebakaran,
pertanggungan_kerusakan,nilai_pertanggungan_kerusakan,pertanggungan_gempa,nilai_pertanggungan_gempa,pertanggungan_banjir,
nilai_pertanggungan_banjir,pertanggungan_biaya_pembersihan,nilai_pertanggungan_biaya_pembersihan,
biaya_polis,premi_dasar,total_pembayaran,status_form) VALUES
(NULL,'$nama_lengkap','$no_telp','$alamat_pemohon','$provinsi','$kabkot','$alamat_bangunan','$nilai_bangungan','$nilai_mesin','$nilai_barang','$nilai_dagangan',
'$nilai_perabot_rumah','$nilai_perabot_kantor','$nilai_lain','$total_keseluruhan','$ket_dinding_luar',
'$ket_dinding_dalam','$ket_dinding_pemisah','$ket_lantai','$ket_balok','$ket_balok_lantai','$ket_pilar',
'$ket_tiang','$ket_antangga','$ket_atap','$ket_loteng','$ket_banyaktingkat','$ket_pondasi','$jenis_penerangan_listrik',
'$jenis_lampu','$jarak_bangunan_kiri','$jarak_bangunan_kanan','$jarak_bangunan_belakang',
'$jarak_bangunan_depan','$ket_bangunan_digunakan','$lokasi_harta_benda_jalan','$lokasi_harta_benda_kota','$lokasi_harta_benda_provinsi',
'$jenis_pemadam','$jumlah_alat_pemadam','$jarak_pos_pemadam','$ket_barang_orang_lain','$ket_barang_berbahaya',
'$ket_barang_asuransi_lain','$ket_penolakan_asuransi','$ket_kerugian_kebakaran','$jangka_waktu','$batas_waktu',
'$pertanggungan_kebakaran','$nilai_pertanggungan_kebakaran','$pertanggungan_kerusakan','$nilai_pertanggungan_kerusakan' ,
'$pertanggungan_gempa','$nilai_pertanggungan_gempa','$pertanggungan_banjir','$nilai_pertanggungan_banjir',
'$pertanggungan_biaya_pembersihan','$nilai_pertanggungan_biaya_pembersihan','$biaya_polis','$premi_dasar',
'$total_pembayaran','$status_form')");
 
// mengalihkan halaman kembali ke index.php
header("location:form-customer.php");
?>
