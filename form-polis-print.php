<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru

$pdf->AddPage();
$pdf->Image('assets/images/logoJP.jpeg',10,10,-600);

// setting jenis font yang akan digunakan

$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(200,25,'POLIS ASURANSI KEBAKARAN',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->SetFont('Times','BU');
$pdf->Cell(200,-10,'NO. 01.052.2008.02656',0,1,'C');
$pdf->Cell(200,30,'_________________________________________________________________________________________',0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(180,-5,'PT. JASARAHARJA PUTERA dengan ini menyatakan bahwa atas dasar ikhtisar di bawah ini,',0,1,'FJ');
$pdf->Cell(171,20,'tertanggung diansuransikan untuk hak dan kepentingan masing - masing, sesuai dengan',0,1,'FJ');
$pdf->Cell(82,-5,'ketentuan dan syarat - syarat polis induk.',0,1,'FJ');





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
