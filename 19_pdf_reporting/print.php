<?php
//menyertakan file fpdf, file fpdf.php di dalam folder FPDF yang diekstrak
include "fpdf186/fpdf.php";
include "functions.php";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0, 0, 'Data Siswa', 0,1, 'C');
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'NO.',1,0, 'C');
$pdf->Cell(30,6,'GAMBAR',1,0, 'C');
$pdf->Cell(20,6,'NIS',1,0, 'C');
$pdf->Cell(50,6,'NAMA',1,0, 'C');
$pdf->Cell(45,6,'EMAIL',1,0, 'C');
$pdf->Cell(35,6,'JURUSAN',1,1, 'C');

$pdf->SetFont('Arial','',10);

// Koneksi database
$datasiswa = query("SELECT * FROM siswa");
$no = 1;
foreach ($datasiswa as $data){
    $pdf->Cell(10,6, $no++, 1.0);
    $pdf->Cell(30,6, 'Gambar' ,1,0);
    $pdf->Cell(20,6, $data['nis'], 1,0);
    $pdf->Cell(50,6, $data['nama'], 1,0);
    $pdf->Cell(45,6, $data['email'], 1,0);
    $pdf->Cell(35,6, $data['jurusan'], 1,0);
    $pdf->Cell(10,6,'',0,1);
}

$pdf->Output();

?>
