<?php


$foto_bes = 'media/'.basename($_FILES['foto_bes']['name']);

$tip = strtolower(pathinfo($foto_bes, PATHINFO_EXTENSION));

if($tip!='jpg' && $tip!='jpeg' && $tip!='png' && $tip!='gif')
{$error='<div class="alert alert-danger" role="alert">Yalniz <b>jpg, jpeg, png, gif</b> fayl formatlrina icaze verlir</div>';}

if($_FILES['foto_bes']['size']>20971520)
{$error='<div class="alert alert-danger" role="alert">Fayin olcusu maksimum <b>15 Mb</b> ola biler</div>';}

if(!isset($error))
{
    $foto_bes = 'media/'.time().'.'.$tip;
    move_uploaded_file($_FILES['foto_bes']['tmp_name'], $foto_bes);
}


?>
