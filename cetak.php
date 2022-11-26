<?php 
include "koneksi.php";
require_once ("assets/fpdf/fpdf.php");

class PDF extends FPDF{
}
$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', '16');
$pdf->Cell(0,20,'LAPORAN DATA SUHU & KELEMBABAN','0',1,'C');
$pdf->SetFont('Arial', 'B', '11');


$pdf->SetFont('Arial', 'B', '11');
$pdf->SetFillColor(255,0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor(128,0,0);
$pdf->Cell(22,7,'NO',1,'0', 'C',true);
$pdf->Cell(45,7,'SUHU',1,'0', 'C',true);
$pdf->Cell(50,7,'KELEMBAPAN',1,'0', 'C',true);
$pdf->Cell(65,7,'WAKTU',1,'0', 'C',true);
$pdf->Ln();


$pdf->SetFont('Arial', '',11);
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$i=0;
$tampil = mysqli_query($konek, "SELECT * FROM t_info ORDER BY suhu ASC");
while($data=mysqli_fetch_array($tampil)){
    $i++;
    $pdf->Cell(22,7, $i, 1, '0','C', true);
    $pdf->Cell(45,7, $data['suhu'], 1, '0', 'C',true);
    $pdf->Cell(50,7, $data['kelembaban'], 1, '0', 'C', true);
    $pdf->Cell(65,7, $data['waktu'], 1, '0', 'C', true);
    $pdf->Ln();
}
$pdf->Output('i','Laporan Data Suhu & Kelembaban.pdf','false'); 
?>