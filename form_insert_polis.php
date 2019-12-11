<?php 

    // koneksi database
include 'connection.php';
 
// menangkap data yang di kirim dari form
    $id = $_POST['id'];
    $status_polis = 'Telah dibuat';
    $no_polis = '121';
    $tertanggung = $_POST['tertanggung'];
    $no_telp = $_POST['no_telp'];
    $obyek_pertanggungan = $_POST['obyek_pertanggungan'];
    $harga_pertanggungan = $_POST['harga_pertanggungan'];
    $luas_jaminan = $_POST['luas_jaminan'];
    $jangka_waktu = $_POST['jangka_waktu'];
    $batas_waktu = $_POST['batas_waktu'];
    $lokasi_obyek = $_POST['lokasi_obyek'];
    $alamat = $_POST['alamat'];
 
  
// menginput data ke database
mysqli_query($koneksi,"INSERT INTO form_polis 
(id,no_polis,tertanggung,no_telp,obyek_pertanggungan,harga_pertanggungan,luas_jaminan,
jangka_waktu,batas_waktu,lokasi_obyek,alamat) VALUES
(NULL,'$no_polis','$tertanggung','$no_telp','$obyek_pertanggungan','$harga_pertanggungan','$luas_jaminan',
'$jangka_waktu','$batas_waktu','$lokasi_obyek','$alamat')");

// mengalihkan halaman kembali ke index.php
mysqli_query($koneksi, "UPDATE form_customer SET status_polis='$status_polis' WHERE id=$id");

header("location:form-customer-jasarahaja.php");
?>
