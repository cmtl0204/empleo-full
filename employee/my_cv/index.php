<?php
require('html_table.php');
require '../.././constants/db_config.php';
require '../constants/check-login.php';

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'HOLA YAVIRAC');
$pdf->Output();
?>