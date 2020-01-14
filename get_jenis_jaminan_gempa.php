<?php
include('connection.php');
$id_jaminan_gempa = $_GET['id_jaminan_gempa'];
$result = mysqli_query($koneksi, "SELECT * FROM jenis_jaminan_gempa WHERE id_jaminan_gempa = '$id_jaminan_gempa'");

$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_jenis_jaminan_gempa" => $row['id_jenis_jaminan_gempa'],"id_jaminan_gempa" => $row['id_jaminan_gempa'], "nama_jenis_jaminan" => $row['nama_jenis_jaminan']);
}
echo json_encode($data);
?>