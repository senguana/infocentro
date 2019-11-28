<?php 
require '../../pdf/FPDF/fpdf.php';

$fpdf = new FPDF();
$fpdf->AddPage();
$fpdf->SetFont('Arial', '', 12);
$fpdf->Cell(30, 5, 'Hola mundo');
$fpdf->AddPage();
$fpdf->Write(5, 'Segundo pagina');
$fpdf->Output();

 ?>