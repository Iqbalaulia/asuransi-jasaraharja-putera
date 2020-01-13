<?php
include('connection.php');

$result = mysqli_query($koneksi, "SELECT * FROM zona_banjir");

$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_zona_banjir" => $row['id_zona_banjir'], "nilai_zona" => $row['nilai_zona'], "ket_zona" => $row['ket_zona']);
}
echo json_encode($data);
?>