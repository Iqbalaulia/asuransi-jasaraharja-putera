<?php
// include database connection file
include_once("connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
    $no_polis = $_POST['no_polis'];
    $tertanggung = $_POST['tertanggung'];
    $no_telp = $_POST['no_telp'];
    $obyek_pertanggungan = $_POST['obyek_pertanggungan'];
    $harga_pertanggungan = $_POST['harga_pertanggungan'];
    $luas_jaminan = $_POST['luas_jaminan'];
    $jangka_waktu = $_POST['jangka_waktu'];
    $batas_waktu = $_POST['batas_waktu'];
    $lokasi_obyek = $_POST['lokasi_obyek'];
    $alamat = $_POST['alamat'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE form_polis SET 
    no_polis='$no_polis',tertanggung='$tertanggung',
    no_telp='$no_telp',
    obyek_pertanggungan='$obyek_pertanggungan',
    harga_pertanggungan='$harga_pertanggungan',
    luas_jaminan='$luas_jaminan',
    jangka_waktu='$jangka_waktu',
    batas_waktu='$batas_waktu',
    lokasi_obyek='$lokasi_obyek',
    alamat='$alamat' 
    WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: form-polis-index.php");
}
?>