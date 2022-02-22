<?php


$pdf = 'menu/'.basename($_FILES['pdf']['name']);

$tip = strtolower(pathinfo($pdf, PATHINFO_EXTENSION));

$pdf = 'menu/'.time().'.'.$tip;
//seklin adinin deyisilmesi


if($tip!='pdf')
{$error='<div class="alert alert-danger" role="alert">Yalniz <b>PDF formatına icazə verilir</b> fayl formatlrina icaze verlir</div>';}

if($_FILES['pdf']['size']>2097152054678)
{$error='<div class="alert alert-danger" role="alert">PDF-in ölçüsü maksimum <b>15 Mb</b> ola biler</div>';}

if(!isset($error))
{move_uploaded_file($_FILES['pdf']['tmp_name'], $pdf);}
else
{echo $error;}

?>
