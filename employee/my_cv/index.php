<?php
require('html_table.php');
require '../../constants/db_config.php';
require '../constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employee") {
}else{
header("location:../");
}
}else{
header("location:../");
}

$conn = new PDO("mysql:host=207.244.242.219;dbname=job_board", 'root2', 'dxA9aj.4iZBmWy,)');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdf=new PDF_HTML_Table();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'HOLA YAVIRAC');
$pdf->Output();
?>