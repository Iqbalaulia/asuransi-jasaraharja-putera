<?php
include('connection.php');
$id_zona_banjir = $_GET['id_zona_banjir'];
$result = mysqli_query($koneksi, "SELECT * FROM nilai_zona_banjir WHERE `id_zona_banjir` = '$id_zona_banjir'");

$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_nilai_banjir" => $row['id_nilai_banjir'], "id_daerah" => $row['id_daerah'], "id_zona_banjir" => $row['id_zona_Banjir'], "nilai" => $row['nilai']);
}
echo json_encode($data);
?>