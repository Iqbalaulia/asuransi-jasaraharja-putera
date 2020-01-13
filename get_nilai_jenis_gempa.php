<?php
//include('connection.php');
//$id_zona_banjir = $_GET['id_zona_banjir'];
//$id_daerah  =   $_GET['id_daerah'];
//$result = mysqli_query($koneksi, "select a.nilai_zona, a.ket_zona,b.nama,c.nilai from nilai_zona_banjir c JOIN zona_banjir a ON a.id_zona_banjir = c.id_zona_banjir JOIN daerah_zona_banjir b on b.id_daerah = c.id_daerah WHERE b.id_daerah = '$id_daerah' AND c.id_zona_banjir = '$id_zona_banjir' ");

//while($row = $result->fetch_array(MYSQLI_ASSOC)){
//$data[] = array("id_nilai_banjir" => $row['id_nilai_banjir'], "id_daerah" => $row['id_daerah'], "id_zona_banjir" => $row['id_zona_Banjir'], "nilai" => $row['nilai']);
//}
//echo json_encode($data);
?>

<?php
include('connection.php');

$result = mysqli_query($koneksi, "SELECT * FROM nilai_jaminan_gempa");

$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_nilai_gempa" => $row['id_nilai_gempa'], "id_jaminan_gempa" => $row['id_jaminan_gempa'], "id_jenis_jaminan_gempa" => $row['id_jenis_jaminan_gempa'], "id_zona" => $row['id_zona'], "nilai_zona_gempa" => $row['nilai_zona_gempa']);
}
echo json_encode($data);
?>