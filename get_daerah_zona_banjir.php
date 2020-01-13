<?php
include('connection.php');

$result = mysqli_query($koneksi, "SELECT * FROM daerah_zona_banjir");

$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_daerah" => $row['id_daerah'], "nama" => $row['nama']);
}
echo json_encode($data);
?>