<?php


$foto_masa = 'media/'.basename($_FILES['foto_masa']['name']);

$tip = strtolower(pathinfo($foto_masa, PATHINFO_EXTENSION));

if($tip!='jpg' && $tip!='jpeg' && $tip!='png' && $tip!='gif' && $tip!='webp')
{$error='<div class="alert alert-danger" role="alert">Yalniz <b>jpg, jpeg, png, gif, webp</b> fayl formatlrina icaze verlir</div>';}

if($_FILES['foto_masa']['size']>20971520)
{$error='<div class="alert alert-danger" role="alert">Fayin olcusu maksimum <b>15 Mb</b> ola biler</div>';}

if(!isset($error))
{
    $foto_masa = 'media/'.time().'2.'.$tip;
    move_uploaded_file($_FILES['foto_masa']['tmp_name'], $foto_masa);
}

?>
