<?php
// include database connection file
include_once("connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
  
    $id = $_GET['id'];
    $status_form = 'Approved';
    // update user data
    $result = mysqli_query($koneksi, "UPDATE form_customer SET status_form='$status_form' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: form-customer-jasarahaja.php");

?>