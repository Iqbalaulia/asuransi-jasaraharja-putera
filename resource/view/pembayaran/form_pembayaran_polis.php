<?php
// include database connection file
include_once("../../../connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{  
    $id = $_POST['id'];

    $polis = mysqli_query($koneksi, "SELECT * FROM form_polis WHERE id=$id");
    while($form_polis = mysqli_fetch_array($polis)) { 
        $harga_pertanggungan     = $form_polis['harga_pertanggungan'];
    };

    $id = $_POST['id'];
    $pembayaran_polis = $_POST['pembayaran_polis'];
    $total_kembalian = $pembayaran_polis - $harga_pertanggungan;
    $status_pembayaran = 'Lunas';
    // update user data
    $result = mysqli_query($koneksi, "UPDATE form_polis SET 
    total_kembalian='$total_kembalian',status_pembayaran='$status_pembayaran'
    WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: dashboard-pembayaran.php");
}
?>