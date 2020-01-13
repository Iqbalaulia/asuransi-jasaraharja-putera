<?php
include('connection.php');

$result = mysqli_query($koneksi, "SELECT * FROM jenis_konstruksi");

$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_jenis" => $row['id_jenis'], "jenis" => $row['jenis']);
}
echo json_encode($data);
?>