<?php

print_r($_FILES);

$foto_zal = 'media/'.basename($_FILES['foto_zal']['name']);

$tip = strtolower(pathinfo($foto_zal, PATHINFO_EXTENSION));

if($tip!='jpg' && $tip!='jpeg' && $tip!='png' && $tip!='gif' && $tip!='webp')
{$error='<div class="alert alert-danger" role="alert">Yalniz <b>jpg, jpeg, png, gif, webp</b> fayl formatlrina icaze verlir</div>';}

if($_FILES['foto_zal']['size']>2097152000)
{$error='<div class="alert alert-danger" role="alert">Faylin olcusu maksimum <b>15 Mb</b> ola biler</div>';}

if(!isset($error))
{
    $foto_zal = 'media/'.time().'3.'.$tip;
    move_uploaded_file($_FILES['foto_zal']['tmp_name'], $foto_zal);
    
}


?>

