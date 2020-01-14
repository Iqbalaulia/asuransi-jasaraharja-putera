
<?php
include('connection.php');
$id_zona = $_GET['id_zona'];
$id_jenis_jaminan_gempa = $_GET['id_jenis_jaminan_gempa'];
$id_jaminan_gempa = $_GET['id_jaminan_gempa'];

$result = mysqli_query($koneksi, "select a.nama_zona_gempa,b.nama_jenis_jaminan,c.nama_jaminan,d.nilai_zona_gempa from nilai_jaminan_gempa d JOIN zona_gempa a ON a.id_zona = d.id_zona  JOIN jenis_jaminan_gempa b ON b.id_jenis_jaminan_gempa = d.id_jenis_jaminan_gempa JOIN jaminan_gempa c ON c.id_jaminan_gempa = d.id_jaminan_gempa WHERE  a.id_zona = '$id_zona' AND b.id_jenis_jaminan_gempa = '$id_jenis_jaminan_gempa' AND c.id_jaminan_gempa = '$id_jaminan_gempa'");
$data = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)){
$data[] = array("id_zona" => $row['id_zona'], "id_jenis_jaminan_gempa" => $row['id_jenis_jaminan_gempa'], "id_jenis_jaminan_gempa" => $row['id_jenis_jaminan_gempa'], "id_jaminan_gempa" => $row['id_jaminan_gempa'],"id_nilai_gempa"=> $row['id_nilai_gempa'], "nilai_zona_gempa" => $row['nilai_zona_gempa']);
}
echo json_encode($data);
?>