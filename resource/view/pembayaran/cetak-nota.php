<?php
include_once("../../../connection.php");
// Update status polis pada form polis

$id_polis = $_GET['id'];
$status_nota = $_POST['status_nota'];
mysqli_query($koneksi, "INSERT INTO cetak_polis(id, id_polis, status_nota) VALUES (NULL,'$id_polis','$status_nota')");
// ------------------------------------------------------------------------------------------------


// memanggil library FPDF
require('../../../fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L','mm','A4');
// membuat halaman baru

$pdf->AddPage();
$pdf->Image('../../../assets/images/logoJP.jpeg',230,10,-600);

// setting jenis font yang akan digunakan

$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(280,25,'KWITANSI PREMI',0,1,'C');
$pdf->SetFont('Arial','B',12);

//colom tabel
$pdf->Cell(10,7,'',0,1);
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','',12);

$i=1;
$id = $_GET['id'];
$cetak_polis = mysqli_query($koneksi, "SELECT * FROM form_polis WHERE id='$id_polis' ");
while ($polis = mysqli_fetch_array($cetak_polis)){
//isi item
$pdf->SetFont('Arial','B',12);


// $pdf->Cell(5,7,'',0,0);
// $pdf->Cell(5,7,$polis['tertanggung'],0,0);
// $pdf->Cell(20,7,$polis[''],0,0);
// $pdf->Cell(20,7,$polis[''],0,0);
// $pdf->Cell(20,7,$polis[''],0,1);
// $pdf->Cell(20,7,$polis['alamat'],0,1);


$pdf->SetFont('Arial','',12);
$pdf->Cell(20,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,7,'',0,0);
$pdf->Cell(40,7,strtoupper($polis['tertanggung']),0,0);
$pdf->Cell(50,7,'',0,0);
$pdf->Cell(20,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,1);
$i++;

$pdf->SetFont('Arial','',12);
$pdf->Cell(20,7,'',0,0);
$pdf->Cell(40,7,$polis['alamat'],0,0);
$pdf->Cell(50,7,'',0,0);
$pdf->Cell(20,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,1);
$pdf->Cell(30,7,$polis[''],0,1);


$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,7,'',0,0);
$pdf->Cell(40,7,'Kami telah menerimah pembayaran berikut ini :',0,0);
$pdf->Cell(50,7,'',0,0);
$pdf->Cell(20,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,1);


$pdf->SetFont('Arial','',12);
$pdf->Cell(20,7,'',0,0);
$pdf->Cell(40,7,'Jumlah Pembayaran :',0,0);
$pdf->Cell(50,7,'',0,0);
$pdf->Cell(20,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,0);


$pdf->SetFont('Arial','',12);

$harga_dibayarkan = $polis['total_kembalian'] + $polis['harga_pertanggungan'];

