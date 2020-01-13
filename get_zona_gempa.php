<?php
include('connection.php');

$result = mysqli_query($koneksi, "SELECT * FROM zona_gempa");

$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_zona" => $row['id_zona'],"nama_zona_gempa" => $row['nama_zona_gempa']);
}
echo json_encode($data);
?>