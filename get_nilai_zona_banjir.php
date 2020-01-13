<?php
include('connection.php');
$id_zona_banjir = $_GET['id_zona_banjir'];
$id_daerah  =   $_GET['id_daerah'];
$result = mysqli_query($koneksi, "select a.nilai_zona, a.ket_zona,b.nama,c.nilai from nilai_zona_banjir c JOIN zona_banjir a ON a.id_zona_banjir = c.id_zona_banjir JOIN daerah_zona_banjir b on b.id_daerah = c.id_daerah WHERE b.id_daerah = '$id_daerah' AND c.id_zona_banjir = '$id_zona_banjir' ");

while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_nilai_banjir" => $row['id_nilai_banjir'], "id_daerah" => $row['id_daerah'], "id_zona_banjir" => $row['id_zona_Banjir'], "nilai" => $row['nilai']);
}
echo json_encode($data);
?>