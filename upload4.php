<?php


$foto_dord = 'media/'.basename($_FILES['foto_dord']['name']);

$tip = strtolower(pathinfo($foto_dord, PATHINFO_EXTENSION));

if($tip!='jpg' && $tip!='jpeg' && $tip!='png' && $tip!='gif')
{$error='<div class="alert alert-danger" role="alert">Yalniz <b>jpg, jpeg, png, gif</b> fayl formatlrina icaze verlir</div>';}

if($_FILES['foto_dord']['size']>20971520)
{$error='<div class="alert alert-danger" role="alert">Fayin olcusu maksimum <b>15 Mb</b> ola biler</div>';}

if(!isset($error))
{
    $foto_dord = 'media/'.time().'4.'.$tip;
    move_uploaded_file($_FILES['foto_dord']['tmp_name'], $foto_dord);
}

?>
