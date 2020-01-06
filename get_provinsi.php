<?php
include('connection.php');

$result = mysqli_query($koneksi, "SELECT * FROM provinsi");

$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_prov" => $row['id_prov'], "nama" => $row['nama']);
}
echo json_encode($data);
?>