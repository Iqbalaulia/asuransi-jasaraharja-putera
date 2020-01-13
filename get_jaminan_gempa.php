<?php
include('connection.php');

$result = mysqli_query($koneksi, "SELECT * FROM jaminan_gempa");

$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_jaminan_gempa" => $row['id_jaminan_gempa'], "nama_jaminan" => $row['nama_jaminan']);
}
echo json_encode($data);
?>