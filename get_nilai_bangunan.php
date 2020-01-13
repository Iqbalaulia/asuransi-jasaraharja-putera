<?php
include('connection.php');
$id_jenis = $_GET['id_jenis'];
$result = mysqli_query($koneksi, "SELECT * FROM nilai_bangunan WHERE `id_jenis` = '$id_jenis'");

$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_nilai" => $row['id_nilai'], "id_jenis" => $row['id_jenis'], "id_bangunan" => $row['id_bangunan'], "nilai" => $row['nilai']);
}
echo json_encode($data);
?>