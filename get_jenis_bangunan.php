<?php
include('connection.php');

$result = mysqli_query($koneksi, "SELECT * FROM jenis_bangunan");

$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_bangunan" => $row['id_bangunan'], "tipe_bangunan" => $row['tipe_bangunan']);
}
echo json_encode($data);
?>