$pdf->Cell(-120,7,'',0,0);
$pdf->Cell(-120,7,number_format($harga_dibayarkan,2,'.',','),0,0);
$pdf->Cell(-120,7,'',0,0);
$pdf->Cell(-120,7,$polis[''],0,0);
$pdf->Cell(-120,7,$polis[''],0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(20,7,'',0,0);
$pdf->Cell(40,7,'Harga Pertanggungan :',0,0);
$pdf->Cell(50,7,'',0,0);
$pdf->Cell(20,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,0);


$pdf->SetFont('Arial','',12);

$harga_dibayarkan = $polis['total_kembalian'] + $polis['harga_pertanggungan'];

$pdf->Cell(-120,7,'',0,0);
$pdf->Cell(-120,7,number_format($polis['harga_pertanggungan'],2,'.',','),0,0);
$pdf->Cell(-120,7,'',0,0);
$pdf->Cell(-120,7,$polis[''],0,0);
$pdf->Cell(-120,7,$polis[''],0,1);

$pdf->Cell(20,7,'',0,0);
$pdf->Cell(40,2,'                                                                    __',0,0);
$pdf->Cell(50,7,'',0,0);
$pdf->Cell(20,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,1);

$pdf->Cell(20,7,'',0,0);
$pdf->Cell(40,2,'____________________________________',0,0);
$pdf->Cell(50,7,'',0,0);
$pdf->Cell(20,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,1);


$pdf->SetFont('Arial','',12);
$pdf->Cell(20,7,'',0,0);
$pdf->Cell(40,7,'Uang Kembalian :',0,0);
$pdf->Cell(50,7,'',0,0);
$pdf->Cell(20,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,0);
$pdf->Cell(30,7,$polis[''],0,0);


$pdf->SetFont('Arial','',12);

$harga_dibayarkan = $polis['total_kembalian'] + $polis['harga_pertanggungan'];

$pdf->Cell(-120,7,'',0,0);
$pdf->Cell(-120,7,number_format($polis['total_kembalian'],2,'.',','),0,0);
$pdf->Cell(-120,7,'',0,0);
$pdf->Cell(-120,7,$polis[''],0,0);
$pdf->Cell(-120,7,$polis[''],0,1);



$pdf->SetFont('Arial','B',12);
$pdf->Cell(183,7,'',0,0);
$pdf->Cell(63,-90,'No. Polis :',0,0);
$pdf->Cell(183,-90,$polis['no_polis'],0,0);
$pdf->Cell(183,7,$polis[''],0,0);
$pdf->Cell(183,7,$polis[''],0,0);
$pdf->Cell(183,7,$polis[''],0,1);
$pdf->SetFont('Arial','',12);

$pdf->Cell(183,7,'',0,0);
$pdf->Cell(64,-90,'Biaya Materai :',0,0);
$pdf->Cell(183,-90,number_format(3000,2,'.',','),0,0);
$pdf->Cell(183,7,$polis[''],0,0);
$pdf->Cell(183,7,$polis[''],0,0);
$pdf->Cell(183,7,$polis[''],0,1);

$pdf->Cell(183,7,'',0,0);
$pdf->Cell(60,-90,'Cara Bayar :',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(183,-90,'Auto Debit',0,0);
$pdf->Cell(183,7,$polis[''],0,0);
$pdf->Cell(183,7,$polis[''],0,0);
$pdf->Cell(183,7,$polis[''],0,1);
$pdf->SetFont('Arial','',12);

$pdf->Cell(183,7,'',0,0);
$pdf->Cell(50,-90,'Tanggal Jatuh Tempo :',0,0);
$pdf->Cell(183,-90,date('d F Y', strtotime($polis['jangka_waktu'])),0,0);
$pdf->Cell(183,7,$polis[''],0,0);
$pdf->Cell(183,7,$polis[''],0,0);
$pdf->Cell(183,7,$polis[''],0,1);

$pdf->Cell(183,7,'',0,0);
$pdf->Cell(50,-90,'Tanggal Bayar :',0,0);
$pdf->Cell(183,-90,date('d F Y',strtotime($polis['batas_waktu'])),0,0);
$pdf->Cell(183,7,$polis[''],0,0);
$pdf->Cell(183,7,$polis[''],0,0);
$pdf->Cell(183,7,$polis[''],0,1);
// $pdf->Cell(50,7,'',0,0);
// $pdf->Cell(50,7,'Obyek Pertanggungan  ',0,0);
// $pdf->Cell(50,7,$polis['obyek_pertanggungan'],0,0);
// $pdf->Cell(20,7,$polis[''],0,0);
// $pdf->Cell(30,7,$polis[''],0,0);
// $pdf->Cell(30,7,$polis[''],0,1);

// $pdf->Cell(50,7,'',0,0);
// $pdf->Cell(50,7,'Harga Pertanggungan  ',0,0);
// $pdf->Cell(50,7,$polis['harga_pertanggungan'],0,0);
// $pdf->Cell(20,7,$polis[''],0,0);
// $pdf->Cell(30,7,$polis[''],0,0);
// $pdf->Cell(30,7,$polis[''],0,1);

// $pdf->Cell(50,7,'',0,0);
// $pdf->Cell(50,7,'Luas Jaminan  ',0,0);
// $pdf->Cell(50,7,$polis['luas_jaminan'],0,0);
// $pdf->Cell(20,7,$polis[''],0,0);
// $pdf->Cell(30,7,$polis[''],0,0);
// $pdf->Cell(30,7,$polis[''],0,1);

// $pdf->Cell(50,7,'',0,0);
// $pdf->Cell(50,7,'Lokasi Obyek ',0,0);
// $pdf->Cell(50,7,$polis['lokasi_obyek'],0,0);
// $pdf->Cell(20,7,$polis[''],0,0);
// $pdf->Cell(30,7,$polis[''],0,0);
// $pdf->Cell(30,7,$polis[''],0,1);

// $pdf->Cell(50,7,'',0,0);
// $pdf->Cell(50,7,'Jangka Waktu  ',0,0);
// $pdf->Cell(50,7,$polis['jangka_waktu'],0,0);
// $pdf->Cell(20,7,$polis[''],0,0);
// $pdf->Cell(30,7,$polis[''],0,0);
// $pdf->Cell(30,7,$polis[''],0,1);

$pdf->SetFont('Arial','',8);
}


// $pdf->Cell(10,7,'',0,1);
// $pdf->Cell(10,7,'',0,1);
// $pdf->Cell(80,7,'',0,0);
// $pdf->Cell(80,7,'',0,0);
// $pdf->Cell(80,7,'',0,0);
// $pdf->Cell(80,7,'Surabaya',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(61,7,'',0,1);
$pdf->Cell(61,7,'',0,0);
$pdf->Cell(61,7,'',0,0);
$pdf->Cell(61,7,'',0,0);
$pdf->Cell(61,-70,'PT. JASARAHARJA PUTERA  ',0,0);


$pdf->SetFont('Arial','',12);
$pdf->Cell(61,7,'',0,1);
$pdf->Cell(61,7,'',0,0);
$pdf->Cell(61,7,'',0,0);
$pdf->Cell(61,7,'',0,0);
$pdf->Cell(61,-70,'Tanggal: '.date('d F Y'),0,0);


// $pdf->SetFont('Arial','',10);
// $pdf->Cell(50,7,'',0,0);
// $pdf->Cell(50,7,'',0,0);
// $pdf->Cell(45,7,'',0,0);
// $pdf->Cell(50,7,'Yang diberi kuasa  ',0,0);










// Memberikan space kebawah agar tidak terlalu rapat
// $pdf->Cell(10,7,'',0,1);

// $pdf->SetFont('Arial','B',10);
// $pdf->Cell(20,6,'NIM',1,0);
// $pdf->Cell(85,6,'NAMA MAHASISWA',1,0);
// $pdf->Cell(27,6,'NO HP',1,0);
// $pdf->Cell(25,6,'TANGGAL LHR',1,1);

// $pdf->SetFont('Arial','',10);

// include 'connection.php';
// $id = $_GET['id'];
// // Fetech user data based on id
// $result = mysqli_query($koneksi, "SELECT * FROM form_polis WHERE id=$id");
// while ($row = mysqli_fetch_array($result)){
//     $pdf->Cell(20,6,$row['id'],1,0);
//     $pdf->Cell(85,6,$row['tertanggung'],1,0);
//     $pdf->Cell(27,6,$row['no_hp'],1,0);
//     $pdf->Cell(25,6,$row['tanggal_lahir'],1,1); 
// }

$pdf->Output();
?>
