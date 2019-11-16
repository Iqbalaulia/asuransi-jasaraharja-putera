
<?php

include("connection.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Submit'])){

    // ambil data dari formulir
    $nama_lengkap = $_POST['nama_lengkap'];
   $alamat_pemohon = $_POST['alamat_pemohon'];
    $nilai_bangungan = $_POST['nilai_bangungan'];
    $nilai_mesin = $_POST['nilai_mesin'];
    $nilai_barang = $_POST['nilai_barang'];
    $nilai_dagangan = $_POST['nilai_dagangan'];
    $nilai_perabot_rumah = $_POST['nilai_perabot_rumah'];
    $nilai_perabot_kantor = $_POST['nilai_perabot_kantor'];
    $nilai_lain = $_POST['nilai_lain'];
    $ket_bangunan = $_POST['ket_bangunan'];
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
    $jarak_bangunan_depan = $_POST['jarak_bangunan_depan'];
    $jarak_bangunan_belakang = $_POST['jarak_bangunan_belakang'];
    $jenis_pemadam = $_POST['jenis_pemadam'];
    $jumlah_alat_pemadam = $_POST['jumlah_alat_pemadam'];
    $ket_barang_orang_lain = $_POST['ket_barang_orang_lain'];
    $ket_barang_berbahaya = $_POST['ket_barang_berbahaya'];
    $ket_barang_asuransi_lain = $_POST['ket_barang_asuransi_lain'];
    $ket_penolakan_asuransi = $_POST['ket_penolakan_asuransi'];
    $ket_kerugian_kebakaran = $_POST['ket_kerugian_kebakaran'];
    $jangka_waktu = $_POST['jangka_waktu'];
    $bangunan_dipertanggungkan = $_POST['bangunan_dipertanggungkan'];
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

    // buat query
    // $sql = "INSERT INTO form_customer(nama_lengkap) VALUES ('.$nama_lengkap.')"; 
    $sql = "INSERT INTO form_customer VALUES ('.$nama_lengkap.','.$alamat_pemohon.',
    '$nilai_bangungan',
    '$nilai_mesin',
    '$nilai_barang',
    '$nilai_dagangan',
    '$nilai_perabot_rumah',
    '$nilai_perabot_kantor','$nilai_lain','$ket_bangunan','$ket_lantai','$ket_balok',
    '$ket_balok_lantai','$ket_pilar','$ket_tiang','$ket_antangga','$ket_atap','$ket_loteng',
    '$ket_banyaktingkat','$ket_pondasi','$jenis_penerangan_listrik','$jenis_lampu','$jarak_bangunan_kiri',
    '$jarak_bangunan_kanan','$jarak_bangunan_depan','$jarak_bangunan_belakang','$jenis_pemadam',
    '$jumlah_alat_pemadam','$ket_barang_orang_lain','$ket_barang_berbahaya','$ket_barang_asuransi_lain',
    '$ket_penolakan_asuransi','$ket_kerugian_kebakaran','$jangka_waktu','$bangunan_dipertanggungkan',
    '$pertanggungan_kebakaran','$nilai_pertanggungan_kebakaran','$pertanggungan_kerusakan','$nilai_pertanggungan_kerusakan',
    '$pertanggungan_gempa','$nilai_pertanggungan_gempa','$pertanggungan_banjir','$nilai_pertanggungan_banjir',
    '$pertanggungan_biaya_pembersihan','$nilai_pertanggungan_biaya_pembersihan','$biaya_polis','$premi_dasar','$total_pembayaran')";
    
    $query = mysqli_query($conn, $sql);
    // echo $query;
    // dd($query);-
    // apakah query simpan berhasil?
    if($query) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        // header('Location: form-customer.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        // header('Location: form-customer.php');
    }


} else {
    die("Akses dilarang...");
}

?>