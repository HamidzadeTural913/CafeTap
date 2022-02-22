<?php


$foto_unvan = 'media/'.basename($_FILES['foto']['name']);

$tip = strtolower(pathinfo($foto_unvan, PATHINFO_EXTENSION));

if($tip!='jpg' && $tip!='jpeg' && $tip!='png' && $tip!='gif' && $tip!='webp')
{$error='<div class="alert alert-danger" role="alert">Yalniz <b>jpg, jpeg, png, webp</b> fayl formatlrina icaze verlir</div>';}

if($_FILES['foto']['size']>20971520)
{$error='<div class="alert alert-danger" role="alert">Fayin olcusu maksimum <b>15 Mb</b> ola biler</div>';}

if(!isset($error))
{
    $foto_unvan = 'media/'.time().'1.'.$tip;
    move_uploaded_file($_FILES['foto']['tmp_name'], $foto_unvan);
}


?>



