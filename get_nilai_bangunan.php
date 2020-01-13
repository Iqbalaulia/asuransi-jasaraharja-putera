<?php
include('connection.php');
$id_jenis = $_GET['id_jenis'];
$id_bangunan = $_GET['id_bangunan'];
$result = mysqli_query($koneksi, "select a.jenis,b.tipe_bangunan,c.nilai from nilai_bangunan c JOIN jenis_konstruksi a ON a.id_jenis = c.id_jenis JOIN jenis_bangunan b on b.id_bangunan = c.id_bangunan WHERE b.id_bangunan = '$id_bangunan' AND c.id_jenis = '$id_jenis'");

$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_nilai" => $row['id_nilai'], "id_jenis" => $row['id_jenis'], "id_bangunan" => $row['id_bangunan'], "nilai" => $row['nilai']);
}
echo json_encode($data);
?>