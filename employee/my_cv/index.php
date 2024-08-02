<?php
require('html_table.php');
require '../.././constants/db_config.php';
require '../constants/check-login.php';

if ($user_online == "true") {
if ($myrole == "employee") {
}else{
header("location:../");
}
}else{
header("location:../");
}

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("SELECT * FROM tbl_users WHERE member_no = '$myid'");
$stmt->execute();
$result = $stmt->fetchAll();

$pdf->Output(''.$myfname.' '.$mylname.' CV.pdf', 'I');
?>